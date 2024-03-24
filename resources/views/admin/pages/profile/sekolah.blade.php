@extends('admin.layouts.app')

@section('xdata-page')
    'tentangKami'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Profil Sekolah Form
                </h2>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Home /</a>
                        </li>
                        <li class="font-medium text-primary">Profil Sekolah Form</li>
                    </ol>
                </nav>
            </div>

            <div class="mb-6 mt-3 flex">
                <a href="/profile/tentang-kami" target="_blank"
                    class="inline-flex w-full items-center justify-center gap-1 rounded-full bg-success px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                    Lihat Profil Sekolah
                </a>
            </div>

            <div class="grid grid-cols-1 gap-9 sm:grid-cols-1">
                <div class="flex flex-col gap-9">
                    <!-- Visi Form -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                            <h3 class="font-medium text-black dark:text-white">
                                Profil Sekolah Form
                            </h3>
                        </div>
                        <form action="{{ route('admin.profil_sekolah.update', $school->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="p-6.5">

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Logo
                                    </label>
                                    <div class="my-3 flex flex-col items-center justify-center gap-2">
                                        <img src="{{ Str::contains($school->logo, 'drive') ? $school->logo : asset('storage/images/school_profile/' . $school->logo) }}"
                                            alt="Logo" class="w-1/4">
                                    </div>
                                    <input type="file" name="logo"
                                        class="w-full rounded-md border border-stroke p-3 outline-none transition file:mr-4 file:rounded file:border-[0.5px] file:border-stroke file:bg-[#EEEEEE] file:px-2.5 file:py-1 file:text-sm file:font-normal focus:border-primary file:focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-strokedark dark:file:bg-white/30 dark:file:text-white" />
                                    {{-- <span class="text-xs">Image Ratio 2:3</span> --}}
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Label Logo
                                    </label>
                                    <input type="text" name="logo_label" value="{{ $school->logo_label }}" required
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Foto Kepala Sekolah
                                    </label>
                                    <div class="my-3 flex flex-col items-center justify-center gap-2">
                                        <img src="{{ Str::contains($school->principal_foto, 'drive') ? $school->principal_foto : asset('storage/images/school_profile/' . $school->principal_foto) }}"
                                            alt="Logo" class="w-1/4">
                                    </div>
                                    <input type="file" name="principal_foto"
                                        class="w-full rounded-md border border-stroke p-3 outline-none transition file:mr-4 file:rounded file:border-[0.5px] file:border-stroke file:bg-[#EEEEEE] file:px-2.5 file:py-1 file:text-sm file:font-normal focus:border-primary file:focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-strokedark dark:file:bg-white/30 dark:file:text-white" />
                                    {{-- <span class="text-xs">Image Ratio 2:3</span> --}}
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Nama Kepala Sekolah
                                    </label>
                                    <input type="text" name="principal_name" value="{{ $school->principal_name }}"
                                        required
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Kata Sambutan Kepala Sekolah
                                    </label>
                                    <textarea id="summernote" name="principal_text" rows="6"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $school->principal_text }}</textarea>
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Campus 1
                                    </label>
                                    <input type="text" name="campus1" value="{{ $school->campus1 }}" required
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Campus 2
                                    </label>
                                    <input type="text" name="campus2" value="{{ $school->campus2 }}" required
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

@section('after-script')
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
