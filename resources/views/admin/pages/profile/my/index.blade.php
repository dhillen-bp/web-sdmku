@extends('admin.layouts.app')

@section('xdata-page')
    'profile'
@endsection

@section('body')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mx-auto max-w-242.5">
                <!-- Breadcrumb Start -->
                <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <h2 class="text-title-md2 font-bold text-black dark:text-white">
                        Profile
                    </h2>

                    <nav>
                        <ol class="flex items-center gap-2">
                            <li>
                                <a class="font-medium" href="/admin">Home /</a>
                            </li>
                            <li class="text-primary">Profile</li>
                        </ol>
                    </nav>
                </div>
                <!-- Breadcrumb End -->

                <!-- ====== Profile Section Start -->
                <div
                    class="overflow-hidden rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="relative z-20 h-35 md:h-65">
                        <img src="{{ asset('storage/images/navbar/' . $navbar->image) }}" alt="Navbar Image"
                            class="h-full w-full rounded-tl-sm rounded-tr-sm object-cover object-center">
                        <div class="tooltip tooltip-left tooltip-primary absolute bottom-1 right-1 z-10 xsm:bottom-4 xsm:right-4"
                            data-tip="Ini digunakan untuk mengubah gambar header dibawah navbar pada tampilan pengguna">
                            <form action="{{ route('admin.navbar.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label for="image"
                                    class="flex cursor-pointer items-center justify-center gap-2 rounded bg-primary px-2 py-1 text-sm font-medium text-white hover:bg-opacity-80 xsm:px-4">
                                    <input type="file" name="image" id="image" class="sr-only" />
                                    <span>
                                        <svg class="fill-current" width="14" height="14" viewBox="0 0 14 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.76464 1.42638C4.87283 1.2641 5.05496 1.16663 5.25 1.16663H8.75C8.94504 1.16663 9.12717 1.2641 9.23536 1.42638L10.2289 2.91663H12.25C12.7141 2.91663 13.1592 3.101 13.4874 3.42919C13.8156 3.75738 14 4.2025 14 4.66663V11.0833C14 11.5474 13.8156 11.9925 13.4874 12.3207C13.1592 12.6489 12.7141 12.8333 12.25 12.8333H1.75C1.28587 12.8333 0.840752 12.6489 0.512563 12.3207C0.184375 11.9925 0 11.5474 0 11.0833V4.66663C0 4.2025 0.184374 3.75738 0.512563 3.42919C0.840752 3.101 1.28587 2.91663 1.75 2.91663H3.77114L4.76464 1.42638ZM5.56219 2.33329L4.5687 3.82353C4.46051 3.98582 4.27837 4.08329 4.08333 4.08329H1.75C1.59529 4.08329 1.44692 4.14475 1.33752 4.25415C1.22812 4.36354 1.16667 4.51192 1.16667 4.66663V11.0833C1.16667 11.238 1.22812 11.3864 1.33752 11.4958C1.44692 11.6052 1.59529 11.6666 1.75 11.6666H12.25C12.4047 11.6666 12.5531 11.6052 12.6625 11.4958C12.7719 11.3864 12.8333 11.238 12.8333 11.0833V4.66663C12.8333 4.51192 12.7719 4.36354 12.6625 4.25415C12.5531 4.14475 12.4047 4.08329 12.25 4.08329H9.91667C9.72163 4.08329 9.53949 3.98582 9.4313 3.82353L8.43781 2.33329H5.56219Z"
                                                fill="white"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.99992 5.83329C6.03342 5.83329 5.24992 6.61679 5.24992 7.58329C5.24992 8.54979 6.03342 9.33329 6.99992 9.33329C7.96642 9.33329 8.74992 8.54979 8.74992 7.58329C8.74992 6.61679 7.96642 5.83329 6.99992 5.83329ZM4.08325 7.58329C4.08325 5.97246 5.38909 4.66663 6.99992 4.66663C8.61075 4.66663 9.91659 5.97246 9.91659 7.58329C9.91659 9.19412 8.61075 10.5 6.99992 10.5C5.38909 10.5 4.08325 9.19412 4.08325 7.58329Z"
                                                fill="white"></path>
                                        </svg>
                                    </span>
                                    <span>Edit</span>
                                </label>
                            </form>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert-danger alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="px-4 pb-6 text-center lg:pb-8 xl:pb-11.5">
                        <div
                            class="relative z-30 mx-auto -mt-22 h-30 w-full max-w-30 rounded-full bg-white/20 p-1 backdrop-blur sm:h-44 sm:max-w-44 sm:p-3">
                            <div class="relative drop-shadow-2">
                                <img src="{{ asset('images/logo/logo_sdmku_compress.png') }}" alt="profile">

                            </div>
                        </div>
                        <div class="mt-4">
                            <h3 class="mb-1.5 text-2xl font-medium text-black dark:text-white">
                                {{ $user->name }}
                            </h3>
                            <p class="font-medium">{{ $user->email }}</p>

                            <div class="divider"></div>

                            <div class="mx-auto max-w-180">
                                <h4 class="font-medium text-black dark:text-white">
                                    About This Web
                                </h4>
                                <p class="mt-4.5 text-sm font-normal">
                                    Web ini dibangun menggunakan <a class="font-bold" target="_blank"
                                        href="https://laravel.com/docs/9.x/">Laravel
                                        9.19</a> dan <a class="font-bold" target="_blank" href="https://jquery.com/">jQuery
                                        3.7.1</a>.
                                    Pada
                                    <b>Landing Page</b> dibuat
                                    dengan <a class="font-bold" target="_blank"
                                        href="https://tailwindcss.com/docs/installation">Tailwind CSS 3.4.1</a>
                                    bersama dengan <a class="font-bold" target="_blank" href="https://daisyui.com/">DaisyUI
                                        4.7.2</a>.
                                    Pada halaman
                                    <b>Admin</b>,
                                    menggunakan
                                    dashboard template dari <a class="font-bold" target="_blank"
                                        href="https://tailadmin.com/">TailAdmin</a>, yang berlisensi <b>MIT</b>.
                                </p>
                            </div>

                            <div class="divider"></div>

                            <div class="">
                                <h4 class="mb-3.5 font-medium text-black dark:text-white">
                                    Developer Contact
                                </h4>
                                <div class="flex items-center justify-center gap-1">
                                    <a href="https://www.instagram.com/kkn12_sdmku?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                        target="_blank" target="_blank"
                                        class="cursor-pointer rounded-full bg-gradient-to-tr p-2 hover:from-[#FF7806] hover:to-[#A20AD0] hover:text-slate-100">
                                        @include('partials.svg._instagram-svg')
                                    </a> <span class="font-poppins">@kkn12_sdmku</span>
                                </div>
                            </div>

                            <div class="divider"></div>

                            <div class="">
                                <h4 class="mb-3.5 font-medium text-black dark:text-white">
                                    Hosting Support
                                </h4>
                                <div class="flex items-center justify-center gap-1">
                                    <a href="https://wa.me/6282123455823" target="_blank" target="_blank"
                                        class="cursor-pointer rounded-full p-2 hover:bg-green-500 hover:text-slate-100">
                                        @include('partials.svg._whatsapp-svg')
                                    </a> <span class="font-poppins">6282123455823 (Akun Tech)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ====== Profile Section End -->
                </div>
            </div>
    </main>
@endsection

@section('after-script')
    <script type="module">
        $(document).ready(function() {
            $('#image').change(function() {
                $(this).closest('form').submit(); // Memicu submit form saat file dipilih
            });
        });
    </script>
@endsection
