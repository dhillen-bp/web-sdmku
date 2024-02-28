<nav class="navbar fixed left-0 right-0 top-0 z-50 bg-primary bg-opacity-30 px-6 shadow-sm lg:px-16" id="header">
    <div class="flex-1">
        <a class="inline-flex cursor-pointer text-xl font-bold">
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <ul class="menu dropdown-content z-[1] bg-slate-100 px-1">
                <li><a href="/home">Home</a></li>
                <li>
                    <details id="profileDropdown">
                        <summary>
                            Profile
                        </summary>
                        <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                            <li><a href="/visi-misi">Visi & Misi</a></li>
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
            <li><a href="/home" class="text-slate-100">Home</a></li>
            <li>
                <details id="profileDropdown">
                    <summary class="text-slate-100">
                        Profile
                    </summary>
                    <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                        <li><a href="/visi-misi">Visi & Misi</a></li>
                        <li><a>Tentang Kami</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details id="akademisDropdown">
                    <summary class="text-slate-100">
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
                    <summary class="text-slate-100">
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
</nav>
