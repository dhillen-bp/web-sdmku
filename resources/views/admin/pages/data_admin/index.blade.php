@extends('admin.layouts.app')

@section('xdata-page')
    'Admin'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Admin
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Home /</a>
                        </li>
                        <li class="font-medium text-primary">Tabel Admin</li>
                    </ol>
                </nav>
            </div>

            <!-- ====== Table Section Start -->
            <div class="flex flex-col gap-10">
                <!-- ====== Table One Start -->
                <div
                    class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                    <div class="mb-5 flex items-center justify-between">
                        <h4 class="my-auto mb-6 text-xl font-bold text-black dark:text-white">
                            Tabel
                        </h4>
                        <a href="{{ route('admin.data_admin.create') }}"
                            class="inline-flex items-center justify-center rounded-full bg-primary px-6 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-6 xl:px-6">
                            Tambah Data
                        </a>
                    </div>

                    <div class="flex flex-col">
                        <div class="grid grid-cols-3 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-3">
                            <div class="p-2.5 xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Name</h5>
                            </div>
                            <div class="p-2.5 text-center xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Email</h5>
                            </div>
                            <div class="p-2.5 text-center xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Action</h5>
                            </div>
                        </div>

                        @foreach ($users as $user)
                            <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-3">
                                <div class="flex items-center gap-3 p-2.5 xl:p-5">
                                    <p class="font-medium text-black dark:text-white sm:block">
                                        {{ $user->name }}
                                    </p>
                                </div>

                                <div class="flex items-center justify-center p-2.5 xl:p-5">
                                    <p class="font-medium text-black dark:text-white sm:block">
                                        {{ $user->email }}
                                    </p>
                                </div>

                                <div class="flex items-center justify-center p-2.5 xl:p-5">
                                    <div class="flex gap-2">
                                        <a href="{{ route('admin.data_admin.edit', $user->id) }}"
                                            class="tooltip tooltip-warning cursor-pointer hover:text-warning"
                                            data-tip="Edit">
                                            <span class="material-icons">edit</span>
                                        </a>
                                        <button class="tooltip tooltip-error cursor-pointer hover:text-danger"
                                            data-tip="Hapus"
                                            onclick="modal_delete_admin_{{ $loop->iteration }}.showModal()">
                                            <span class="material-icons">delete</span>
                                        </button>
                                    </div>
                                </div>

                            </div>


                            <dialog id="modal_delete_admin_{{ $loop->iteration }}" class="modal">
                                <div class="modal-box">
                                    <h3 class="text-lg font-bold">Hapus Hero Image!</h3>
                                    <p class="py-4">Anda yakin menghapus data {{ $user->name }} ?</p>
                                    <div class="modal-action">
                                        <form action="{{ route('admin.guru.destroy', $user->id) }}" method="POST">
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

                        <div class="my-2">
                            {{ $users->links('vendor.pagination.tailwind') }}
                        </div>
                    </div>
                </div>

                <!-- ====== Table One End -->
            </div>
            <!-- ====== Table Section End -->
        </div>
    </main>
@endsection
