<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventLatest\EventRequest;
use App\Models\EventLatest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventLatestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = EventLatest::paginate(9);
        return view('admin.pages.kegiatan.event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.kegiatan.event-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $validated = $request->validated();

        $name = $validated['name'];
        $caption = $validated['caption'];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/event", $imageName);

            // Simpan path gambar ke dalam database
            $storeUploadFile = EventLatest::create([
                'name' => $name,
                'caption' => $caption,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } else {
            // Jika input adalah URL Google Drive, langsung simpan URL ke dalam database
            $storeWithGDrive = EventLatest::create([
                'name' => $name,
                'image' => $request->input('image_gdrive'),
            ]);
            // return dd($storeWithGDrive);
        }

        return redirect()->route('admin.event.index')->with('success', 'Data Event Terbaru berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventLatest  $eventLatest
     * @return \Illuminate\Http\Response
     */
    public function show(EventLatest $eventLatest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventLatest  $eventLatest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = EventLatest::findOrFail($id);

        return view('admin.pages.kegiatan.event-edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventLatest  $eventLatest
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        $event = EventLatest::find($id);
        $validated = $request->validated();

        $name = $validated['name'];
        $caption = $validated['caption'];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = Str::uuid() . '.' . $imageExtension;
            $image->storeAs("images/event/", $imageName);

            $deleteImage = Storage::disk('public')->delete('images/event/' . $event->image);

            // Simpan path gambar ke dalam database
            $event->update([
                'name' => $name,
                'caption' => $caption,
                'image' => $imageName,
            ]);

            // return dd($storeUploadFile);
        } elseif ($request->filled('image_gdrive')) {
            // Jika ada URL Google Drive yang disertakan
            $event->update([
                'name' => $name,
                'caption' => $caption,
                'image' => $request->input('image_gdrive'),
            ]);
        } else {
            // Jika tidak ada perubahan pada gambar
            $event->update([
                'caption' => $caption,
                'name' => $name,
            ]);
        }

        return redirect()->route('admin.event.index')->with('success', 'Data Event Terbaru berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventLatest  $eventLatest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = EventLatest::findOrFail($id);

        if (!empty($event->image)) {
            if (!Str::contains($event->image, 'drive')) {
                $deleteImage = Storage::disk('public')->delete('images/event/' . $event->image);
            }
            $event->delete();
        }

        return redirect()->route('admin.event.index')->with('success', 'Data Event Terbaru berhasil dihapus!');
    }
}
