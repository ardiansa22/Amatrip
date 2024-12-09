<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Wisata;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:vendor-any', ['any']);
    }
    public function index()
    {
        // Ambil semua wisata yang dikelola oleh pengelola yang sedang login
        $userId = Auth::id();
        $wisataIds = Wisata::where('user_id', $userId)->pluck('id');

        // Ambil semua blog yang terkait dengan wisata yang dikelola
        $blogs = Blog::whereIn('wisata_id', $wisataIds)->get();

        return view('vendor.artikel.index', compact('blogs'));
    }

    public function create()
    {
        $wisatas = Wisata::all(); // Ambil semua wisata
        return view('vendor.artikel.create', compact('wisatas'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'wisata_id' => 'required|exists:wisatas,id',
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'content' => 'required|string',
        'author' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'published_date' => 'nullable|date',
        'tags' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Jika ada file image, simpan ke storage
    $imagePath = $request->hasFile('image') ? $request->file('image')->store('posts', 'public') : null;

    // Slug default jika tidak ada yang diisi
    $slug = $validated['slug'] ?? Str::slug($validated['title']);

    // Membuat post secara rinci
    Blog::create([
        'wisata_id' => $validated['wisata_id'],
        'title' => $validated['title'],
        'slug' => $slug,
        'content' => $validated['content'],
        'author' => $validated['author'],
        'category' => $validated['category'],
        'published_date' => $validated['published_date'] ?? null,
        'tags' => $validated['tags'] ?? null,
        'image' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Post created successfully!');
}

    public function edit(Blog $blog)
    {
        $wisatas = Wisata::all();
        return view('admin.blogs.edit', compact('blog', 'wisatas'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,' . $blog->id,
            'content' => 'required',
            'wisata_id' => 'required|exists:wisatas,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'excerpt' => 'nullable|string|max:255',
        ]);

        // Handle image upload (optional)
        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
            // Jika ada gambar baru, hapus gambar lama
            if ($blog->image && file_exists(public_path('storage/' . $blog->image))) {
                unlink(public_path('storage/' . $blog->image));
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('images/blogs', 'public');
        }

        $blog->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'image' => $imagePath,
            'excerpt' => $request->excerpt,
            'wisata_id' => $request->wisata_id,
            'status' => $request->status,
        ]);

        return redirect()->route('blogs.index');
    }

    public function destroy(Blog $blog)
    {
        // Hapus gambar jika ada
        if ($blog->image && file_exists(public_path('storage/' . $blog->image))) {
            unlink(public_path('storage/' . $blog->image));
        }
        
        $blog->delete();
        return redirect()->route('blogs.index');
    }

    public function toggleActive(Blog $blog)
    {
        $blog->status = $blog->status === 'active' ? 'inactive' : 'active';
        $blog->save();
        return redirect()->route('blogs.index');
    }

    public function incrementViews(Blog $blog)
    {
        $blog->increment('views');
        return redirect()->route('blogs.show', $blog);
    }
}

