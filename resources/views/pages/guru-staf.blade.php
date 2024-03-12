@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Guru & Staf</h1>
        </div>

        <div class="grid grid-cols-2 justify-center gap-6 px-6 py-16 lg:grid-cols-5 lg:px-16">
            @for ($i = 0; $i < 9; $i++)
                <div class="card card-compact col-span-1 bg-base-100 shadow-2xl">
                    <figure class="m-0 p-0">
                        <img src="https://source.unsplash.com/random/200x200?teacher" alt="Shoes" class="block w-full" />
                    </figure>
                    <div class="card-body items-center">
                        <h2 class="card-title">John Doe!</h2>
                        <div
                            class="badge badge-primary badge-outline mb-1 cursor-default hover:bg-primary hover:py-3 hover:font-semibold hover:text-slate-100 hover:shadow-sm">
                            Guru Kelas</div>
                        <div class="card-actions justify-center">
                            <a
                                class="cursor-pointer rounded-full bg-gradient-to-tr hover:from-[#FF7806] hover:to-[#A20AD0]">
                                @include('partials.svg._instagram-svg', ['width' => 20, 'height' => 20])
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

    </section>
@endsection
