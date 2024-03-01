@extends('admin.layouts.app')

@section('xdata-page')
    'guruStaf'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Guru & Staf
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Dashboard /</a>
                        </li>
                        <li class="font-medium text-primary">Tabel Guru & Staf</li>
                    </ol>
                </nav>
            </div>

            <div class="mb-6 mt-3 flex">
                <a href="/akademis/guru-staf"
                    class="inline-flex w-full items-center justify-center gap-1 rounded-full bg-primary px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                    Lihat Guru & Staf
                </a>
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
                        <a href="/admin/akademis/guru-staf/create"
                            class="inline-flex items-center justify-center rounded-full bg-primary px-6 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-6 xl:px-6">
                            Tambah Data
                        </a>
                    </div>

                    <div class="flex flex-col">
                        <div class="grid grid-cols-3 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-5">
                            <div class="p-2.5 xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Name</h5>
                            </div>
                            <div class="p-2.5 text-center xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Position</h5>
                            </div>
                            <div class="hidden p-2.5 text-center sm:block xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Instagram</h5>
                            </div>
                            <div class="hidden p-2.5 text-center sm:block xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Whatsapp</h5>
                            </div>
                            <div class="p-2.5 text-center xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Action</h5>
                            </div>
                        </div>

                        @for ($i = 0; $i < 3; $i++)
                            <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5">
                                <div class="flex items-center gap-3 p-2.5 xl:p-5">
                                    <p class="font-medium text-black dark:text-white sm:block">
                                        John Doe
                                    </p>
                                </div>

                                <div class="flex items-center justify-center p-2.5 xl:p-5">
                                    <p class="font-medium text-black dark:text-white">Guru Kelas</p>
                                </div>

                                <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
                                    <p class="font-medium text-meta-1">@johndoe</p>
                                </div>

                                <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
                                    <p class="font-medium text-meta-3">62801722892</p>
                                </div>

                                <div class="flex items-center justify-center p-2.5 xl:p-5">
                                    <div class="flex gap-2">
                                        <div class="tooltip tooltip-warning cursor-pointer hover:text-warning"
                                            data-tip="Edit">
                                            <span class="material-icons">edit</span>
                                        </div>
                                        <div class="tooltip tooltip-error cursor-pointer hover:text-danger"
                                            data-tip="Hapus">
                                            <span class="material-icons">delete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>
                </div>

                <!-- ====== Table One End -->
            </div>
            <!-- ====== Table Section End -->
        </div>
    </main>
@endsection
