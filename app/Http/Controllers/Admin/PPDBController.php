<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PPDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PPDBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdb = PPDB::get();
        $ppdb_1 = PPDB::first();
        return view('admin.pages.ppdb.index', compact('ppdb', 'ppdb_1'));
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
        $ppdb = PPDB::first();
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/ppdb/", $imageName);
        }
        $validated['image'] = $imageName;

        $storePPDB = PPDB::create($validated);
        return redirect()->route('admin.ppdb.index')->with('success', 'PPDB Image berhasil ditambahkan!')->withErrors($validated);
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
        $ppdb = PPDB::find($id);

        if ($ppdb->image != 'Brosur_1.jpg') {
            if (!empty($ppdb->image)) {
                $deleteImage = Storage::disk('public')->delete('images/ppdb/' . $ppdb->image);
            }
        }

        $ppdb->delete();

        return redirect()->route('admin.ppdb.index')->with('success', 'PPDB Image Deleted Successfully!');
    }

    public function urlUpdate(Request $request)
    {
        $validated = $request->validate([
            'url_ppdb' => 'required',
        ]);

        $ppdb = PPDB::firstOrFail();
        $update = $ppdb->update($validated);
        return redirect()->route('admin.ppdb.index')->with('success', "URL PPDB berhasil diperbarui!")->withErrors($validated);
    }
}
