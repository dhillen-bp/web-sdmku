@extends('layouts.app')

@section('title')
    Event Terbaru
@endsection

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('storage/images/navbar/' . $navbar->image) }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Event Terbaru</h1>
        </div>

        <div class="grid grid-cols-2 gap-6 px-6 py-16 md:grid-cols-3 lg:px-16">
            @foreach ($events as $event)
                <div class="group overflow-hidden shadow-xl">
                    <div class="relative">
                        <img class="h-56 w-full max-w-full rounded-lg object-cover transition-transform group-hover:scale-105"
                            src="{{ Str::contains($event->image, 'drive') ? $event->image : asset('storage/images/event/' . $event->image) }}"
                            alt="">
                        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-2 text-center text-white">
                            <a href="/kegiatan/event/{{ $event->id }}"
                                class="flex items-center justify-center text-sm font-semibold">
                                <span class="font-semibold hover:underline">{{ $event->name }}</span>
                                <span
                                    class="material-icons-outlined ml-2 opacity-0 transition-opacity group-hover:no-underline group-hover:opacity-100">arrow_circle_right</span>
                            </a>
                        </div>
                    </div>
                    <div class="rounded-b-lg bg-white p-2 text-sm">
                        <p class="text-gray-700 text-sm">
                            {!! strlen($event->caption) > 70 ? substr($event->caption, 0, 70) . '...' : $event->caption !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection
