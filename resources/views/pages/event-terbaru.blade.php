@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Event Terbaru</h1>
        </div>

        <div class="grid grid-cols-2 gap-6 px-6 py-16 md:grid-cols-3 lg:px-16">
            @foreach ($events as $event)
                <div class="relative">
                    <img class="h-56 w-full max-w-full rounded-lg object-cover"
                        src="{{ Str::contains($event->image, 'drive') ? $event->image : asset('storage/images/event/' . $event->image) }}"
                        alt="">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-2 text-center text-white">
                        <span class="text-sm font-semibold">{{ $event->name }}</span>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection
