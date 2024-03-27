<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Navbar;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(8);

        $news->transform(function ($item) {
            $item->tanggal = Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY');
            return $item;
        });

        $navbar = Navbar::first();
        $footer = Footer::first();

        return view('pages.berita', compact('news', 'navbar', 'footer'));
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
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        $newsTanggal = Carbon::parse($news->created_at)->isoFormat('D MMMM YYYY');

        $newsLatests = News::latest()->take(3)->get();
        $newsLatests->transform(function ($item) {
            $item->tanggal = Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY');
            return $item;
        });

        $navbar = Navbar::first();
        $footer = Footer::first();

        return view('pages.berita-detail', compact('news', 'newsTanggal', 'newsLatests', 'navbar', 'footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
