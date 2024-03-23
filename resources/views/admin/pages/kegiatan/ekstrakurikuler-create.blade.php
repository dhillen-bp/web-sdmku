@extends('admin.layouts.app')

@section('xdata-page')
    'ExtracurricularCreate'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Ekstrakurikuler Create
                </h2>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="/admin/home">Home /</a>
                        </li>
                        <li>
                            <a class="font-medium" href="{{ route('admin.extra.index') }}">Ekstrakurikuler /</a>
                        </li>
                        <li class="font-medium text-primary">Ekstrakurikuler Create</li>
                    </ol>
                </nav>
            </div>

            <div class="grid grid-cols-1 gap-9 sm:grid-cols-1">
                <div class="flex flex-col gap-9">
                    <!-- Visi Form -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <h3 class="font-medium text-black dark:text-white">
                                Ekstrakurikuler Create
                            </h3>
                        </div>
                        <form action="{{ route('admin.extra.store') }}" method="POST">
                            @csrf
                            <div class="p-6.5">

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Name
                                    </label>
                                    <input type="text" name="name" placeholder="Masukkan Name" required
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Deskripsi
                                    </label>
                                    <input type="text" name="desc" placeholder="Masukkan Deskripsi" required
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Upload Foto
                                    </label>
                                    <input type="file" name="image"
                                        class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary">
                                </div>
                                <div class="divider divider-primary">ATAU</div>
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-black dark:text-white">
                                        Link Google Drive Foto
                                    </label>
                                    <span
                                        class="mb-3 block"><small>https://drive.google.com/thumbnail?id=Image_File_ID&sz=w1000</small></span>
                                    <input type="text" name="image_gdrive" placeholder="Masukkan ID File Google Drive"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <button type="submit"
                                    class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
