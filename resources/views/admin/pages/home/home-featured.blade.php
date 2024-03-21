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
                        <li class="font-medium text-primary">Program Unggulan</li>
                    </ol>
                </nav>
            </div>

            <div class="mt-5 grid grid-cols-1 gap-4 md:grid-cols-1 md:gap-6 xl:grid-cols-1 2xl:gap-7.5">
                <!-- Card Item Start -->
                <div
                    class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="flex items-center justify-between border-b border-stroke py-4 dark:border-strokedark">
                        <h3 class="font-bold text-black dark:text-white">
                            Program Unggulan
                        </h3>
                        <a href="{{ route('home.featured.create') }}" class="btn btn-primary btn-sm">Tambah Program</a>
                    </div>

                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-2 lg:grid-cols-3 lg:gap-4">
                        @foreach ($homeFeatured as $featured)
                            <div class="group h-full w-full overflow-hidden rounded-lg border-2 border-primary bg-base-200 shadow-lg"
                                data-taos-offset="50">
                                <div
                                    class="h-[220px] w-full rounded-t-lg bg-base-200 object-cover shadow transition-transform duration-500 group-hover:scale-105">
                                    <img src="{{ $featured->featured_image }}" alt=""
                                        class="h-full w-full object-cover">
                                </div>

                                <div class="p-3">
                                    <h5 class="text-center text-base font-semibold lg:text-xl">
                                        {{ $featured->featured_title }}</h5>
                                    <p class="text-center text-xs lg:text-sm">{{ $featured->featured_subtitle }}</p>
                                </div>

                                <div class="flex items-end justify-around p-2">
                                    <a href="{{ route('home.featured.edit', $featured->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-error btn-sm text-white"
                                        onclick="modal_delete_featured.showModal()">Hapus</button>
                                </div>
                            </div>
                        @endforeach
                        <dialog id="modal_delete_featured" class="modal">
                            <div class="modal-box">
                                <h3 class="text-lg font-bold">Hapus Hero Image!</h3>
                                <p class="py-4"></p>
                                <div class="modal-action">
                                    <form action="{{ route('home.featured.destroy', $featured->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <!-- if there is a button in form, it will close the modal -->
                                        <button class="btn btn-error text-white" type="submit">Ya</button>
                                        <button class="btn btn-ghost" type="button"
                                            onclick="cancelForm(event)">Batal</button>
                                    </form>
                                </div>
                            </div>
                        </dialog>
                    </div>

                </div>
                <!-- Card Item End -->

            </div>
        </div>
    </main>
@endsection


@section('after-script')
    <script>
        function cancelForm(event) {
            event.preventDefault();
            // Implement your cancel logic here
            // For example, hide the form or reset input fields
            $("#modal_delete_featured").removeAttr("open");
            $("#modal_delete_featured").attr("close", "close");

        }
    </script>
@endsection
