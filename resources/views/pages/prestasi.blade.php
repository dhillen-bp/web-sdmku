@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Prestasi</h1>
        </div>

        <div class="px-6 py-16 lg:px-16">
            <div class="flex flex-wrap items-center justify-center gap-3 py-4 md:py-8">
                <button type="button"
                    class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-primary bg-white px-5 py-1 text-center text-base font-medium text-primary hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">All
                    categories</button>
                <button type="button"
                    class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-black bg-white px-5 py-1 text-center text-base font-medium text-black hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">Akademik</button>
                <button type="button"
                    class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-black bg-white px-5 py-1 text-center text-base font-medium text-black hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">Non
                    Akademik</button>
                <button type="button" </div>
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                @for ($i = 0; $i < 6; $i++)
                    <div class="relative">
                        <img class="h-56 w-full max-w-full rounded-lg object-cover"
                            src="https://source.unsplash.com/random/{{ $i }}" alt="">
                        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-2 text-center text-white">
                            <span class="text-sm font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                In,
                                mollitia.</span>
                        </div>
                    </div>
                @endfor
            </div>

    </section>
@endsection
