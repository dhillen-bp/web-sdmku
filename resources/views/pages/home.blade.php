@extends('layouts.app')

@section('title')
    Home
@endsection

@section('body')
    {{-- HEADER & HERO --}}
    <section class="relative overflow-x-hidden">
        <div id="homeCarousel" class="min-h-90 carousel relative w-full object-cover md:h-[460px] lg:min-h-screen"
            data-slide-interval="5000">
            @foreach ($homeHero as $index => $hero)
                @php
                    $jumlah = count($homeHero) - 1;
                @endphp
                <div id="slide{{ $index }}" class="carousel-item relative w-full">
                    <img src="{{ $hero->image == 'hero_default.JPG' ? asset('images/home/' . $hero->image) : asset('storage/images/home/' . $hero->image) }}"
                        class="w-full max-w-full" />
                    <div
                        class="absolute left-6 right-6 top-1/2 z-1 flex -translate-y-1/2 transform justify-between lg:left-16 lg:right-16">
                        <a href="#slide{{ $index == 0 ? $jumlah : $index - 1 }}" class="btn btn-circle btn-sm opacity-90"
                            id="prevBtn">❮</a>
                        <a href="#slide{{ $index == $jumlah ? $jumlah - $jumlah : $index + 1 }}"
                            class="btn btn-circle btn-sm opacity-90" id="nextBtn">❯</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- WELCOME SECTION --}}
    <section class="-mt-[5px] overflow-x-hidden bg-base-200 py-8 lg:px-16 lg:py-16">
        <div class="hero-content flex-col lg:flex-row-reverse lg:px-0">
            {{-- <img src="https://source.unsplash.com/white-and-red-concrete-building-ZPkG0EdWQa8"
                class="h-80 max-w-sm rounded-lg shadow-2xl lg:w-1/3" /> --}}
            <iframe class="h-[320px] w-full px-6 lg:h-[245px] lg:w-[450px] lg:px-0"
                src="https://www.youtube.com/embed/UDyCZdRIYBY?si=jaAnG3uMX9ZidG9H?modestbranding=1&rel=0&showinfo=0"
                frameborder="0" allowfullscreen></iframe>

            <div class="px-6 lg:w-2/3 lg:px-0">
                <h1 class="text-shadow-1 py-2 font-lobster text-xl font-semibold text-slate-100 lg:text-5xl">
                    {{ $home->school_name }}
                </h1>
                <h1 class="pb-2 pt-1 font-androgyne text-lg font-semibold text-primary lg:text-2xl">
                    {{ $home->school_affiliate }}
                </h1>
                <h1 class="py-2 font-comicsans text-base font-semibold lg:text-2xl">
                    {!! $home->motto !!}
                </h1>
                <p class="py-2 text-sm lg:text-base">
                    {{ $home->description }}
                </p>
                <a href="/profil/sekolah" class="btn btn-primary">Profil Kami</a>
            </div>
        </div>
    </section>

    {{-- OUR SERVICE SECTION --}}
    <section class="space-y-4 overflow-hidden px-6 py-8 lg:space-y-8 lg:px-16 lg:py-16">
        <h3 class="text-center text-xl font-bold lg:text-4xl">Program Unggulan</h3>
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-3 lg:gap-6">
            @foreach ($homeFeatured as $feature)
                <div class="taos:translate-y-[100%] taos:invisible lg:w-[calc(100%/3 - 1rem)] group h-full w-full overflow-hidden rounded-lg border-2 border-primary bg-base-200 shadow-lg transition-transform delay-[150ms] duration-[450ms] [animation-iteration-count:infinite] lg:h-[340px]"
                    data-taos-offset="50">
                    <div
                        class="h-[220px] w-full rounded-t-lg bg-base-200 object-cover shadow transition-transform duration-500 group-hover:scale-105">
                        <img src="{{ Str::contains($feature->featured_image, 'drive') ? $feature->featured_image : asset('storage/images/home/' . $feature->featured_image) }}"
                            alt="" class="h-full w-full object-cover">
                    </div>

                    <div class="p-3">
                        <h5 class="text-center text-base font-semibold lg:text-xl">{{ $feature->featured_title }}</h5>
                        <p class="text-center text-xs lg:text-sm">{{ $feature->featured_subtitle }}</p>
                        {{-- <button class="btn-white btn btn-sm float-right mt-2 text-black">Lihat
                            {{ $feature['title'] }}</button> --}}
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
                <img src="{{ asset("images/home/$home->ppdb_banner") }}" alt="" class="h-full">
            </div>
        </div>
    </section>



    {{-- EVENT SECTION --}}
    <section class="px-6 py-8 lg:px-16 lg:py-16">
        <div class="mb-8 flex items-center justify-between">
            <h3 class="text-xl font-bold lg:text-4xl">Event Terbaru</h3>
            <div class="flex items-center">
                <a href="/kegiatan/event" class="cursor-pointer hover:underline">Lihat Lainnya </a>
                <span class="material-icons">keyboard_double_arrow_right</span>
            </div>
        </div>
        <div class="grid gap-4 md:grid-cols-3 lg:gap-8">
            @foreach ($events as $event)
                <div class="taos:scale-[0.6] taos:opacity-0 group relative overflow-hidden delay-[300ms] duration-[500ms] [animation-iteration-count:infinite]"
                    data-taos-offset="100">
                    <img class="h-56 w-full max-w-full rounded-lg object-cover transition-transform group-hover:scale-105"
                        src="{{ Str::contains($event->image, 'drive') ? $event->image : asset('storage/images/event/' . $event->image) }}"
                        alt="">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-2 text-center text-white">
                        <a href="/kegiatan/event/{{ $event->id }}" class="flex items-center justify-center text-sm">
                            <span class="font-semibold hover:underline">{{ $event->name }}</span>
                            <span
                                class="material-icons-outlined ml-2 opacity-0 transition-opacity group-hover:no-underline group-hover:opacity-100">arrow_circle_right</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@section('after-script')
    <script type="module">
        // AUTO SLIDE
        setInterval(function() {
                // Cari elemen carousel dan geser ke elemen berikutnya
                $('#homeCarousel .carousel-item:first-child').fadeOut('slow').next('.carousel-item').fadeIn('slow')
                    .end().appendTo('#homeCarousel');
            },
            5000
        );

        $('#prevBtn').click(function() {
            clearInterval(interval);
            $('#homeCarousel .carousel-item:last-child').prependTo('#homeCarousel').fadeOut('slow');
            $('#homeCarousel .carousel-item:first-child').fadeIn('slow');
        });

        // NEXT BUTTON
        $('#nextBtn').click(function() {
            clearInterval(interval);
            $('#homeCarousel .carousel-item:first-child').fadeOut('slow').next('.carousel-item').fadeIn('slow')
                .end().appendTo('#homeCarousel');
        });
    </script>
@endsection
