<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Home\UpdateRequest;
use App\Models\Home;
use App\Models\HomeFeatured;
use App\Models\HomeHero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::get()->first();
        $homeHero = HomeHero::get();
        $homeFeatured = HomeFeatured::get();

        return view('admin.pages.home.index', compact('home'));
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
    public function update(UpdateRequest $request)
    {
        $home = Home::first();
        $validated = $request->validated();

        $imageName = $home->ppdb_banner;
        if ($request->hasFile('ppdb_banner')) {
            $image = $request->file('ppdb_banner');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/home", $imageName);
        }

        $validated['ppdb_banner'] = $imageName;

        if ($home->ppdb_banner !== 'ppdb_banner_default.png') {
            $deleteBanner = Storage::disk('public')->delete('images/home/' . $home->ppdb_banner);
        }

        $HomeUpdate = $home->update($validated);

        // return dd($request->all());

        return redirect('/admin/home/')->with('success', "Home berhasil diperbarui!")->withErrors($validated);
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
