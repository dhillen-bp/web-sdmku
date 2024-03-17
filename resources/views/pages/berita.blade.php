@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Berita</h1>
        </div>

        <div class="grid grid-cols-2 justify-center gap-6 px-6 py-16 lg:grid-cols-4 lg:px-16">
            <!-- component -->
            @for ($i = 0; $i < 6; $i++)
                <div class="w-full overflow-hidden border-b-4 border-blue-500 bg-white">
                    <img src="https://images.unsplash.com/photo-1573748240263-a4e9c57a7fcd" alt="People"
                        class="h-32 w-full object-cover sm:h-48 md:h-64">
                    <div class="space-y-4 md:p-6">
                        <div class="mb-3">
                            <div class="badge badge-primary badge-outline badge-sm text-sm">category</div>
                            <div class="badge badge-primary badge-outline badge-sm text-sm">category</div>
                        </div>
                        <a href="/berita/slug" class="font-semibold leading-tight hover:underline sm:leading-normal">The
                            Coldest Sunset
                            lorem
                            ipsum</a>
                        <div class="flex items-center text-sm">
                            <svg class="mr-2 opacity-75" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                width="12" height="12" viewBox="0 0 97.16 97.16"
                                style="enable-background:new 0 0 97.16 97.16;" xml:space="preserve">
                                <path
                                    d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z" />
                                <path
                                    d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z" />
                            </svg>
                            <p class="leading-none">21 Oct 2019</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
