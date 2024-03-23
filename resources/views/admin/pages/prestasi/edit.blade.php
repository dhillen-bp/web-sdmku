@extends('admin.layouts.app')

@section('xdata-page')
    'prestasiCreate'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Prestasi Create
                </h2>
                <nav>
                    <ol class="flex items-center gap-2">
                        <li>
                            <a class="font-medium" href="/admin/home">Home /</a>
                        </li>
                        <li>
                            <a class="font-medium" href="/admin/prestasi">Prestasi /</a>
                        </li>
                        <li class="font-medium text-primary">Prestasi Create</li>
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
                                Prestasi Create
                            </h3>
                            <span class="block"><small>Silahkan memilih upload foto atau masukkan link dari
                                    file google drive</small></span>
                        </div>
                        <form action="{{ route('admin.achievement.update', $prestasi->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="p-6.5">
                                <div class="mb-6">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Kategori Prestasi
                                    </label>
                                    <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-white dark:bg-form-input">
                                        <select name="category_id"
                                            class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                                            :class="isOptionSelected & amp; & amp;
                                            'text-black dark:text-white'"
                                            @change="isOptionSelected = true">
                                            <option disabled selected class="text-body">Pilih Kategori</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" class="text-black"
                                                    {{ $category->id === $prestasi->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="absolute right-4 top-1/2 z-20 -translate-y-1/2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.8">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                        fill="#637381"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
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
                                    <input type="text" name="image_gdrive"
                                        value="{{ Str::contains($prestasi->image, 'drive') ? $prestasi->image : 'Anda mengupload file di storage' }}"
                                        placeholder="Masukkan ID File Google Drive"
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
