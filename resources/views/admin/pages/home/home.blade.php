@extends('admin.layouts.app')

@section('body')
    <!-- ===== Main Content Start ===== -->
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Home Form
                </h2>
                <a href="/home" target="_blank"
                    class="inline-flex items-center justify-center gap-1 rounded-full bg-primary px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                    Lihat Home
                </a>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Home /</a>
                        </li>
                        <li class="font-medium text-primary">Home Form</li>
                    </ol>
                </nav>
            </div>
            <div class="2xl:gap-7.5 grid grid-cols-1 gap-4 md:grid-cols-1 md:gap-6 xl:grid-cols-1">
                <!-- Card Item Start -->
                <div
                    class="border-stroke px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark rounded-sm border bg-white py-6">
                    <div
                        class="border-stroke px-6.5 dark:border-strokedark flex items-center justify-between border-b py-4">
                        <h3 class="font-medium text-black dark:text-white">
                            Welcome Section Edit
                        </h3>
                        <div>
                            <a href="/admin/hero-banner" target="_blank"
                                class="inline-flex items-center justify-center gap-1 rounded-full bg-primary px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                                Ubah Banner
                            </a>

                        </div>
                    </div>

                    <form action="#">
                        <div class="p-6.5">

                            <div class="mb-4.5">
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Title
                                </label>
                                <input type="text" placeholder="Masukkan Title"
                                    class="border-stroke disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input w-full rounded border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default dark:text-white dark:focus:border-primary" />
                            </div>

                            <div class="mb-6">
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Subtitle
                                </label>
                                <textarea rows="3" placeholder="Masukkan Subtitle"
                                    class="border-stroke disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input w-full rounded border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default dark:text-white dark:focus:border-primary"></textarea>
                            </div>

                            <div class="mb-6">
                                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Attach file
                                </label>
                                <input type="file"
                                    class="border-stroke file:border-stroke file:bg-whiter disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark w-full cursor-pointer rounded-lg border-[1.5px] bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary">
                            </div>

                            <button
                                class="text-gray flex w-full justify-center rounded bg-primary p-3 font-medium hover:bg-opacity-90">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Card Item End -->

            </div>

        </div>
    </main>
    <!-- ===== Main Content End ===== -->
@endsection
