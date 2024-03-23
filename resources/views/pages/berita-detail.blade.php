@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <div class="flex flex-col items-center justify-center gap-2">
                <h1 class="text-center text-3xl font-bold text-slate-100">Berita</h1>
                <div class="breadcrumbs flex text-sm text-slate-100">
                    <ul>
                        <li><a>Berita</a></li>
                        <li class="font-semibold">Detail Berita</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 justify-center gap-6 px-6 py-16 lg:grid-cols-4 lg:px-16">
            <div class="col-span-4 space-y-4 rounded bg-white p-4 shadow lg:col-span-3">
                <h4 class="mb-4 text-2xl font-bold">{{ $news->title }}</h4>
                <img src="{{ Str::contains($news->image, 'drive') ? $news->image : asset('storage/images/berita' . $news->image) }}"
                    alt="News Image" class="h-[400px] w-full object-cover object-top">
                <div class="flex items-center text-sm text-slate-500"><span
                        class="material-icons mr-2 text-sm">person_outline</span>
                    {{ $news->author }} </div>
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
                    <p class="leading-none text-slate-500">{{ $news->created_at }}</p>
                </div>
                <p class="text-gray-600 text-wrap mb-6 break-words">{!! $news->content !!}</p>
                <!-- Add your main news content here -->
            </div>

            <!-- 1/4 Width for 3 Latest News List -->
            <div class="col-span-4 space-y-4 text-sm lg:col-span-1">
                <h3 class="text-xl font-bold">Berita Terbaru</h3>
                @foreach ($newsLatests as $latest)
                    <div class="bg-white p-2 shadow">
                        <img src="{{ Str::contains($latest->image, 'drive') ? $latest->image : asset('storage/images/beritas' . $latest->image) }}"
                            alt="" class="h-[180px] w-full">
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
                            <p class="leading-none">{{ $latest->created_at }}</p>
                        </div>

                        <h5 class="text-lg font-semibold">{{ $latest->title }}</h5>
                        <p class="text-gray-600">{!! strlen($latest->content) > 20 ? substr($latest->content, 0, 20) . '...' : $latest->content !!}
                        </p>
                    </div>
                @endforeach
            </div>

        </div>
        </div>
    </section>
@endsection
