<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Navbar;
use App\Models\PPDB;
use Illuminate\Http\Request;

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
        $ppdb_url = PPDB::first();

        $navbar = Navbar::first();
        $footer = Footer::first();

        return view('pages.ppdb', compact('ppdb', 'ppdb_url', 'navbar', 'footer'));
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
     * @param  \App\Models\PPDB  $pPDB
     * @return \Illuminate\Http\Response
     */
    public function show(PPDB $pPDB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PPDB  $pPDB
     * @return \Illuminate\Http\Response
     */
    public function edit(PPDB $pPDB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PPDB  $pPDB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PPDB $pPDB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PPDB  $pPDB
     * @return \Illuminate\Http\Response
     */
    public function destroy(PPDB $pPDB)
    {
        //
    }
}
