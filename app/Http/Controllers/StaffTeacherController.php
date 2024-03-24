<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\StaffTeacher;
use Illuminate\Http\Request;

class StaffTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = StaffTeacher::paginate(10);
        $navbar = Navbar::first();

        return view('pages.guru-staf', compact('teachers', 'navbar'));
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
     * @param  \App\Models\StaffTeacher  $staffTeacher
     * @return \Illuminate\Http\Response
     */
    public function show(StaffTeacher $staffTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffTeacher  $staffTeacher
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffTeacher $staffTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaffTeacher  $staffTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffTeacher $staffTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffTeacher  $staffTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffTeacher $staffTeacher)
    {
        //
    }
}
