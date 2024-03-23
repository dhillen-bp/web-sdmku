<?php

namespace App\Http\Controllers;

use App\Models\SchoolProfile;
use Illuminate\Http\Request;

class SchoolProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = SchoolProfile::first();
        return view('pages.tentang-kami', compact('profile'));
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
     * @param  \App\Models\SchoolProfile  $schoolProfile
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolProfile $schoolProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolProfile  $schoolProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolProfile $schoolProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SchoolProfile  $schoolProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolProfile $schoolProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolProfile  $schoolProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolProfile $schoolProfile)
    {
        //
    }
}
