@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Profile Sekolah</h1>
        </div>

        <div class="flex flex-col items-center justify-center gap-2 px-6 py-8 lg:px-16">
            <div class="flex-[1]">
                <img class="h-[400px] w-[400px] rounded-md border border-slate-100 shadow-lg"
                    src="{{ asset('images/logo/logo_sdmku_compress.png') }}" alt="School">
            </div>
            <div class="flex-[1]">
                <p class="font-semibold">Logo SD Muhammadiyah Klaten Utara</p>
            </div>
        </div>


        <div class="px-6 py-8 lg:px-16">
            <h2 class="mb-3 text-center text-2xl font-bold">Sambutan Kepala Sekolah</h2>
            <div class="flex flex-col justify-between gap-6 lg:flex-row">
                <div class="flex-[1]">
                    <img class="rounded-md border border-slate-100 shadow-lg"
                        src="https://source.unsplash.com/brown-and-white-concrete-building-BlCJi8walFQ" alt="School">
                </div>
                <div class="flex-[2]">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi delectus eligendi placeat explicabo
                        necessitatibus vero debitis, velit earum voluptatem tempore, at vitae asperiores. Tempore veritatis,
                        eius officia illo doloribus aut.</p>
                </div>
            </div>
        </div>

        <div class="px-6 pb-16 pt-8 lg:px-16">
            <h2 class="mb-6 text-center text-2xl font-bold">Lokasi</h2>
            <div class="flex flex-col justify-between gap-6 lg:flex-row">
                <div class="w-full">
                    <h3 class="mb-4 text-center text-lg font-semibold">Kampus 1</h3>
                    <div class="relative h-96 w-full shadow">
                        <iframe class="absolute left-0 top-0 h-full w-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.961832654562!2d110.6088308747677!3d-7.687297754128017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a43e163796c1b%3A0xe5ed8a2be85155dc!2s1st%20Muhammadiyah%20High%20School%2C%20Klaten!5e0!3m2!1sen!2sid!4v1709127665034!5m2!1sen!2sid"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
                <div class="w-full">
                    <h3 class="mb-4 text-center text-lg font-semibold">Kampus 2</h3>
                    <div class="relative h-96 w-full shadow">
                        <h3>Kampus 2</h3>
                        <iframe class="absolute left-0 top-0 h-full w-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.0096806842917!2d110.61081587347012!3d-7.6821066760504335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a43406c674f2d%3A0x2e4d975cd004ce9d!2s2nd%20Private%20Muhammadiyah%20Islamic%20Elementary%20School%2C%20Gergunung!5e0!3m2!1sen!2sid!4v1709128980415!5m2!1sen!2sid"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
