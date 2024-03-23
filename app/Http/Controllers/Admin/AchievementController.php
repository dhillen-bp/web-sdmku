<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Achievement\PrestasiRequest;
use App\Models\Achievement;
use App\Models\AchievementCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = Achievement::paginate(6);
        $categories = AchievementCategories::get();

        return view('admin.pages.prestasi.index', compact('achievements', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = AchievementCategories::get();
        return view('admin.pages.prestasi.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrestasiRequest $request)
    {
        $validated = $request->validated();
        $categoryId = $validated['category_id'];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/prestasi", $imageName);

            // Simpan path gambar ke dalam database
            $storeUploadFile = Achievement::create([
                'category_id' => $categoryId,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } else {
            // Jika input adalah URL Google Drive, langsung simpan URL ke dalam database
            $storeWithGDrive = Achievement::create([
                'category_id' => $categoryId,
                'image' => $request->input('image_gdrive'),
            ]);
            // return dd($storeWithGDrive);
        }

        return redirect()->route('admin.achievement.index')->with('success', 'Data Prestasi berhasil disimpan!');
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
        $prestasi = Achievement::find($id);
        $categories = AchievementCategories::get();
        return view('admin.pages.prestasi.edit', compact('prestasi', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrestasiRequest $request, $id)
    {
        $prestasi = Achievement::find($id);
        $validated = $request->validated();
        $categoryId = $validated['category_id'];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/prestasi", $imageName);

            // Simpan path gambar ke dalam database
            $storeUploadFile = Achievement::create([
                'category_id' => $categoryId,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } elseif ($request->filled('image_gdrive')) {
            // Jika ada URL Google Drive yang disertakan
            $prestasi->update([
                'category_id' => $categoryId,
                'image' => $request->input('image_gdrive'),
            ]);
        } else {
            // Jika tidak ada perubahan pada gambar
            return redirect()->route('admin.achievement.index')->with('success', 'Data Prestasi tidak ada perubahan!');
        }
        return redirect()->route('admin.achievement.index')->with('success', 'Data Prestasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Achievement::find($id);

        if (!empty($prestasi->image)) {
            if (!Str::contains($prestasi->image, 'drive')) {
                $deleteImage = Storage::disk('public')->delete('images/prestasi' . $prestasi->image);
            }
            $prestasi->delete();
        }

        return redirect()->route('admin.achievement.index')->with('success', 'Data Prestasi berhasil dihapus!');
    }

    public function showBasedCategory($slug)
    {
        $achievements = Achievement::with('category')->whereHas('category', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->paginate(6);
        $categories = AchievementCategories::get();

        return view('admin.pages.prestasi.show-based-category', compact('achievements', 'categories', 'slug'));
    }
}
