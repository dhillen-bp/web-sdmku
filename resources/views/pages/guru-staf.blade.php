@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('storage/images/navbar/' . $navbar->image) }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Guru & Staf</h1>
        </div>

        <div class="grid grid-cols-2 justify-center gap-6 px-6 py-16 lg:grid-cols-5 lg:px-16">

            @php
                $i = 1;
            @endphp
            @foreach ($teachers as $teacher)
                {{-- CARD GURU --}}
                <div class="taos:scale-[0.6] taos:opacity-0 card card-compact col-span-1 bg-base-100 shadow-2xl delay-[300ms] duration-[600ms] [animation-iteration-count:infinite]"
                    data-taos-offset="100">
                    <figure class="m-0 p-0">
                        {{-- <img src="https://drive.google.com/thumbnail?id=Image-ID&sz=w1000"> --}}
                        <img src="{{ $teacher['image'] }}" alt="Shoes" class="block w-full object-cover" />

                    </figure>
                    <div class="card-body items-center">
                        <h2 class="card-title text-center text-base">{{ $i }}. {{ $teacher['name'] }}</h2>
                        <div class="badge badge-primary badge-outline mb-1 cursor-default text-sm shadow-sm">
                            {{ $teacher['position'] }}</div>
                        {{-- <div class="card-actions justify-center">
                            <a
                                class="cursor-pointer rounded-full bg-gradient-to-tr hover:from-[#FF7806] hover:to-[#A20AD0]">
                                @include('partials.svg._instagram-svg', ['width' => 20, 'height' => 20])
                            </a>
                        </div> --}}
                    </div>
                </div>
                {{-- END CARD GURU --}}
                @php
                    $i++;
                @endphp
            @endforeach

        </div>

    </section>
@endsection
