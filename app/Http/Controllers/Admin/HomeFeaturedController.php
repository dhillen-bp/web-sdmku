<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Home\StoreFeaturedRequest;
use App\Http\Requests\Home\UpdateFeaturedRequest;
use App\Models\Home;
use App\Models\HomeFeatured;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeFeaturedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeFeatured = HomeFeatured::get();

        return view('admin.pages.home.home-featured', compact('homeFeatured'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.home.home-featured-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeaturedRequest $request)
    {
        $home = Home::first();
        $validated = $request->validated();
        $validated['home_id'] = $home->id;

        $imageName = '';
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/home", $imageName);
        }
        $validated['featured_image'] = $imageName;

        $storeFeatured = HomeFeatured::create($validated);
        return redirect()->route('home.featured.index')->with('success', 'Program Unggulan Berhasil Disimpan!');
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
        $featured = HomeFeatured::where('id', $id)->first();
        return view('admin.pages.home.home-featured-edit', compact('featured'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeaturedRequest $request, $id)
    {
        $home = Home::first();
        $featured = HomeFeatured::where('id', $id)->first();
        $validated = $request->validated();
        $validated['home_id'] = $home->id;

        $imageName = $featured->featured_image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/home/", $imageName);
        }

        $deleteImage = Storage::disk('public')->delete('images/home/' . $featured->image);


        $validated['featured_image'] = $imageName;

        $updateFeatured = $featured->update($validated);
        return redirect()->route('home.featured.index')->with('success', 'Program Unggulan Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $featured = HomeFeatured::where('id', $id)->first();

        if (!empty($featured->image)) {
            $deleteImage = Storage::disk('public')->delete('images/home/' . $featured->image);
        }

        $featured->delete();

        return redirect('/admin/home/program-unggulan')->with('success', 'Program Unggulan berhasil dihapus!');
    }
}
