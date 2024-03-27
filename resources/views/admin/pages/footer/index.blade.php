@extends('admin.layouts.app')

@section('xdata-page')
    'Footer'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Footer Form
                </h2>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="/admin/home">Home /</a>
                        </li>
                        <li>
                            <a class="font-medium" href="{{ route('admin.news.index') }}">Footer /</a>
                        </li>
                        <li class="font-medium text-primary">Footer Form</li>
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
                                Footer Form
                            </h3>
                        </div>
                        <form action="{{ route('admin.footer.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="p-6.5">

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        No Telp <span class="text-xs text-danger">*</span>
                                    </label>
                                    <input type="text" name="no_telp" value="{{ $footer->no_telp }}"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        No Whatsapp <span class="text-xs text-danger">*</span>
                                    </label>
                                    <input type="text" name="no_wa" value="{{ $footer->no_wa }}"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Keterangan Jam Kerja <span class="text-xs text-danger">*</span>
                                    </label>
                                    <textarea rows="6" name="wa_jam_kerja" id="wa_jam_kerja"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $footer->wa_jam_kerja }}</textarea>
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Alamat Kampus 1 <span class="text-xs text-danger">*</span>
                                    </label>
                                    <textarea rows="6" name="alamat_kampus_1" id="alamat_kampus_1"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $footer->alamat_kampus_1 }}</textarea>
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Alamat Kampus 2 <span class="text-xs text-danger">*</span>
                                    </label>
                                    <textarea rows="6" name="alamat_kampus_2" id="alamat_kampus_2"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $footer->alamat_kampus_2 }}</textarea>
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Link Facebook <span class="text-xs text-danger">*</span>
                                    </label>
                                    <input type="text" name="social_facebook" value="{{ $footer->social_facebook }}"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Link Instagram <span class="text-xs text-danger">*</span>
                                    </label>
                                    <input type="text" name="social_instagram" value="{{ $footer->social_instagram }}"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Link Tiktok <span class="text-xs text-danger">*</span>
                                    </label>
                                    <input type="text" name="social_tiktok" value="{{ $footer->social_tiktok }}"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Link Youtube <span class="text-xs text-danger">*</span>
                                    </label>
                                    <input type="text" name="social_youtube" value="{{ $footer->social_youtube }}"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <button
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
