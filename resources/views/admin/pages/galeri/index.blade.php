@extends('admin.layouts.app')

@section('xdata-page')
    'Galeri'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Galeri
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Home /</a>
                        </li>
                        <li class="font-medium text-primary">Galeri </li>
                    </ol>
                </nav>
            </div>

            <div class="mb-6 mt-3 flex">
                <a href="/galeri" target="_blank"
                    class="inline-flex w-full items-center justify-center gap-1 rounded-full bg-success px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                    Lihat Galeri
                </a>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                <div class="flex flex-col gap-4">
                    <!-- Visi  -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <div class="mt-2">
                                <a href="/admin/berita/create"
                                    class="inline-flex items-center justify-center gap-1 rounded-full bg-primary px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                                    <span class="material-icons">add</span> Tambah Galeri
                                </a>
                            </div>
                            <div class="grid grid-cols-2 justify-center gap-6 px-6 py-6 lg:grid-cols-3">
                                @for ($i = 0; $i < 6; $i++)
                                    <div class="w-full overflow-hidden border-b-4 border-blue-500 bg-slate-100">
                                        <img src="https://images.unsplash.com/photo-1573748240263-a4e9c57a7fcd"
                                            alt="People" class="h-32 w-full object-cover sm:h-48 md:h-64">
                                        <label for="" class="p-2">Label Image</label>
                                        <div class="my-2 flex justify-around">
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-error btn-sm text-white">Hapus</button>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
