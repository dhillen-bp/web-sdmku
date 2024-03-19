<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Vision;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vision = Vision::get()->first();
        $mission = Mission::get()->first();
        return view('pages.visi-misi', compact('vision', 'mission'));
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
     * @param  \App\Models\Mission  $mision
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mision
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mision)
    {
        //
    }
}
