@extends('layouts.app')

@section('title')
    Event Terbaru Detail
@endsection

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('storage/images/navbar/' . $navbar->image) }});">
            <div class="flex flex-col items-center justify-center gap-2">
                <h1 class="text-center text-3xl font-bold text-slate-100">Event</h1>
                <div class="breadcrumbs flex text-sm text-slate-100">
                    <ul>
                        <li><a href="/kegiatan/event">Event</a></li>
                        <li class="font-semibold">Detail Event</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 justify-center gap-6 px-6 py-16 lg:grid-cols-4 lg:px-16">
            <div class="col-span-4 space-y-4 rounded bg-white p-4 shadow-xl lg:col-span-3">
                <h4 class="mb-4 text-2xl font-bold">{{ $event->name }}</h4>
                <img src="{{ Str::contains($event->image, 'drive') ? $event->image : asset('storage/images/event/' . $event->image) }}"
                    alt="News Image" class="h-[400px] w-full object-cover object-top shadow-lg">

                <p class="text-gray-600 text-wrap mb-6 break-words">{!! $event->caption !!}</p>
                <!-- Add your main news content here -->
            </div>

            <!-- 1/4 Width for 3 Latest News List -->
            <div class="col-span-4 space-y-4 text-sm lg:col-span-1">
                <h3 class="text-xl font-bold">Event Terbaru Lain</h3>
                @foreach ($eventLatests as $latest)
                    <div class="group overflow-hidden bg-white shadow">
                        <a href="/event/{{ $latest->slug }}">
                            <img src="{{ Str::contains($latest->image, 'drive') ? $latest->image : asset('storage/images/event/' . $latest->image) }}"
                                alt="" class="h-[180px] w-full transition-transform group-hover:scale-105">
                        </a>
                        <div class="p-2">

                            <a href="/event/{{ $latest->id }}"
                                class="text-lg font-semibold hover:underline">{{ $latest->name }}</a>
                            <p class="text-gray-600">{!! strlen($latest->caption) > 50 ? substr($latest->caption, 0, 50) . '...' : $latest->caption !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        </div>
    </section>
@endsection
