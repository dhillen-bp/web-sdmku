@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Fasilitas Unggulan</h1>
        </div>

        <div class="grid grid-cols-2 gap-6 px-6 py-16 md:grid-cols-3 lg:px-16">
            @for ($i = 0; $i < 4; $i++)
                <div class="card col-span-1 bg-slate-100 shadow">
                    <img src="https://source.unsplash.com//random/300x300?computer" alt="Fasilitas 1"
                        class="mb-2 w-full rounded-lg object-cover">
                    <div class="p-2">
                        <h3 class="mb-2 text-xl font-bold">Nama Fasilitas 1</h3>
                        <p class="mb-2 text-gray-600">Deskripsi fasilitas 1 Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit.
                        </p>
                    </div>
                </div>
            @endfor
        </div>

    </section>
@endsection
