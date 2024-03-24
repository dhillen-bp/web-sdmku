<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Extracurricular\EskulRequest;
use App\Models\Extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extracurriculars = Extracurricular::Paginate(6);
        return view('admin.pages.kegiatan.ekstrakurikuler', compact('extracurriculars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.kegiatan.ekstrakurikuler-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EskulRequest $request)
    {
        $validated = $request->validated();

        $name = $validated['name'];
        $desc = $validated['desc'];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/eskul", $imageName);

            // Simpan path gambar ke dalam database
            $storeUploadFile = Extracurricular::create([
                'name' => $name,
                'desc' => $desc,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } else {
            // Jika input adalah URL Google Drive, langsung simpan URL ke dalam database
            $storeWithGDrive = Extracurricular::create([
                'name' => $name,
                'desc' => $desc,
                'image' => $request->input('image_gdrive'),
            ]);
            // return dd($storeWithGDrive);
        }

        return redirect()->route('admin.extra.index')->with('success', 'Data Ekstrakurikuler berhasil disimpan!');
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
        $extra = Extracurricular::find($id);

        return view('admin.pages.kegiatan.ekstrakurikuler-edit', compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EskulRequest $request, $id)
    {
        $extra = Extracurricular::find($id);
        $validated = $request->validated();

        $name = $validated['name'];
        $desc = $validated['desc'];


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/eskul/", $imageName);

            $deleteImage = Storage::disk('public')->delete('images/eskul/' . $extra->image);

            // Simpan path gambar ke dalam database
            $extra->update([
                'name' => $name,
                'desc' => $desc,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } elseif ($request->filled('image_gdrive')) {
            // Jika ada URL Google Drive yang disertakan
            $extra->update([
                'name' => $name,
                'desc' => $desc,
                'image' => $request->input('image_gdrive'),
            ]);
        } else {
            // Jika tidak ada perubahan pada gambar
            $extra->update([
                'name' => $name,
                'desc' => $desc,
            ]);
        }

        return redirect()->route('admin.extra.index')->with('success', 'Data Ekstrakurikuler berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extra = Extracurricular::find($id);

        if (!empty($extra->image)) {
            if (!Str::contains($extra->image, 'drive')) {
                $deleteImage = Storage::disk('public')->delete('images/eskul/' . $extra->image);
            }
            $extra->delete();
        }

        return redirect('/admin/kegiatan/ekstrakurikuler')->with('success', 'Data Ekstrakurikuler berhasil dihapus!');
    }
}
