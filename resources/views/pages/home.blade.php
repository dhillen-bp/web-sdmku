@extends('layouts.app')

@section('body')
    {{-- HEADER & HERO --}}
    <section class="relative">
        <div class="carousel relative min-h-screen w-full object-cover md:h-[460px]">
            <div id="slide1" class="carousel-item relative w-full">
                <img src="https://source.unsplash.com/brown-wooden-table-and-chairs-PDRFeeDniCk" class="w-full" />
                <div
                    class="absolute left-6 right-6 top-1/2 flex -translate-y-1/2 transform justify-between lg:left-16 lg:right-16">
                    <a href="#slide3" class="btn btn-circle">❮</a>
                    <a href="#slide2" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide2" class="carousel-item relative w-full">
                <img src="https://source.unsplash.com/man-and-woman-sitting-on-chairs-zFSo6bnZJTw" class="w-full" />
                <div
                    class="absolute left-6 right-6 top-1/2 flex -translate-y-1/2 transform justify-between lg:left-16 lg:right-16">
                    <a href="#slide1" class="btn btn-circle">❮</a>
                    <a href="#slide3" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide3" class="carousel-item relative w-full">
                <img src="https://source.unsplash.com/group-of-fresh-graduates-students-throwing-their-academic-hat-in-the-air-8CqDvPuo_kI"
                    class="w-full" />
                <div
                    class="absolute left-6 right-6 top-1/2 flex -translate-y-1/2 transform justify-between lg:left-16 lg:right-16">
                    <a href="#slide2" class="btn btn-circle">❮</a>
                    <a href="#slide1" class="btn btn-circle">❯</a>
                </div>
            </div>
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
                <h1 class="py-1 text-2xl font-semibold lg:text-5xl">SD Muhammadiyah Klaten Utara</h1>
                <h1 class="text-2xl font-semibold lg:py-1 lg:text-4xl"><span class="text-yellow-500">Cerdas</span>, <span
                        class="text-blue-500">Kreatif</span>, dan
                    <span class="text-green-500">Berakhlak Mulia</span>!
                </h1>
                <p class="py-4">SD Muhammadiyah Klaten Utara adalah sekolah unggulan dengan berbagai prestasi. Kami
                    memiliki sistem pembelajaran profesional, religius dan ceria dilengkapi fasilitas yang memadai.
                </p>
                <button class="btn btn-primary">Kontak Kami</button>
            </div>
        </div>
    </section>

    {{-- OUR SERVICE SECTION --}}
    <section class="space-y-4 px-6 py-8 lg:space-y-8 lg:px-16 lg:py-16">
        <h3 class="text-center text-xl font-bold lg:text-4xl">Mengapa Memilih Kami?</h3>
        <div class="flex flex-col items-center justify-around gap-4 lg:flex-row lg:gap-6">
            @for ($i = 0; $i < 3; $i++)
                <div class="h-full w-full rounded border border-primary p-4 shadow lg:w-1/3">
                    <img src="{{ asset('images/shapes/random-shapes.svg') }}" alt=""
                        class="h-[300px] w-full border-b border-primary object-cover pb-1">
                    <h5 class="text-center text-base font-semibold lg:text-xl">Kurikulum</h5>
                    <p class="text-xs lg:text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vero, quas
                        molestias rerum tenetur sapiente.</p>
                    <button class="btn btn-primary btn-sm float-right mt-2">Lihat Kurikulum</button>
                </div>
            @endfor
        </div>
    </section>

    {{-- PPDB SECTION --}}
    <section class="space-y-4 bg-base-200 px-6 py-8 lg:px-16 lg:py-16">
        <h3 class="text-xl font-bold lg:text-4xl">PPDB</h3>
        <h5 class="font-semibold">Mari bergabung di sekolah kami! Memberikan pendidikan berkualitas dan lingkungan belajar
            yang menyenangkan untuk masa depan cerah anak Anda.</h5>
        <p class="font-semibold">Ayo daftarkan putra/putri tercinta pada Penerimaan Peserta Didik Baru (PPDB) Sekolah Dasar.
            Berikan mereka fondasi pendidikan terbaik untuk sukses di masa depan!</p>
        <button class="btn btn-primary">Info PPDB</button>
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
            @for ($i = 0; $i < 3; $i++)
                <div class="card card-side h-[180px] bg-primary bg-opacity-5 shadow-xl lg:h-[200px]">
                    <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                            alt="Movie" class="w-[160px] object-contain lg:w-[250px]" />
                    </figure>
                    <div class="card-body w-2/3 text-sm">
                        <h2 class="card-title text-sm lg:text-base">New movie is released!</h2>
                        <p class="text-xs lg:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">Baca</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
