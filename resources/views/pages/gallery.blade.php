@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Galeri</h1>
        </div>

        <div class="px-6 py-16 lg:px-16">

            <iframe src="https://drive.google.com/embeddedfolderview?id=1WlNNuzMfiqmzD7nK45VBu1pLDzcYXwn4#grid"
                style="width:100%; height:600px; border:0;"></iframe>


            <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                {{-- @for ($i = 0; $i < 6; $i++)
                    <div class="relative">
                        <img class="h-56 w-full max-w-full rounded-lg object-cover"
                            src="https://source.unsplash.com/random/{{ $i }}" alt="">
                        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-2 text-center text-white">
                            <span class="text-sm font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                In,
                                mollitia.</span>
                        </div>
                    </div>
                @endfor --}}
            </div>

        </div>

    </section>
@endsection
