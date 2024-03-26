@extends('admin.layouts.app')

@section('xdata-page')
    'prestasi_index'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Prestasi
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Home /</a>
                        </li>
                        <li class="font-medium text-primary">Prestasi </li>
                    </ol>
                </nav>
            </div>

            <div class="mb-6 mt-3 flex">
                <a href="/prestasi" target="_blank"
                    class="inline-flex w-full items-center justify-center gap-1 rounded-full bg-success px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                    Lihat Prestasi
                </a>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                <div class="flex flex-col gap-4">
                    <!-- Visi  -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <div class="mt-2">
                                <a href="{{ route('admin.achievement.create') }}"
                                    class="inline-flex items-center justify-center gap-1 rounded-full bg-primary px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                                    <span class="material-icons">add</span> Tambah Prestasi
                                </a>
                            </div>
                            <div class="flex flex-wrap items-center justify-center gap-3 py-4 md:py-8">
                                <a href="{{ route('admin.achievement.index') }}"
                                    class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-primary bg-white px-5 py-1 text-center text-base font-medium text-primary hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">All
                                    categories</a>
                                @foreach ($categories as $category)
                                    <a href="{{ route('admin.achievement.slug', $category->slug) }}"
                                        class="dark:bg-gray-900 mb-3 me-3 rounded-full border border-black bg-white px-5 py-1 text-center text-base font-medium text-black hover:bg-primary hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
                                        {{ $category->name }}</a>
                                @endforeach
                            </div>
                            <div class="grid grid-cols-2 justify-center gap-6 px-6 py-6 lg:grid-cols-3">
                                @foreach ($achievements as $achievement)
                                    <div class="w-full overflow-hidden border-b-4 border-blue-500 bg-slate-100">
                                        <img src="{{ Str::contains($achievement->image, 'drive') ? $achievement->image : asset('/storage/images/prestasi/' . $achievement->image) }}"
                                            alt="People" class="h-32 w-full object-cover sm:h-48 md:h-64">
                                        <div class="my-2 flex justify-around">
                                            <a href="{{ route('admin.achievement.edit', $achievement->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <button class="btn btn-error btn-sm text-white"
                                                onclick="modal_delete_prestasi_{{ $loop->iteration }}.showModal()">Hapus</button>
                                        </div>
                                    </div>

                                    <dialog id="modal_delete_prestasi_{{ $loop->iteration }}" class="modal">
                                        <div class="modal-box">
                                            <h3 class="text-lg font-bold">Hapus Prestasi!</h3>
                                            <p class="py-4">Anda yakin menghapus data prestasi ini? {{ $achievement->id }}
                                            </p>
                                            <div class="modal-action">
                                                <form action="{{ route('admin.achievement.destroy', $achievement->id) }}"
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
                                {{ $achievements->links('vendor.pagination.tailwind') }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
