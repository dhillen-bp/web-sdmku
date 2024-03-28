@extends('layouts.app')

@section('title')
    Prestasi
@endsection

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('storage/images/navbar/' . $navbar->image) }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Prestasi</h1>
        </div>

        <div class="px-6 py-16 lg:px-16">
            <div class="flex flex-wrap items-center justify-center gap-3 py-4 md:py-8">
                <a href="/prestasi"
                    class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-primary bg-white px-5 py-1 text-center text-base font-medium text-primary hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">All
                    categories</a>
                @foreach ($categories as $category)
                    <a href="/prestasi/kategori/{{ $category->slug }}"
                        class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-black bg-white px-5 py-1 text-center text-base font-medium text-black hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
                        {{ $category->name }}</a>
                @endforeach
            </div>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                @foreach ($achievements as $achievement)
                    <div class="relative">
                        <img class="h-full w-full max-w-full rounded-lg object-cover"
                            src="{{ Str::contains($achievement->image, 'drive') ? $achievement->image : asset('/storage/images/prestasi/' . $achievement->image) }}"
                            alt="">
                    </div>
                @endforeach
            </div>

    </section>
@endsection
