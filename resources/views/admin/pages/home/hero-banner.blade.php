@extends('admin.layouts.app')

@section('xdata-page')
    'Home'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Hero Banner Form
                </h2>
                <a href="/home" target="_blank"
                    class="inline-flex items-center justify-center gap-1 rounded-full bg-primary px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                    Lihat Home
                </a>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="/admin/home">Home /</a>
                        </li>
                        <li class="font-medium text-primary">Hero Banner</li>
                    </ol>
                </nav>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-1 md:gap-6 xl:grid-cols-1 2xl:gap-7.5">
                <!-- Card Item Start -->
                <div
                    class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div
                        class="flex items-center justify-between border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                        <h3 class="font-medium text-black dark:text-white">
                            Hero Banner Edit
                        </h3>

                    </div>

                    <form action="{{ route('home.hero.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-6.5">

                            <div class="mb-6">
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Upload Gambar
                                </label>
                                <input type="file" name="image"
                                    class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary">
                            </div>

                            <button
                                class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Card Item End -->

            </div>

            <div class="mt-5 grid grid-cols-1 gap-4 md:grid-cols-1 md:gap-6 xl:grid-cols-1 2xl:gap-7.5">
                <!-- Card Item Start -->
                <div
                    class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div
                        class="flex items-center justify-between border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                        <h3 class="font-bold text-black dark:text-white">
                            Hero Image Preview
                        </h3>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        @foreach ($homeHero as $hero)
                            <div class="relative">
                                <img class="h-auto max-w-full rounded-lg"
                                    src={{ $hero->image === 'hero_default.JPG' ? asset("images/home/$hero->image") : asset("storage/images/home/$hero->image") }}
                                    alt="">
                                <button
                                    class="absolute right-2 top-2 rounded-full bg-red-500 p-1 text-white hover:bg-red-600 focus:outline-none"
                                    aria-label="Hapus Gambar" onclick="modal_delete_hero.showModal()">
                                    <span class="material-icons flex items-center justify-center">delete</span>
                                </button>
                            </div>

                            <dialog id="modal_delete_hero" class="modal">
                                <div class="modal-box">
                                    <h3 class="text-lg font-bold">Hapus Hero Image!</h3>
                                    <p class="py-4"></p>
                                    <div class="modal-action">
                                        <form action="{{ route('home.hero.destroy', $hero->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <!-- if there is a button in form, it will close the modal -->
                                            <button class="btn btn-error text-white" type="submit">Ya</button>
                                        </form>

                                        <form method="dialog">
                                            <button class="btn btn-ghost" type="button">Batal</button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                        @endforeach

                    </div>

                </div>
                <!-- Card Item End -->

            </div>
        </div>
    </main>
@endsection
