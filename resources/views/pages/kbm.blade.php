@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('storage/images/navbar/' . $navbar->image) }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">KBM</h1>
        </div>

        <div class="px-6 py-16 lg:px-16">
            <iframe src="{{ $kbm->kbm_url }}" class="min-h-screen w-full"></iframe>
        </div>

    </section>
@endsection
