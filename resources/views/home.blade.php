<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base-200">

    {{-- HEADER & HERO --}}
    <div class="relative md:pb-16">
        <div class="carousel relative h-[300px] w-full object-contain md:h-[460px]">
            <div id="slide1" class="carousel-item relative w-full">
                <img src="https://source.unsplash.com/brown-wooden-table-and-chairs-PDRFeeDniCk" class="w-full" />
                <div
                    class="absolute left-6 right-6 top-1/2 flex -translate-y-1/2 transform justify-between lg:left-16 lg:right-16">
                    <a href="#slide3" class="btn btn-circle">❮</a>
                    <a href="#slide2" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide2" class="carousel-item relative w-full">
                <img src="https://source.unsplash.com/man-and-woman-sitting-on-chairs-zFSo6bnZJTw" class="w-full" />
                <div
                    class="absolute left-6 right-6 top-1/2 flex -translate-y-1/2 transform justify-between lg:left-16 lg:right-16">
                    <a href="#slide1" class="btn btn-circle">❮</a>
                    <a href="#slide3" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide3" class="carousel-item relative w-full">
                <img src="https://source.unsplash.com/group-of-fresh-graduates-students-throwing-their-academic-hat-in-the-air-8CqDvPuo_kI"
                    class="w-full" />
                <div
                    class="absolute left-6 right-6 top-1/2 flex -translate-y-1/2 transform justify-between lg:left-16 lg:right-16">
                    <a href="#slide2" class="btn btn-circle">❮</a>
                    <a href="#slide1" class="btn btn-circle">❯</a>
                </div>
            </div>
        </div>

        <div class="navbar fixed left-0 right-0 top-0 z-50 bg-primary bg-opacity-30 px-6 shadow-sm lg:px-16"
            id="header">
            <div class="flex-1">
                <a class="inline-flex cursor-pointer text-xl">
                    <img src="{{ asset('images/company.png') }}" alt="School Logo" class="mr-3 h-7 w-7">
                    SD MUHKU
                </a>
            </div>
            <div class="flex-none">
                {{-- MOBILE NAV --}}
                <div class="dropdown-end dropdown-bottom dropdown lg:hidden">
                    <button class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <ul class="menu dropdown-content z-[1] bg-slate-100 px-1">
                        <li><a>Home</a></li>
                        <li>
                            <details id="profileDropdown">
                                <summary>
                                    Profile
                                </summary>
                                <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                                    <li><a>Visi & Misi</a></li>
                                    <li><a>Tentang Kami</a></li>
                                </ul>
                            </details>
                        </li>
                        <li>
                            <details id="akademisDropdown">
                                <summary>
                                    Akademis
                                </summary>
                                <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                                    <li><a>Guru & Staf</a></li>
                                    <li><a>Prestasi</a></li>
                                </ul>
                            </details>
                        </li>
                        <li>
                            <details id="nonAkademisDropdown">
                                <summary>
                                    Non Akademis
                                </summary>
                                <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                                    <li><a>Berita</a></li>
                                    <li><a>Fasilitas</a></li>
                                    <li><a>Ekstrakurikuler</a></li>
                                </ul>
                            </details>
                        </li>
                    </ul>
                </div>

                {{-- DESKTOP NAV --}}
                <ul class="menu menu-horizontal hidden px-1 lg:inline-flex">
                    <li><a>Home</a></li>
                    <li>
                        <details id="profileDropdown">
                            <summary>
                                Profile
                            </summary>
                            <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                                <li><a>Visi & Misi</a></li>
                                <li><a>Tentang Kami</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details id="akademisDropdown">
                            <summary>
                                Akademis
                            </summary>
                            <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                                <li><a>Guru & Staf</a></li>
                                <li><a>Prestasi</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details id="nonAkademisDropdown">
                            <summary>
                                Non Akademis
                            </summary>
                            <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                                <li><a>Berita</a></li>
                                <li><a>Fasilitas</a></li>
                                <li><a>Ekstrakurikuler</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- WELCOME SECTION --}}
    <div class="bg-base-200 py-16 lg:px-16">
        <div class="hero-content flex-col lg:flex-row-reverse lg:px-0">
            <img src="https://source.unsplash.com/white-and-red-concrete-building-ZPkG0EdWQa8"
                class="h-80 max-w-sm rounded-lg shadow-2xl lg:w-1/3" />
            <div class="px-6 lg:w-2/3 lg:px-0">
                <h1 class="text-5xl font-semibold">Selamat Datang di SD Muhammadiyah Klaten Utara!</h1>
                <p class="py-6">SD Muhammadiyah Klaten Utara adalah sekolah unggulan dengan berbagai prestasi. Kami
                    memiliki sistem pembelajaran profesional, religius dan ceria dilengkapi fasilitas yang memadai.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>

    {{-- NEWS SECTION --}}
    <div class="px-6 py-16 lg:px-16">
        <div class="pb-8 text-5xl font-bold">Berita Terbaru</div>
        <div class="grid gap-8 md:grid-cols-2">
            <div class="card card-side h-[200px] bg-base-100 shadow-xl">
                <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                        alt="Movie" class="w-[250px] object-contain" />
                </figure>
                <div class="card-body w-2/3 text-sm">
                    <h2 class="card-title">New movie is released!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, earum!...</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Baca</button>
                    </div>
                </div>
            </div>
            <div class="card card-side h-[200px] bg-base-100 shadow-xl">
                <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                        alt="Movie" class="w-[250px] object-contain" />
                </figure>
                <div class="card-body w-2/3 text-sm">
                    <h2 class="card-title">New movie is released!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, earum!...</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Baca</button>
                    </div>
                </div>
            </div>
            <div class="card card-side h-[200px] bg-base-100 shadow-xl">
                <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                        alt="Movie" class="w-[250px] object-contain" />
                </figure>
                <div class="card-body w-2/3 text-sm">
                    <h2 class="card-title">New movie is released!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, earum!...</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Baca</button>
                    </div>
                </div>
            </div>
            <div class="card card-side h-[200px] bg-base-100 shadow-xl">
                <figure><img src="https://source.unsplash.com/black-wooden-writing-desk-chair-inside-room-IXTvnOOSTyU"
                        alt="Movie" class="w-[250px] object-contain" />
                </figure>
                <div class="card-body w-2/3 text-sm">
                    <h2 class="card-title">New movie is released!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, earum!...</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Baca</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- FOOTER --}}
    <footer class="footer justify-between bg-slate-950 px-6 py-6 text-white md:mt-16 lg:grid-cols-2 lg:px-16 lg:py-10">
        <aside class="col-span-1 grid items-center pt-4 lg:pt-0">
            <div class="flex items-center gap-5">
                <img src="{{ asset('images/company.png') }}" alt="School Logo" class="mr-3 h-24 w-24">
                <div class="space-y-2">
                    <h2 class="text-lg font-bold lg:text-2xl">SD Muhammadiyah Klaten Utara</h2>
                    <div class="flex flex-[4] items-center">
                        <span class="material-icons flex-[0.4] text-lg">call</span>
                        <p class="flex-[3.6] text-xs md:text-base">0272326984</p>
                    </div>
                    <div class="flex flex-[4] items-center">
                        <span class="material-icons flex-[0.4] text-lg">email</span>
                        <p class="flex-[3.6] text-xs md:text-base">sdmuhammadiyahklatenutara@yahoo.com</p>
                    </div>
                </div>
            </div>
            <div class="mt-6 space-y-2">
                <h6 class="font-bold uppercase opacity-60">Alamat</h6>
                <div class="flex gap-3">
                    <span class="text-wrap flex-[0.5] font-semibold lg:flex-[0.40]">Kampus 1:</span>
                    <p class="flex-[2.5] lg:flex-[2.60]">JL. Kopral Sudibyo, RT. 1 RW. XI, Perak
                        Gunungan,
                        Barenglor,
                        Gunungan, Bareng
                        Lor, Kec. Klaten Utara, Kabupaten Klaten, Jawa Tengah 57438</p>
                </div>
                <div class="flex gap-3">
                    <span class="text-wrap flex-[0.5] font-semibold lg:flex-[0.40]">Kampus 2</span>
                    <p class="flex-[2.5] lg:flex-[2.60]">Jl. Sersan Sadikin No.4, RW.09, Tirtomulyo,
                        Gergunung, Kec.
                        Klaten Utara, Kabupaten Klaten, Jawa Tengah 57434</p>
                </div>
            </div>
        </aside>
        <div class="col-span-1 grid w-full grid-cols-2 justify-between gap-2 lg:flex lg:justify-around">
            <nav class="col-span-1 block space-y-2 py-2">
                <h6 class="footer-title">Profile</h6>
                <a class="link-hover link block">Visi & Misi</a>
                <a class="link-hover link block">Tentang Kami</a>
            </nav>
            <nav class="col-span-1 block space-y-2 py-2">
                <h6 class="footer-title">Akademis</h6>
                <a class="link-hover link block">Guru & Staf</a>
                <a class="link-hover link block">Prestasi</a>
            </nav>
            <nav class="col-span-1 block space-y-2 py-2">
                <h6 class="footer-title">Non Akademis</h6>
                <a class="link-hover link block">Fasilitas</a>
                <a class="link-hover link block">Ekstrakurikuler</a>
            </nav>
            <nav class="py-2">
                <h6 class="footer-title">Social</h6>
                <div class="flex gap-4">
                    <a
                        class="cursor-pointer rounded-full bg-gradient-to-tr p-2 hover:from-[#FF7806] hover:to-[#A20AD0]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>

                    <a class="cursor-pointer rounded-full p-2 hover:bg-green-500"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                    </a>

                    <a class="cursor-pointer rounded-full p-2 hover:bg-red-500"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                            </path>
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </footer>


    <script type="module">
        // Fungsi untuk menutup details yang lain saat satu details dibuka
        function toggleDetails(detailsId) {
            $('details').each(function() {
                if (this.id === detailsId) {
                    // Toggle atribut 'open' pada details yang diklik
                    $('details').attr('open')
                } else {
                    // Tutup yang lain
                    $(this).removeAttr('open');
                }
            });
        }

        // Menangani klik pada setiap summary
        $('details summary').on('click', function() {
            var parentId = $(this).parent().prop('id');

            // Periksa apakah details yang diklik sudah terbuka
            if ($(this).parent().prop('open')) {
                // Jika sudah terbuka, tutup details tersebut
                $(this).removeAttr('open');
            } else {
                // Jika belum terbuka, toggle semua details dan buka yang diklik
                toggleDetails(parentId);
            }
        });


        // Menangani Scroll pada Header Navbar
        $(document).ready(function() {
            // Mendeteksi pergerakan scroll
            $(window).scroll(function() {
                // Hitung posisi scroll dalam piksel
                var scrollPosition = $(window).scrollTop();

                $('#header').removeClass('bg-opacity-10');
                $('#header').addClass('bg-opacity-95');

                if (scrollPosition === 0) {
                    $('#header').removeClass('bg-opacity-95');
                    $('#header').addClass('bg-opacity-10');
                }
            });
        });
    </script>

</body>

</html>
