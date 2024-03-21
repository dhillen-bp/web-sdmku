<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\HomeHero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeHero = HomeHero::get();

        return view('admin.pages.home.hero-banner', compact('homeHero'));
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
        $home = Home::first();
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $validated['home_id'] = $home->id;

        $imageName = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/home", $imageName);
        }
        $validated['image'] = $imageName;

        $storeHero = HomeHero::create($validated);
        return redirect()->route('home.hero.index');
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
        $hero = HomeHero::find($id);

        if ($hero->image != 'hero_default.JPG') {
            if (!empty($hero->image)) {
                $deleteImage = Storage::disk('public')->delete('images/home/' . $hero->image);
            }
        }

        $hero->delete();

        return redirect('/admin/home/hero-banner')->with('success', 'Hero Image Deleted Successfully!');
    }
}
