@extends('layouts.app')

@section('body')
    <section class="bg-base-200">

        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('storage/images/navbar/' . $navbar->image) }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">PPDB</h1>
        </div>
        <div class="px-6 py-16 lg:px-16">
            <div class="flex items-center justify-center">
                <div class="h-1/3 w-1/3 space-y-3">
                    <a href="/images/default/PPDB.jpg" target="_blank">
                        <img src={{ asset("images/default/$ppdb->image") }} alt=""
                            class="rounded-sm border border-slate-100 shadow">
                    </a>
                    <p class="text-center font-semibold">PPDB Brosur</p>
                    <a href="{{ $ppdb->url_ppdb }}" class="btn btn-primary btn-sm w-full" target="_blank">Form
                        Pendaftaran</a>
                </div>
            </div>
        </div>
    </section>
@endsection
