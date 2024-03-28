<nav class="navbar fixed left-0 right-0 top-0 z-50 bg-primary bg-opacity-30 px-6 shadow-sm lg:px-16" id="header">
    <div class="flex-1 lg:flex-[0.5]">
        <a class="inline-flex cursor-pointer items-center text-xl font-bold text-slate-100">
            <img src="{{ asset('images/logo/logo_sdmku_compress.png') }}" alt="School Logo" class="mr-3 h-8 w-8">
            <p class="text-nowrap font-lobster">SD Muhammadiyah Klaten Utara</p>
        </a>
    </div>
    <div class="items-end justify-end lg:flex-[1.5]">
        {{-- MOBILE NAV --}}
        <div class="dropdown-end dropdown-bottom dropdown lg:hidden">
            <label for="toggleMenu" class="swap-rotate btn btn-circle swap btn-sm">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" id="toggleMenu" />

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

            <ul class="-x-8 menu dropdown-content relative right-0 z-[999] w-screen translate-x-6 bg-primary p-6 text-slate-100 sm:translate-x-8"
                id="menu">
                <li><a href="/home" class="{{ Request::path() == 'home' ? 'active' : '' }}">Home</a></li>
                <li>
                    <details id="profileDropdown" {{ Str::startsWith(Request::path(), 'profil/') ? 'open' : '' }}>
                        <summary class="text-slate-100">
                            Profil
                        </summary>
                        <ul class="p-2">
                            <li><a href="/profil/sekolah"
                                    class="{{ Request::path() == 'profil/sekolah' ? 'active' : '' }}">Profil Sekolah</a>
                            </li>
                            <li><a href="/profil/visi-misi"
                                    class="{{ Request::path() == 'profil/visi-misi' ? 'active' : '' }}">Visi & Misi</a>
                            </li>
                            <li><a href="/profil/guru-staf"
                                    class="{{ Request::path() == 'profil/guru-staf' ? 'active' : '' }}">Guru & Staf</a>
                            </li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details id="kegiatanDropdown" {{ Str::startsWith(Request::path(), 'kegiatan/') ? 'open' : '' }}>
                        <summary class="text-slate-100">
                            Kegiatan
                        </summary>
                        <ul class="p-2">
                            <li><a href="/kegiatan/ekstrakurikuler"
                                    class="{{ Request::path() == 'kegiatan/ekstrakurikuler' ? 'active' : '' }}">
                                    Ekstrakurikuler</a>
                            </li>
                            <li><a href="/kegiatan/event"
                                    class="{{ Request::path() == 'kegiatan/event' ? 'active' : '' }}">
                                    Event Terbaru</a></li>
                            <li><a href="/kegiatan/kbm" class="{{ Request::path() == 'kegiatan/kbm' ? 'active' : '' }}">
                                    KBM</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="/prestasi"
                        class="{{ Request::path() == 'prestasi' ? 'active' : '' }} text-slate-100">Prestasi</a></li>
                <li><a href="/berita" class="{{ Request::path() == 'berita' ? 'active' : '' }} text-slate-100">Berita &
                        Artikel</a>
                </li>
                <li><a href="/ppdb"
                        class="{{ Request::path() == 'ppdb' ? 'active' : '' }} font-bold text-slate-100">PPDB</a>
                </li>
                <li><a href="/admin" class="{{ Request::path() == 'admin' ? 'active' : '' }} text-slate-100">Login
                        Admin</a>
                </li>
            </ul>
        </div>

        {{-- DESKTOP NAV --}}
        <ul class="menu menu-horizontal hidden px-1 lg:inline-flex">
            <li><a href="/home" class="{{ Request::path() == 'home' ? 'active' : '' }} text-slate-100">Home</a></li>
            <li>
                <details id="profileDropdown" {{ Str::startsWith(Request::path(), 'profil/') ? 'open' : '' }}>
                    <summary class="text-slate-100">
                        Profil
                    </summary>
                    <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                        <li><a href="/profil/sekolah"
                                class="{{ Request::path() == 'profil/sekolah' ? 'active' : '' }}">Profil Sekolah</a>
                        </li>
                        <li><a href="/profil/visi-misi"
                                class="{{ Request::path() == 'profil/visi-misi' ? 'active' : '' }}">Visi & Misi</a>
                        </li>
                        <li><a href="/profil/guru-staf"
                                class="{{ Request::path() == 'profil/guru-staf' ? 'active' : '' }}">Guru &
                                Staf</a>
                        </li>
                    </ul>
                </details>
            </li>
            <li>
                <details id="kegiatanDropdown" {{ Str::startsWith(Request::path(), 'kegiatan/') ? 'open' : '' }}>
                    <summary class="text-slate-100">
                        Kegiatan
                    </summary>
                    <ul class="z-[2] w-max rounded-t-none bg-slate-100 p-2">
                        <li><a href="/kegiatan/ekstrakurikuler"
                                class="{{ Request::path() == 'kegiatan/ekstrakurikuler' ? 'active' : '' }}">
                                Ekstrakurikuler</a>
                        </li>
                        <li><a href="/kegiatan/event"
                                class="{{ Request::path() == 'kegiatan/event' ? 'active' : '' }}">
                                Event Terbaru</a></li>
                        <li><a href="/kegiatan/kbm" class="{{ Request::path() == 'kegiatan/kbm' ? 'active' : '' }}">
                                KBM</a></li>
                    </ul>
                </details>
            </li>
            <li><a href="/prestasi"
                    class="{{ Request::path() == 'prestasi' ? 'active' : '' }} text-slate-100">Prestasi</a></li>
            <li><a href="/berita" class="{{ Request::path() == 'berita' ? 'active' : '' }} text-slate-100">Berita &
                    Artikel</a>
            </li>
            <li><a href="/ppdb"
                    class="{{ Request::path() == 'ppdb' ? 'active' : '' }} font-bold text-slate-100">PPDB</a></li>
            <li><a href="/admin" class="{{ Request::path() == 'admin' ? 'active' : '' }} text-slate-100">Login
                    Admin</a>
            </li>
        </ul>
    </div>
</nav>
