<?php

namespace App\Http\Controllers;

use App\Models\KBM;
use App\Models\Navbar;
use Illuminate\Http\Request;

class KBMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kbm = KBM::first();
        $navbar = Navbar::first();

        return view('pages.kbm', compact('kbm', 'navbar'));
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
     * @param  \App\Models\KBM  $kBM
     * @return \Illuminate\Http\Response
     */
    public function show(KBM $kBM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KBM  $kBM
     * @return \Illuminate\Http\Response
     */
    public function edit(KBM $kBM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KBM  $kBM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KBM $kBM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KBM  $kBM
     * @return \Illuminate\Http\Response
     */
    public function destroy(KBM $kBM)
    {
        //
    }
}
