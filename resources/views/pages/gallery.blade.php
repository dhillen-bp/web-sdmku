@extends('layouts.app')

@section('body')
    <section class="bg-base-200">
        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Galerry</h1>
        </div>

        <div class="px-6 py-16 lg:px-16">
            <div class="flex flex-wrap items-center justify-center gap-3 py-4 md:py-8">
                <button type="button"
                    class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-primary bg-white px-5 py-2.5 text-center text-base font-medium text-primary hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">All
                    categories</button>
                <button type="button"
                    class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-black bg-white px-5 py-2.5 text-center text-base font-medium text-black hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">Prestasi</button>
                <button type="button"
                    class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-black bg-white px-5 py-2.5 text-center text-base font-medium text-black hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">Kegiatan</button>
                <button type="button"
                    class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-black bg-white px-5 py-2.5 text-center text-base font-medium text-black hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">Fasilitas</button>
            </div>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                </div>
            </div>
        </div>

    </section>
@endsection
