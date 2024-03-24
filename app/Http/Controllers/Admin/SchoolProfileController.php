<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolProfile\SchoolProfileRequest;
use App\Models\SchoolProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SchoolProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = SchoolProfile::first();
        return view('admin.pages.profile.sekolah', compact('school'));
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
    public function update(SchoolProfileRequest $request, $id)
    {
        $school = SchoolProfile::findOrFail($id);
        $validated = $request->validated();

        $logo_label = $validated['logo_label'];
        $principal_name = $validated['principal_name'];
        $principal_text = $validated['principal_text'];
        $campus1 = $validated['campus1'];
        $campus2 = $validated['campus2'];

        if ($request->hasFile('logo') && $request->hasFile('principal_foto')) {

            if ($school->principal_foto !== 'sambutan_kepsek.JPG' && $school->logo !== 'logo_sdmku_compress.png') {
                $deleteLogo = Storage::disk('public')->delete('images/school_profile/' . $school->logo);
                $deleteFoto = Storage::disk('public')->delete('images/school_profile/' . $school->principal_foto);
            }

            $logo = $request->file('logo');
            $logoExtension = $logo->getClientOriginalExtension();
            $logoName = Str::uuid() . '.' . $logoExtension;
            $logo->storeAs("images/school_profile/", $logoName);

            $principalFoto = $request->file('principal_foto');
            $principalFotoExtension = $principalFoto->getClientOriginalExtension();
            $principalFotoName = Str::uuid() . '.' . $principalFotoExtension;
            $principalFoto->storeAs("images/school_profile/", $principalFotoName);

            // Simpan path gambar ke dalam database
            $school->update([
                'logo_label' => $logo_label,
                'principal_name' => $principal_name,
                'principal_text' => $principal_text,
                'campus1' => $campus1,
                'campus2' => $campus2,
                'logo' => $logoName,
                'principal_foto' => $principalFotoName,
            ]);

            // return dd($storeUploadFile);
        } elseif ($request->filled('logo_gdrive')) {
            // Jika ada URL Google Drive yang disertakan
            $school->update([
                'logo_label' => $logo_label,
                'principal_name' => $principal_name,
                'principal_text' => $principal_text,
                'campus1' => $campus1,
                'campus2' => $campus2,

                'logo' => $request->input('logo_gdrive'),
                'principal_foto' => $request->input('principal_foto_gdrive'),
            ]);
        } else {
            $school->update([
                'logo_label' => $logo_label,
                'principal_name' => $principal_name,
                'principal_text' => $principal_text,
                'campus1' => $campus1,
                'campus2' => $campus2,
            ]);
        }

        return redirect()->route('admin.profil_sekolah.index')->with('success', 'Data Profil Sekolah berhasil diperbarui!');
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
