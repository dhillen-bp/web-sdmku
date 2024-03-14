@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Guru & Staf</h1>
        </div>

        <div class="grid grid-cols-2 justify-center gap-6 px-6 py-16 lg:grid-cols-5 lg:px-16">

            @foreach ($data as $guru)
                {{-- CARD GURU --}}
                <div class="card card-compact col-span-1 bg-base-100 shadow-2xl">
                    <figure class="m-0 p-0">
                        {{-- <img src="https://drive.google.com/thumbnail?id=Image-ID&sz=w1000"> --}}
                        <img src="{{ $guru['gambar'] }}" alt="Shoes" class="block w-full object-cover" />

                    </figure>
                    <div class="card-body items-center">
                        <h2 class="card-title text-base">{{ $guru['nama'] }}</h2>
                        <div class="badge badge-primary badge-outline mb-1 cursor-default text-sm shadow-sm">
                            {{ $guru['jabatan'] }}</div>
                        {{-- <div class="card-actions justify-center">
                            <a
                                class="cursor-pointer rounded-full bg-gradient-to-tr hover:from-[#FF7806] hover:to-[#A20AD0]">
                                @include('partials.svg._instagram-svg', ['width' => 20, 'height' => 20])
                            </a>
                        </div> --}}
                    </div>
                </div>
                {{-- END CARD GURU --}}
            @endforeach

        </div>

    </section>
@endsection
