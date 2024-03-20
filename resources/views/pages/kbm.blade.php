@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">KBM</h1>
        </div>

        <div class="px-6 py-16 lg:px-16">
            <iframe
                src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTkMH_2hFOcZmMUCHfPgOV5r0HPrIu3LaHlluSohQcGa4gae7Mgc071TBpwQhVNMM8WAEbr1KsfdmnV/pubhtml?widget=true&amp;headers=false"
                class="min-h-screen w-full"></iframe>
        </div>

    </section>
@endsection
