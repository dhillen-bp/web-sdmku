@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('storage/images/navbar/' . $navbar->image) }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Guru & Staf</h1>
        </div>

        <div class="grid grid-cols-2 justify-center gap-6 px-6 lg:grid-cols-5 lg:px-16">

            @foreach ($teachers as $teacher)
                {{-- CARD GURU --}}
                <div class="taos:scale-[0.6] taos:opacity-0 card-compact card col-span-1 bg-base-100 shadow-2xl delay-[300ms] duration-[600ms] [animation-iteration-count:infinite]"
                    data-taos-offset="100">
                    <figure class="m-0 p-0">
                        {{-- <img src="https://drive.google.com/thumbnail?id=Image-ID&sz=w1000"> --}}
                        <img src="{{ Str::contains($teacher->image, 'drive') ? $teacher->image : asset('storage/images/teacher/' . $teacher->image) }}"
                            alt="Shoes" class="block w-full object-cover" />

                    </figure>
                    <div class="card-body items-center">
                        <h2 class="card-title text-center text-base">{{ $loop->iteration }}. {{ $teacher->name }}</h2>
                        <div
                            class="text-nowrap badge badge-primary badge-outline mb-1 cursor-default text-xs shadow-sm md:text-sm">
                            {{ $teacher->position }}</div>
                    </div>
                </div>
                {{-- END CARD GURU --}}
            @endforeach

        </div>

        <div class="my-2 px-6 py-16 lg:px-16">
            {{ $teachers->links('vendor.pagination.tailwind') }}
        </div>

    </section>
@endsection
