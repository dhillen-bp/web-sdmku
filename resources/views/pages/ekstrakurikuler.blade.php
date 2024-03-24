@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('storage/images/navbar/' . $navbar->image) }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Kegiatan Ekstrakurikuler</h1>
        </div>

        <div class="grid grid-cols-2 gap-6 px-6 py-16 md:grid-cols-3 lg:px-16">
            @foreach ($extracurriculars as $eskul)
                <div class="card w-full bg-slate-100 shadow-lg">
                    <img class="h-[300px] w-full rounded-t-2xl object-cover"
                        src={{ Str::contains($eskul->image, 'drive') ? $eskul->image : asset('storage/images/eskul/' . $eskul->image) }}
                        alt="Gambar Ekstrakurikuler">

                    <div class="p-4">
                        <h3 class="text-center text-base font-bold lg:text-xl">{{ $eskul->name }}</h3>
                        <p class="text-gray-600 text-center text-sm">{{ $eskul->desc }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection
