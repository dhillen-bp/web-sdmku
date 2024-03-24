@extends('admin.layouts.app')

@section('xdata-page')
    'event'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Event Terbaru
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Home /</a>
                        </li>
                        <li>
                            <a class="font-medium" href="index.html">Kegiatan /</a>
                        </li>
                        <li class="font-medium text-primary">Event Terbaru </li>
                    </ol>
                </nav>
            </div>

            <div class="mb-6 mt-3 flex">
                <a href="/galeri" target="_blank"
                    class="inline-flex w-full items-center justify-center gap-1 rounded-full bg-success px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                    Lihat Event Terbaru
                </a>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1">
                <div class="flex flex-col gap-4">
                    <!-- Visi  -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <div class="mt-2">
                                <a href="{{ route('admin.event.create') }}"
                                    class="inline-flex items-center justify-center gap-1 rounded-full bg-primary px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                                    <span class="material-icons">add</span> Tambah Event Terbaru
                                </a>
                            </div>
                            <div class="grid grid-cols-2 justify-center gap-6 px-6 py-6 lg:grid-cols-3">

                                @foreach ($events as $event)
                                    <div class="relative border border-primary">
                                        <img class="h-56 w-full max-w-full rounded-lg object-cover"
                                            src="{{ Str::contains($event->image, 'drive') ? $event->image : asset('storage/images/event/' . $event->image) }}"
                                            alt="">
                                        <p class="text-center text-sm font-semibold">{{ $event->name }}</p>
                                        <div class="my-3 flex justify-around">
                                            <a href="{{ route('admin.event.edit', $event->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <button class="btn btn-error btn-sm text-white"
                                                onclick="modal_delete_event_{{ $loop->iteration }}.showModal()">Hapus</button>
                                        </div>
                                    </div>

                                    <dialog id="modal_delete_event_{{ $loop->iteration }}" class="modal">
                                        <div class="modal-box">
                                            <h3 class="text-lg font-bold">Hapus Event!</h3>
                                            <p class="py-4">Anda yakin menghapus data {{ $event->name }}</p>
                                            <div class="modal-action">
                                                <form action="{{ route('admin.event.destroy', $event->id) }}"
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
                                {{ $events->links('vendor.pagination.tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
