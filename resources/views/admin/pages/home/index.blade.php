@extends('admin.layouts.app')

@section('xdata-page')
    'Home'
@endsection

@section('body')
    <!-- ===== Main Content Start ===== -->
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-8 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Home Form
                </h2>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="index.html">Home /</a>
                        </li>
                        <li class="font-medium text-primary">Home Form</li>
                    </ol>
                </nav>
            </div>

            <div class="mb-8 mt-3 flex">
                <a href="/home" target="_blank"
                    class="inline-flex w-full items-center justify-center gap-1 rounded-full bg-success px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                    Lihat Home
                </a>
            </div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-1 md:gap-6 xl:grid-cols-1 2xl:gap-7.5">
                <!-- Card Item Start -->
                <div
                    class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div
                        class="flex items-center justify-between border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                        <h3 class="font-bold text-black dark:text-white">
                            Main Section Edit
                        </h3>
                        <div class="tooltip tooltip-warning"
                            data-tip="Hero Image adalah Gambar Slider yang bisa geser kanan dan kiri">
                            <a href="/admin/home/hero-banner" target="_blank"
                                class="btn-sm inline-flex items-center justify-center gap-1 rounded-full bg-warning px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                                Ubah Hero Image
                            </a>
                        </div>
                        <div class="tooltip tooltip-warning" data-tip="Program Unggulan adalah 3 Card">
                            <a href="/admin/home/program-unggulan" target="_blank"
                                class="btn-sm inline-flex items-center justify-center gap-1 rounded-full bg-warning px-5 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 xl:px-6">
                                Ubah Program Unggulan
                            </a>
                        </div>
                    </div>

                    <form action="{{ route('home.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="p-6.5">

                            <div class="mb-4.5">
                                <label class="mb-3 block text-sm font-semibold text-black dark:text-white">
                                    Nama Sekolah
                                </label>
                                <input type="text" name="school_name" value="{{ $home->school_name }}"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            </div>

                            <div class="mb-8">
                                <label class="mb-3 block text-sm font-semibold text-black dark:text-white">
                                    Binaan Sekolah
                                </label>
                                <input type="text" name="school_affiliate" value="{{ $home->school_affiliate }}"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                            </div>

                            <div class="mb-8">
                                <label class="mb-3 block text-sm font-semibold text-black dark:text-white">
                                    Motto
                                </label>
                                <textarea id="motto" rows="3" name="motto" placeholder="Masukkan Subtitle"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $home->motto }}</textarea>
                            </div>

                            <div class="mb-8">
                                <label class="mb-3 block text-sm font-semibold text-black dark:text-white">
                                    Description
                                </label>
                                <textarea id="description" rows="3" name="description" placeholder="Masukkan Subtitle"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $home->description }}</textarea>
                            </div>

                            <div class="mb-8">
                                <label class="mb-3 block text-sm font-semibold text-black dark:text-white">
                                    PPDB Banner
                                </label>
                                <img id="imagePreview" src="{{ $home->ppdb_banner }}" alt="Image Preview">

                                <input type="file"
                                    class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary">
                            </div>

                            <div class="mb-8">
                                <label class="mb-3 block text-sm font-semibold text-black dark:text-white">
                                    PPDB Description
                                </label>
                                <textarea id="ppdb_desc" rows="3" name="ppdb_desc" placeholder="Masukkan Subtitle"
                                    class="note-codeable w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ $home->ppdb_desc }}</textarea>
                            </div>

                            <button type="submit"
                                class="btn-submit flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
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

@section('after-script')
    <script>
        $('#description, #ppdb_desc').summernote({
            placeholder: 'Ketik disini',
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

        $('#motto').summernote({
            height: 120,
            codemirror: {
                theme: 'monokai'
            },
            callbacks: {
                onInit: function() {
                    // $('#motto').summernote('codeview.activate');
                    $('.btn-submit').on('click', function() {
                        $("#motto").each(function(index) {
                            if ($(this).summernote('codeview.isActivated')) {
                                $(this).summernote('codeview.deactivate');
                            }
                        });
                    });
                }
            }
        });
    </script>

    <script type="module">
        $(document).ready(function() {
            $('#imageInput').change(function() {
                var input = this;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
    </script>
@endsection
