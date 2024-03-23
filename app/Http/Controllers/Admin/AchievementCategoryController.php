<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Achievement_Category\Request as Achievement_CategoryRequest;
use App\Models\AchievementCategories;
use Illuminate\Http\Request;

class AchievementCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = AchievementCategories::paginate(10);
        return view('admin.pages.prestasi.kategori', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.prestasi.kategori-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Achievement_CategoryRequest $request)
    {
        $validated = $request->validated();

        AchievementCategories::create($validated);

        return redirect()->route('admin.achievement_category.index')->with('success', 'Data Kategori Prestasi berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AchievementCategories  $achievementCategories
     * @return \Illuminate\Http\Response
     */
    public function show(AchievementCategories $achievementCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AchievementCategories  $achievementCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = AchievementCategories::findOrFail($id);
        return view('admin.pages.prestasi.kategori-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AchievementCategories  $achievementCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Achievement_CategoryRequest $request, $id)
    {
        $validated = $request->validated();
        $category = AchievementCategories::findOrFail($id);

        $category->update($validated);

        return redirect()->route('admin.achievement_category.index')->with('success', 'Data Kategori Prestasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AchievementCategories  $achievementCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = AchievementCategories::findOrFail($id);

        $category->delete();

        return redirect()->route('admin.achievement_category.index')->with('success', 'Data Kategori Prestasi berhasil dihapus!');
    }
}
