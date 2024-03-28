<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffTeacher\StoreRequest;
use App\Models\StaffTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GuruStafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = StaffTeacher::paginate(10);

        return view('admin.pages.profile.guru-staf', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.profile.guru-staf-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // return dd($request->all());
        $validated = $request->validated();

        $name = $validated['name'];
        $position = $validated['position'];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/guru_staf", $imageName);

            // Simpan path gambar ke dalam database
            $storeUploadFile = StaffTeacher::create([
                'name' => $name,
                'position' => $position,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } elseif ($request->filled('image_gdrive')) {
            // Jika input adalah URL Google Drive, langsung simpan URL ke dalam database
            $storeWithGDrive = StaffTeacher::create([
                'name' => $name,
                'position' => $position,
                'image' => $request->input('image_gdrive'),
            ]);
            // return dd($storeWithGDrive);
        } else {
            return redirect()->back()->withErrors('Anda harus mengupload gambar atau menyediakan URL Google Drive.')->withInput();
        }

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru berhasil disimpan!');
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
        $teacher = StaffTeacher::find($id);
        return view('admin.pages.profile.guru-staf-edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        $teacher = StaffTeacher::find($id);
        $validated = $request->validated();

        $name = $validated['name'];
        $position = $validated['position'];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/guru_staf", $imageName);

            $deleteImage = Storage::disk('public')->delete('images/guru_staf/' . $teacher->image);

            // Simpan path gambar ke dalam database
            $storeUploadFile = StaffTeacher::create([
                'name' => $name,
                'position' => $position,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } elseif ($request->filled('image_gdrive')) {
            // Jika ada URL Google Drive yang disertakan
            $teacher->update([
                'name' => $name,
                'position' => $position,
                'image' => $request->input('image_gdrive'),
            ]);
        } else {
            // Jika tidak ada perubahan pada gambar
            $teacher->update([
                'name' => $name,
                'position' => $position,
            ]);
        }

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = StaffTeacher::find($id);

        if (!empty($teacher->image)) {
            if (!Str::contains($teacher->image, 'drive')) {
                $deleteImage = Storage::disk('public')->delete('images/guru_staf/' . $teacher->image);
            }
            $teacher->delete();
        }

        return redirect('/admin/profil/guru-staf')->with('success', 'Data Guru/Staff berhasil dihapus!');
    }
}
