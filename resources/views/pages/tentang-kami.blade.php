@extends('layouts.app')

@section('title')
    Profil Sekolah
@endsection

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('storage/images/navbar/' . $navbar->image) }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Profile Sekolah</h1>
        </div>

        <div class="flex flex-col items-center justify-center gap-2 px-6 py-8 lg:px-16">
            <div class="flex-[1]">
                <img class="h-[400px] w-[400px] rounded-md border border-slate-100 shadow-lg"
                    src="{{ Str::contains($profile->logo, 'drive') ? $profile->logo : asset('storage/images/school_profile/' . $profile->logo) }}"
                    alt="School">
            </div>
            <div class="flex-[1]">
                <p class="font-semibold">{{ $profile->logo_label }}</p>
            </div>
        </div>


        <div class="px-6 py-8 lg:px-16">
            <h2 class="mb-3 text-center text-2xl font-bold">Sambutan Kepala Sekolah</h2>
            <div class="flex flex-col items-center justify-between gap-6 lg:flex-row">
                <div class="flex-[1]">
                    {{-- <iframe src="https://drive.google.com/file/d/179oXThdRX5UmRX7t-qF1X8Iz5uCuTlpx/preview?rm=thumbnail"
                        width="330" height="499" allowfullscreen="true" allow="autoplay"></iframe> --}}
                    <img class="rounded-md border border-slate-100 object-cover shadow-lg"
                        src="{{ Str::contains($profile->principal_foto, 'drive') ? $profile->principal_foto : asset('storage/images/school_profile/' . $profile->principal_foto) }}"
                        alt="Kepala Sekolah">

                    <p class="mt-2 text-center text-xl">{{ $profile->principal_name }}</p>
                </div>
                <div class="flex-[2]">
                    <p>{{ $profile->principal_text }}</p>
                </div>
            </div>
        </div>

        <div class="px-6 pb-16 pt-8 lg:px-16">
            <h2 class="mb-6 text-center text-2xl font-bold">Lokasi</h2>
            <div class="flex flex-col justify-between gap-6 lg:flex-row">
                <div class="w-full">
                    <h3 class="mb-4 text-center text-lg font-semibold">Kampus 1</h3>
                    <div class="relative h-96 w-full shadow">
                        <iframe class="absolute left-0 top-0 h-full w-full" src="{{ $profile->campus2 }}" frameborder="0"
                            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
                <div class="w-full">
                    <h3 class="mb-4 text-center text-lg font-semibold">Kampus 2</h3>
                    <div class="relative h-96 w-full shadow">
                        <h3>Kampus 2</h3>
                        <iframe class="absolute left-0 top-0 h-full w-full" src="{{ $profile->campus2 }}" frameborder="0"
                            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
