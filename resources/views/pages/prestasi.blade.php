@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Prestasi</h1>
        </div>

        <div class="grid grid-cols-3 gap-6 px-6 py-16 lg:grid-cols-6 lg:gap-16 lg:px-16">
            @for ($i = 0; $i < 9; $i++)
                <div class="col-span-1 flex flex-col items-center justify-center gap-3">
                    <div class="group relative cursor-pointer space-y-2 hover:space-y-3">
                        <img class="mask mask-hexagon transition-transform duration-300 group-hover:scale-110"
                            src="{{ asset('shapes/award.png') }}" />
                        <div
                            class="text-wrap border-2 border-primary p-1 text-center text-sm text-primary shadow group-hover:font-semibold">
                            Lorem ipsum dolor, sit amet consectetur adipisicing.</div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
