<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisatas = Wisata::all();
        $blogs = Blog::latest('created_at') // Urutkan berdasarkan created_at secara desc
            ->take(6) // Ambil 6 item
            ->get();
         // Ambil semua tags dari tabel blogs
         $allTags = DB::table('blogs')
         ->whereNotNull('tags') // Pastikan tags tidak null
         ->pluck('tags')
         ->toArray();

     // Gabungkan semua tags menjadi satu array
     $tagsArray = [];
     foreach ($allTags as $tags) {
         $tagsArray = array_merge($tagsArray, explode(',', $tags));
     }

     // Hitung frekuensi setiap tag
     $tagCounts = array_count_values($tagsArray);

     // Urutkan berdasarkan frekuensi kemunculan (desc)
     arsort($tagCounts);

     // Ambil 5 tag teratas
     $topTags = array_slice($tagCounts, 0, 5, true);

        return view('Landing_page.index', compact('blogs','wisatas','topTags'));
    }
    public function tour()
    {
        $wisatas = Wisata::all();
        $blogs = Blog::all();

        return view('Landing_page.tour', compact('blogs','wisatas'));
    }
    public function about()
    {
        $wisatas = Wisata::all();
        $blogs = Blog::all();

        return view('Landing_page.about', compact('blogs','wisatas'));
    }
    public function blog()
    {
        $wisatas = Wisata::all();
        $blogs = Blog::all();

        return view('Landing_page.blog', compact('blogs','wisatas'));
    }
    public function showblog(Blog $blog)
    {
        // Ambil blog lain dengan kategori yang sama, kecuali blog yang sedang ditampilkan
        $blogs = Blog::where('category', $blog->category)  // Ganti 'category' dengan nama kolom kategori Anda
            ->where('id', '!=', $blog->id)  // Pastikan blog yang sedang ditampilkan tidak muncul dalam daftar
            ->get();

        // Mengakses data wisata terkait dengan blog
        $wisata = $blog->wisata;  // Relasi yang sudah ditentukan pada model Blog

        return view('Landing_page.showblog', compact('blog', 'blogs', 'wisata'));
    }

   public function topTags()
    {
        // Ambil semua tags dari tabel blogs
        $allTags = DB::table('blogs')
            ->whereNotNull('tags') // Pastikan tags tidak null
            ->pluck('tags')
            ->toArray();

        // Gabungkan semua tags menjadi satu array
        $tagsArray = [];
        foreach ($allTags as $tags) {
            $tagsArray = array_merge($tagsArray, explode(',', $tags));
        }

        // Hitung frekuensi setiap tag
        $tagCounts = array_count_values($tagsArray);

        // Urutkan berdasarkan frekuensi kemunculan (desc)
        arsort($tagCounts);

        // Ambil 5 tag teratas sebagai array
        $topTags = array_slice($tagCounts, 0, 5, true);

        // Kirim data ke view
        return view('Landing_page.index', compact('topTags'));
    }

        public function filterByTag($tag)
    {
        // Ambil artikel yang memiliki tag tertentu
        $articles = DB::table('blogs')
            ->where('tags', 'LIKE', '%' . $tag . '%')
            ->get();

        // Kirim data artikel ke view
        return view('Landing_page.tags', compact('articles', 'tag'));
    }


    public function showByCategory($category)
    {
        // Ambil artikel berdasarkan kategori
        $artikels = Blog::where('category', $category)->get();

        // Pastikan kategori valid
        if (!in_array($category, ['Biotik', 'Abiotik', 'Cultural'])) {
            return redirect()->back()->with('error', 'Kategori tidak valid.');
        }

        return view('Landing_page.blogCategory', compact('artikels', 'category'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $articles = Blog::where('content', 'like', '%' . $query . '%')->get();
        return view('Landing_page.resultSearch', compact('articles', 'query'));
    }
    public function liveSearch(Request $request)
{
    $query = $request->input('query');
    $articles = Blog::where('content', 'like', '%' . $query . '%')->get();

    // Mengembalikan hasil pencarian dalam bentuk HTML
    $output = '';
    if (count($articles) > 0) {
        foreach ($articles as $article) {
            $output .= '<div class="search-item">';
            $output .= '<h5>' . $article->title . '</h5>';
            $output .= '</div>';
        }
    } else {
        $output .= '<p>No results found</p>';
    }

    return response()->json(['html' => $output]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
