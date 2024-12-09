<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

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
        $blogs = Blog::all();

        return view('Landing_page.index', compact('blogs','wisatas'));
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

        return view('Landing_page.showblog', compact('blog', 'blogs'));
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
