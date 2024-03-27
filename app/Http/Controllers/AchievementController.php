<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\AchievementCategories;
use App\Models\Footer;
use App\Models\Navbar;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = Achievement::paginate(9);
        $categories = AchievementCategories::get();

        $navbar = Navbar::first();
        $footer = Footer::first();

        return view('pages.prestasi', compact('achievements', 'categories', 'navbar', 'footer'));
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
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement $achievement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievement $achievement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        //
    }

    public function showBasedCategory($slug)
    {
        $achievements = Achievement::with('category')->whereHas('category', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->paginate(9);
        $categories = AchievementCategories::get();

        $navbar = Navbar::first();
        $footer = Footer::first();

        return view('pages.prestasi-based-category', compact('achievements', 'categories', 'slug', 'navbar', 'footer'));
    }
}
