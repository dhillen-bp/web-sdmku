@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Ekstrakurikuler</h1>
        </div>

        <div class="grid grid-cols-2 gap-6 px-6 py-16 md:grid-cols-3 lg:px-16">

            <div class="flex items-center justify-center">
                <div class="card w-96 bg-slate-100 p-4 shadow-lg">
                    <div class="flex items-center justify-center">
                        <span class="material-icons text-[50px]">sports_baseball</span>
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl font-bold">Ekstrakurikuler</h3>
                        <p class="text-gray-600 text-center">Deskripsi ekstrakurikuler Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit.</p>
                    </div>
                </div>
            </div>


        </div>

    </section>
@endsection
