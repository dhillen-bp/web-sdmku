@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Kegiatan Pendukung</h1>
        </div>

        <div class="grid grid-cols-2 gap-6 px-6 py-16 md:grid-cols-3 lg:px-16">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-slate-100s card w-full shadow-lg">
                    <div class="flex items-center justify-center">
                        <img class="h-36 w-full rounded-t-2xl object-cover lg:h-50"
                            src="https://source.unsplash.com/random/{{ $i }}" alt="">
                    </div>
                    <div class="p-4">
                        <h3 class="text-center text-base font-bold lg:text-xl">Pendukung {{ $i }}</h3>
                        <p class="text-gray-600 text-center text-sm">Deskripsi kegiatan pendukung Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit.</p>
                    </div>
                </div>
            @endfor
        </div>

    </section>
@endsection
