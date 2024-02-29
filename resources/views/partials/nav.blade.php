<nav class="navbar fixed left-0 right-0 top-0 z-50 bg-primary bg-opacity-30 px-6 shadow-sm lg:px-16" id="header">
    <div class="flex-1">
        <a class="inline-flex cursor-pointer text-xl font-bold text-slate-100">
            <img src="{{ asset('images/company.png') }}" alt="School Logo" class="mr-3 h-7 w-7">
            SD MKU
        </a>
    </div>
    <div class="flex-none">
        {{-- MOBILE NAV --}}
        <div class="dropdown-end dropdown-bottom dropdown lg:hidden">
            <label class="swap-rotate btn btn-circle swap btn-sm">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" />

                <!-- hamburger icon -->
                <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 512 512">
                    <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                </svg>

                <!-- close icon -->
                <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 512 512">
                    <polygon
                        points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                </svg>

            </label>

            <ul
                class="-x-8 menu dropdown-content relative right-0 z-[1] w-screen translate-x-6 bg-primary text-slate-100">
                <li><a href="/home">Home</a></li>
                <li>
                    <details id="profileDropdown">
                        <summary>
                            Profile
                        </summary>
                        <ul class="p-2">
                            <li><a href="/profile/visi-misi">Visi & Misi</a></li>
                            <li><a href="/profile/tentang-kami">Tentang Kami</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details id="akademisDropdown">
                        <summary>
                            Akademis
                        </summary>
                        <ul class="p-2">
                            <li><a href="/akademis/guru-staf">Guru & Staf</a></li>
                            <li><a href="/akademis/prestasi">Prestasi</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details id="nonAkademisDropdown">
                        <summary>
                            Non Akademis
                        </summary>
                        <ul class="p-2">
                            <li><a href="/non-akademis/berita">Berita</a></li>
                            <li><a href="/non-akademis/fasilitas">Fasilitas</a></li>
                            <li><a href="/non-akademis/ekstrakurikuler">Ekstrakurikuler</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>

        {{-- DESKTOP NAV --}}
        <ul class="menu menu-horizontal hidden px-1 lg:inline-flex">
            <li><a href="/home" class="text-slate-100">Home</a></li>
            <li>
                <details id="profileDropdown">
                    <summary class="text-slate-100">
                        Profile
                    </summary>
                    <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                        <li><a href="/profile/visi-misi">Visi & Misi</a></li>
                        <li><a href="/profile/tentang-kami">Tentang Kami</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details id="akademisDropdown">
                    <summary class="text-slate-100">
                        Akademis
                    </summary>
                    <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                        <li><a href="/akademis/guru-staf">Guru & Staf</a></li>
                        <li><a href="/akademis/prestasi">Prestasi</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details id="nonAkademisDropdown">
                    <summary class="text-slate-100">
                        Non Akademis
                    </summary>
                    <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                        <li><a href="/non-akademis/berita">Berita</a></li>
                        <li><a href="/non-akademis/fasilitas">Fasilitas</a></li>
                        <li><a href="/non-akademis/ekstrakurikuler">Ekstrakurikuler</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</nav>
