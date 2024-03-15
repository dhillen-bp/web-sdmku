@extends('layouts.app')

@section('body')
    {{-- HEADER & HERO --}}
    <section class="relative">
        <div class="carousel relative min-h-screen w-full object-cover md:h-[460px]">
            @foreach ($slides as $index => $image)
                @php
                    $jumlah = count($slides) - 1;
                @endphp
                <div id="slide{{ $index }}" class="carousel-item relative w-full">
                    <img src="{{ $image }}" class="w-full" />
                    <div
                        class="absolute left-6 right-6 top-1/2 flex -translate-y-1/2 transform justify-between lg:left-16 lg:right-16">
                        <a href="#slide{{ $index == 0 ? $jumlah : $index - 1 }}" class="btn btn-circle">❮</a>
                        <a href="#slide{{ $index == $jumlah ? $jumlah - $jumlah : $index + 1 }}" class="btn btn-circle">❯</a>
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
            <iframe class="h-[320px] w-[500px] px-6 lg:h-[245px] lg:w-[450px] lg:px-0"
                src="https://www.youtube.com/embed/UDyCZdRIYBY?si=jaAnG3uMX9ZidG9H?modestbranding=1&rel=0&showinfo=0"
                frameborder="0" allowfullscreen></iframe>

            <div class="px-6 lg:w-2/3 lg:px-0">
                <h1 class="py-2 font-lobster text-2xl font-semibold lg:text-5xl">SD Muhammadiyah Klaten Utara</h1>
                <h1 class="pb-2 pt-1 font-androgyne text-xl font-semibold text-slate-600 lg:text-2xl">Binaan SD Muhammadiyah
                    Sapen Yogyakarta
                </h1>
                <h1 class="py-2 font-comicsans text-xl font-semibold lg:text-2xl"><span
                        class="text-yellow-500">Cerdas</span>, <span class="text-blue-500">Kreatif</span>, dan
                    <span class="text-green-500">Berakhlak Mulia</span> !
                </h1>
                <p class="py-2">SD Muhammadiyah Klaten Utara adalah sekolah unggulan dengan berbagai prestasi. Kami
                    memiliki sistem pembelajaran profesional, religius dan ceria dilengkapi fasilitas yang memadai.
                </p>
                <a href="/profil/sekolah" class="btn btn-primary">Profil Kami</a>
            </div>
        </div>
    </section>

    {{-- OUR SERVICE SECTION --}}
    <section class="space-y-4 px-6 py-8 lg:space-y-8 lg:px-16 lg:py-16">
        <h3 class="text-center text-xl font-bold lg:text-4xl">Mengapa Memilih Kami?</h3>
        <div class="flex flex-col items-center justify-around gap-4 lg:flex-row lg:gap-6">
            @foreach ($services as $unggulan)
                <div class="taos:translate-y-[100%] taos:invisible h-full w-full rounded-lg border-2 border-primary bg-base-200 shadow-lg delay-[300ms] duration-[600ms] [animation-iteration-count:infinite] hover:scale-[1.05] lg:w-1/3"
                    data-taos-offset="50">
                    <img src="{{ $unggulan['image'] }}" alt=""
                        class="h-[220px] w-full rounded-t-lg bg-base-200 object-cover shadow">
                    <div class="p-3">
                        <h5 class="text-center text-base font-semibold lg:text-xl">{{ $unggulan['title'] }}</h5>
                        <p class="text-xs lg:text-sm">{{ $unggulan['subtitle'] }}</p>
                        {{-- <button class="btn-white btn btn-sm float-right mt-2 text-black">Lihat
                            {{ $unggulan['title'] }}</button> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- PPDB SECTION --}}
    <section class="bg-base-200 px-6 py-8 lg:px-16 lg:py-16">
        <div class="flex items-start justify-between gap-4 space-y-4">

            <div class="w-2/3 space-y-4">
                <h3 class="text-xl font-bold lg:text-4xl">PPDB</h3>
                <h5 class="text-sm font-semibold lg:text-lg">Mari bergabung di sekolah kami! Memberikan pendidikan
                    berkualitas
                    dan lingkungan
                    belajar
                    yang menyenangkan untuk masa depan cerah anak Anda.</h5>
                <p class="text-sm font-semibold lg:text-lg">Ayo daftarkan putra/putri tercinta pada Penerimaan Peserta Didik
                    Baru (PPDB)
                    Sekolah Dasar.
                    Berikan mereka fondasi pendidikan terbaik untuk sukses di masa depan!</p>
            </div>
            <div class="flex w-1/3 flex-col items-center">
                <img src="{{ asset('images/default/akreditasi.png') }}" alt="Akreditasi Image"
                    class="h-[200px] w-[150px] object-cover">
            </div>
        </div>
        <a class="btn btn-primary btn-sm w-full font-bold lg:btn-md lg:text-lg" href="/ppdb">Info PPDB</a>
        <div class="mt-4">
            <img src="{{ asset('images/default/PPDB.png') }}" alt="PPDB Info">
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
                <div class="card card-side h-[180px] bg-primary bg-opacity-5 shadow-xl lg:h-[200px]">
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
