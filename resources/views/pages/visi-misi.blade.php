@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Visi & Misi</h1>
        </div>
        <div class="px-6 py-16 lg:px-16">
            <div class="flex flex-col gap-6 lg:flex-row lg:gap-16">
                <div class="card w-full bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title justify-center">Visi</h2>
                        {!! $vision->content !!}
                    </div>
                </div>
                <div class="card w-full bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title justify-center">Misi</h2>
                        {!! $mission->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
