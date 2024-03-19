@extends('layouts.app')

@section('body')
    {{-- HEADER & HERO --}}
    <section class="relative">
        <div class="min-h-90 carousel relative w-full object-cover md:h-[460px] lg:min-h-screen">
            @foreach ($slides as $index => $image)
                @php
                    $jumlah = count($slides) - 1;
                @endphp
                <div id="slide{{ $index }}" class="carousel-item relative w-full">
                    <img src="{{ $image }}" class="w-full" />
                    <div
                        class="absolute left-6 right-6 top-1/2 flex -translate-y-1/2 transform justify-between lg:left-16 lg:right-16">
                        <a href="#slide{{ $index == 0 ? $jumlah : $index - 1 }}"
                            class="btn btn-circle btn-sm opacity-90">❮</a>
                        <a href="#slide{{ $index == $jumlah ? $jumlah - $jumlah : $index + 1 }}"
                            class="btn btn-circle btn-sm opacity-90">❯</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- WELCOME SECTION --}}
    <section class="-mt-[5px] bg-base-200 py-8 lg:px-16 lg:py-16">
        <div class="hero-content flex-col lg:flex-row-reverse lg:px-0">
            {{-- <img src="https://source.unsplash.com/white-and-red-concrete-building-ZPkG0EdWQa8"
                class="h-80 max-w-sm rounded-lg shadow-2xl lg:w-1/3" /> --}}
            <iframe class="h-[320px] w-full px-6 lg:h-[245px] lg:w-[450px] lg:px-0"
                src="https://www.youtube.com/embed/UDyCZdRIYBY?si=jaAnG3uMX9ZidG9H?modestbranding=1&rel=0&showinfo=0"
                frameborder="0" allowfullscreen></iframe>

            <div class="px-6 lg:w-2/3 lg:px-0">
                <h1 class="text-shadow-1 py-2 font-lobster text-xl font-semibold text-slate-100 lg:text-5xl">SD
                    Muhammadiyah
                    Klaten Utara
                </h1>
                <h1 class="pb-2 pt-1 font-androgyne text-lg font-semibold text-primary lg:text-2xl">Binaan SD Muhammadiyah
                    Sapen Yogyakarta
                </h1>
                <h1 class="py-2 font-comicsans text-base font-semibold lg:text-2xl"><span
                        class="text-yellow-500">Cerdas</span>, <span class="text-blue-500">Kreatif</span>, dan
                    <span class="text-green-500">Berakhlak Mulia</span> !
                </h1>
                <p class="py-2 text-sm lg:text-base">SD Muhammadiyah Klaten Utara adalah sekolah unggulan dengan berbagai
                    prestasi. Kami
                    memiliki sistem pembelajaran profesional, religius dan ceria dilengkapi fasilitas yang memadai.
                </p>
                <a href="/profil/sekolah" class="btn btn-primary">Profil Kami</a>
            </div>
        </div>
    </section>

    {{-- OUR SERVICE SECTION --}}
    <section class="space-y-4 px-6 py-8 lg:space-y-8 lg:px-16 lg:py-16">
        <h3 class="text-center text-xl font-bold lg:text-4xl">Program Unggulan</h3>
        <div class="flex flex-col items-center justify-around gap-4 lg:flex-row lg:gap-6">
            @foreach ($services as $unggulan)
                <div class="taos:translate-y-[100%] taos:invisible group h-full w-full overflow-hidden rounded-lg border-2 border-primary bg-base-200 shadow-lg transition-transform delay-[150ms] duration-[450ms] [animation-iteration-count:infinite] lg:h-[340px] lg:w-1/3"
                    data-taos-offset="50">
                    <div
                        class="h-[220px] w-full rounded-t-lg bg-base-200 object-cover shadow transition-transform duration-500 group-hover:scale-105">
                        <img src="{{ $unggulan['image'] }}" alt="" class="h-full w-full object-cover">
                    </div>

                    <div class="p-3">
                        <h5 class="text-center text-base font-semibold lg:text-xl">{{ $unggulan['title'] }}</h5>
                        <p class="text-center text-xs lg:text-sm">{{ $unggulan['subtitle'] }}</p>
                        {{-- <button class="btn-white btn btn-sm float-right mt-2 text-black">Lihat
                            {{ $unggulan['title'] }}</button> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- PPDB SECTION --}}
    <section class="bg-base-200 px-6 py-8 lg:px-16 lg:py-16">
        <div class="flex h-full flex-col items-center justify-between lg:flex-row">

            <div class="taos:translate-x-[-200px] taos:opacity-0 h-full flex-grow space-y-4 bg-primary p-4 text-white shadow delay-[300ms] duration-[500ms] [animation-iteration-count:infinite] lg:w-1/3 lg:space-y-8"
                data-taos-offset="100">
                <h3 class="text-xl font-bold lg:text-4xl">PPDB</h3>
                <div>
                    <p class="text-center text-sm">Penerimaan Peserta Didik Baru telah resmi dibuka. Lihat detail informasi
                        dan langkah-langkah pendaftarannya dengan klik tombol di bawah.</p>
                </div>
                <a class="btn btn-sm w-full border bg-white font-bold text-primary lg:btn-md lg:text-lg" href="/ppdb">Info
                    PPDB</a>
            </div>

            <div class="taos:translate-x-[200px] taos:opacity-0 flex h-full flex-col items-center shadow delay-[300ms] duration-[500ms] [animation-iteration-count:infinite] lg:w-2/3"
                data-taos-offset="100">
                <img src="{{ asset('images/default/Logo Bawah type2.png') }}" alt="" class="h-full">
            </div>
        </div>
    </section>



    {{-- NEWS SECTION --}}
    <section class="px-6 py-8 lg:px-16 lg:py-16">
        <div class="mb-8 flex items-center justify-between">
            <h3 class="text-xl font-bold lg:text-4xl">Berita Terbaru</h3>
            <div class="flex items-center">
                <a class="cursor-pointer hover:underline">Lihat Lainnya </a>
                <span class="material-icons">keyboard_double_arrow_right</span>
            </div>
        </div>
        <div class="grid gap-4 md:grid-cols-2 lg:gap-8">
            @for ($i = 0; $i < 4; $i++)
                <div class="taos:scale-[0.6] taos:opacity-0 card card-side h-[180px] bg-primary bg-opacity-5 shadow-xl delay-[300ms] duration-[500ms] [animation-iteration-count:infinite] lg:h-[200px]"
                    data-taos-offset="100">
                    <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                            alt="Movie" class="w-[160px] object-contain lg:w-[250px]" />
                    </figure>
                    <div class="card-body w-2/3 text-sm">
                        <h2 class="card-title text-sm lg:text-base">New movie is released!</h2>
                        <p class="text-xs lg:text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">Baca</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
