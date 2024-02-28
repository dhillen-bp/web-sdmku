@extends('layouts.app')

@section('body')
    {{-- HEADER & HERO --}}
    <section class="relative md:pb-16">
        <div class="carousel relative h-[300px] w-full object-contain md:h-[460px]">
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
    <section class="bg-base-200 py-16 lg:px-16">
        <div class="hero-content flex-col lg:flex-row-reverse lg:px-0">
            <img src="https://source.unsplash.com/white-and-red-concrete-building-ZPkG0EdWQa8"
                class="h-80 max-w-sm rounded-lg shadow-2xl lg:w-1/3" />
            <div class="px-6 lg:w-2/3 lg:px-0">
                <h1 class="text-5xl font-semibold">Selamat Datang di SD Muhammadiyah Klaten Utara!</h1>
                <p class="py-6">SD Muhammadiyah Klaten Utara adalah sekolah unggulan dengan berbagai prestasi. Kami
                    memiliki sistem pembelajaran profesional, religius dan ceria dilengkapi fasilitas yang memadai.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </section>

    {{-- NEWS SECTION --}}
    <section class="mb-8 px-6 py-16 pb-8 lg:px-16">
        <div class="mb-8 flex items-center justify-between">
            <div class="text-4xl font-bold">Berita Terbaru</div>
            <div class="flex items-center">
                <a class="cursor-pointer hover:underline">Lihat Lainnya </a>
                <span class="material-icons">keyboard_double_arrow_right</span>
            </div>
        </div>
        <div class="grid gap-8 md:grid-cols-2">
            <div class="card card-side h-[200px] bg-primary bg-opacity-5 shadow-xl">
                <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                        alt="Movie" class="w-[250px] object-contain" />
                </figure>
                <div class="card-body w-2/3 text-sm">
                    <h2 class="card-title">New movie is released!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, earum!...</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Baca</button>
                    </div>
                </div>
            </div>
            <div class="card card-side h-[200px] bg-primary bg-opacity-5 shadow-xl">
                <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                        alt="Movie" class="w-[250px] object-contain" />
                </figure>
                <div class="card-body w-2/3 text-sm">
                    <h2 class="card-title">New movie is released!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, earum!...</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Baca</button>
                    </div>
                </div>
            </div>
            <div class="card card-side h-[200px] bg-primary bg-opacity-5 shadow-xl">
                <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                        alt="Movie" class="w-[250px] object-contain" />
                </figure>
                <div class="card-body w-2/3 text-sm">
                    <h2 class="card-title">New movie is released!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, earum!...</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Baca</button>
                    </div>
                </div>
            </div>
            <div class="card card-side h-[200px] bg-primary bg-opacity-5 shadow-xl">
                <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                        alt="Movie" class="w-[250px] object-contain" />
                </figure>
                <div class="card-body w-2/3 text-sm">
                    <h2 class="card-title">New movie is released!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, earum!...</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Baca</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script type="module">
        // Fungsi untuk menutup details yang lain saat satu details dibuka
        function toggleDetails(detailsId) {
            $('details').each(function() {
                if (this.id === detailsId) {
                    // Toggle atribut 'open' pada details yang diklik
                    $('details').attr('open')
                } else {
                    // Tutup yang lain
                    $(this).removeAttr('open');
                }
            });
        }

        // Menangani klik pada setiap summary
        $('details summary').on('click', function() {
            var parentId = $(this).parent().prop('id');

            // Periksa apakah details yang diklik sudah terbuka
            if ($(this).parent().prop('open')) {
                // Jika sudah terbuka, tutup details tersebut
                $(this).removeAttr('open');
            } else {
                // Jika belum terbuka, toggle semua details dan buka yang diklik
                toggleDetails(parentId);
            }
        });
    </script>
@endsection
