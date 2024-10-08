@extends('admin.layouts.app')

@section('xdata-page')
    'Berita'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Berita
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Home /</a>
                        </li>
                        <li class="font-medium text-primary">Berita </li>
                    </ol>
                </nav>
            </div>

            <div class="mb-6 mt-3 flex">
                <a href="/berita" target="_blank"
                    class="inline-flex w-full items-center justify-center gap-1 rounded-full bg-success px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                    Lihat Berita
                </a>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                <div class="flex flex-col gap-4">
                    <!-- Visi  -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <div class="mt-2">
                                <a href="{{ route('admin.news.create') }}"
                                    class="inline-flex items-center justify-center gap-1 rounded-full bg-primary px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                                    <span class="material-icons">add</span> Tambah Berita
                                </a>
                            </div>
                            <div class="grid grid-cols-2 justify-center gap-6 px-6 py-6 lg:grid-cols-3">
                                @foreach ($news as $berita)
                                    <div class="w-full overflow-hidden border-b-4 border-blue-500 bg-slate-100">
                                        <img src="{{ Str::contains($berita->image, 'drive') ? $berita->image : asset('storage/images/berita/' . $berita->image) }}"
                                            alt="People" class="h-32 w-full object-cover sm:h-48 md:h-64">
                                        <div class="p-4">
                                            <h3 class="my-2 font-semibold leading-tight sm:leading-normal">
                                                {{ $berita->title }}</h3>
                                            <div class="text-sm">{{ $berita->author }}</div>
                                            <div class="flex items-center text-sm">
                                                <svg class="mr-2 opacity-75" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                    x="0px" y="0px" width="12" height="12" viewBox="0 0 97.16 97.16"
                                                    style="enable-background:new 0 0 97.16 97.16;" xml:space="preserve">
                                                    <path
                                                        d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z">
                                                    </path>
                                                    <path
                                                        d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z">
                                                    </path>
                                                </svg>
                                                <p class="leading-none">{{ $berita->created_at }}</p>
                                            </div>
                                            <div class="mt-3 flex justify-around">
                                                <a href="{{ route('admin.news.edit', $berita->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <button class="btn btn-error btn-sm text-white"
                                                    onclick="modal_delete_berita_{{ $loop->iteration }}.showModal()">Hapus</button>
                                            </div>
                                        </div>
                                    </div>

                                    <dialog id="modal_delete_berita_{{ $loop->iteration }}" class="modal">
                                        <div class="modal-box">
                                            <h3 class="text-lg font-bold">Hapus Berita!</h3>
                                            <p class="py-4">Anda yakin menghapus data berita ini? {{ $berita->title }}
                                            </p>
                                            <div class="modal-action">
                                                <form action="{{ route('admin.news.destroy', $berita->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <!-- if there is a button in form, it will close the modal -->
                                                    <button class="btn btn-error text-white" type="submit">Ya</button>
                                                </form>
                                                <form method="dialog">
                                                    <button class="btn btn-ghost">Batal</button>
                                                </form>
                                            </div>
                                        </div>
                                    </dialog>
                                @endforeach

                            </div>

                            <div class="my-2">
                                {{ $news->links('vendor.pagination.tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
