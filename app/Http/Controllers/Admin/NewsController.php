<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(9);
        return view('admin.pages.berita.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $validated = $request->validated();
        $title = $validated['title'];
        $content = $validated['content'];
        $author = $validated['author'];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/berita", $imageName);

            // Simpan path gambar ke dalam database
            $storeUploadFile = News::create([
                'title' => $title,
                'content' => $content,
                'author' => $author,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } else {
            // Jika input adalah URL Google Drive, langsung simpan URL ke dalam database
            $storeWithGDrive = News::create([
                'title' => $title,
                'content' => $content,
                'author' => $author,
                'image' => $request->input('image_gdrive'),
            ]);
            // return dd($storeWithGDrive);
        }

        return redirect()->route('admin.news.index')->with('success', 'Data Berita berhasil disimpan!');
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
        $news = News::findOrFail($id);
        return view('admin.pages.berita.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $news = News::find($id);
        $validated = $request->validated();
        $title = $validated['title'];
        $content = $validated['content'];
        $author = $validated['author'];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/berita/", $imageName);

            $deleteImage = Storage::disk('public')->delete('images/berita/' . $news->image);

            // Simpan path gambar ke dalam database
            $news->update([
                'title' => $title,
                'content' => $content,
                'author' => $author,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } elseif ($request->filled('image_gdrive')) {
            // Jika ada URL Google Drive yang disertakan
            $news->update([
                'title' => $title,
                'content' => $content,
                'author' => $author,
                'image' => $request->input('image_gdrive'),
            ]);
        } else {
            // Jika tidak ada perubahan pada gambar
            return redirect()->route('admin.news.index')->with('success', 'Data Berita tidak ada perubahan!');
        }

        return redirect()->route('admin.news.index')->with('success', 'Data Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        if (!empty($news->image)) {
            if (!Str::contains($news->image, 'drive')) {
                $deleteImage = Storage::disk('public')->delete('images/berita/' . $news->image);
            }
            $news->delete();
        }

        return redirect()->route('admin.news.index')->with('success', 'Data Prestasi berhasil dihapus!');
    }
}
