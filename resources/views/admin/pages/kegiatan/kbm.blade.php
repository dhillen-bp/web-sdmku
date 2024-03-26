@extends('admin.layouts.app')

@section('xdata-page')
    'KBM_create'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    KBM Form
                </h2>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="/admin/home">Home /</a>
                        </li>
                        <li>
                            <a class="font-medium" href="/admin/profil/guru-staf">KBM /</a>
                        </li>
                        <li class="font-medium text-primary">KBM Form</li>
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
                                KBM Form
                            </h3>
                        </div>
                        <form action={{ route('admin.kbm.update') }} method="POST">
                            @csrf
                            @method('PUT')
                            <div class="p-6.5">

                                <iframe src="{{ $kbm->kbm_url }}" class="mb-6 min-h-screen w-full"></iframe>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        KBM URL
                                        <span class="text-sx block text-danger lg:text-sm">* Link yang diberikan adalah
                                            link
                                            setelah "Open in New Window"</span>
                                    </label>

                                    <input type="text" name="kbm_url" value="{{ $kbm->kbm_url }}"
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
