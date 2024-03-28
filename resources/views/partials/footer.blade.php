<footer class="footer justify-between bg-slate-950 px-6 py-6 text-white lg:grid-cols-2 lg:px-16 lg:py-10">
    <aside class="col-span-1 grid items-center pt-4 lg:pt-0">
        <div class="flex items-center gap-2 lg:gap-5">
            <img src="{{ asset('images/logo/logo_sdmku_compress.png') }}" alt="School Logo"
                class="w-2h-20 mr-3 h-20 lg:h-24 lg:w-24">
            <div class="space-y-2">
                <h2 class="font-lobster text-lg font-bold lg:text-2xl">SD Muhammadiyah Klaten Utara</h2>
                <div class="flex flex-[4] items-center">
                    <span class="material-icons flex-[0.3] text-lg">call</span>
                    <p class="flex-[3.7] gap-2 text-xs md:text-sm">{{ $footer->no_telp }}</p>
                </div>
                <div class="flex flex-[4] items-center gap-2">
                    <span class="flex-[0.2]">@include('partials.svg._whatsapp-svg', ['width' => 18, 'height' => 18])</span>
                    <div>
                        <a class="text-xs hover:underline md:text-sm"
                            href="https://wa.me/{{ str_replace('+', '', $footer->no_wa) }}
                            ">{{ $footer->no_wa }}
                        </a>
                        <span class="text-xs">{{ $footer->wa_jam_kerja }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 space-y-2">
            <h6 class="font-bold uppercase opacity-60">Alamat</h6>
            <div class="flex gap-3">
                <span class="text-wrap flex-[0.5] font-semibold lg:flex-[0.40]">Kampus 1:</span>
                <p class="flex-[2.5] lg:flex-[2.60]">{{ $footer->alamat_kampus_1 }}</p>
            </div>
            <div class="flex gap-3">
                <span class="text-wrap flex-[0.5] font-semibold lg:flex-[0.40]">Kampus 2:</span>
                <p class="flex-[2.5] lg:flex-[2.60]">{{ $footer->alamat_kampus_2 }}</p>
            </div>
        </div>
    </aside>
    <div class="col-span-1 grid w-full grid-cols-2 justify-between gap-2 lg:flex lg:justify-around">
        <nav class="col-span-1 block space-y-2 py-2">
            <h6 class="footer-title">Profil</h6>
            <a href="/profil/sekolah" class="link-hover link block">Profil Sekolah</a>
            <a href="/profil/visi-misi" class="link-hover link block">Visi & Misi</a>
            <a href="/profil/guru-staf" class="link-hover link block">Guru & Staf</a>
        </nav>
        <nav class="col-span-1 block space-y-2 py-2">
            <h6 class="footer-title">Kegiatan</h6>
            <a href="/kegiatan/ekstrakurikuler" class="link-hover link block">Ekstrakurikuler</a>
            <a href="/kegiatan/event" class="link-hover link block">Event Terbaru</a>
            <a href="/kegiatan/kbm" class="link-hover link block">KBM</a>
        </nav>
        <nav class="col-span-1 block space-y-2 py-2">
            <h6 class="footer-title">Menu Lain</h6>
            <a href="/prestasi" class="link-hover link block">Prestasi</a>
            <a href="/berita" class="link-hover link block">Berita</a>
            <a href="/galeri" class="link-hover link block">Galeri</a>
            <a href="/ppdb" class="link-hover link block">PPDB</a>
        </nav>
        <nav class="py-2">
            <h6 class="footer-title">Media Sosial</h6>
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
                <a href="{{ $footer->social_facebook }}" target="_blank"
                    class="cursor-pointer rounded-full p-2 hover:bg-blue-500">
                    @include('partials.svg._facebook-svg')
                </a>
                <a href="{{ $footer->social_instagram }}" target="_blank"
                    class="cursor-pointer rounded-full bg-gradient-to-tr p-2 hover:from-[#FF7806] hover:to-[#A20AD0]">
                    @include('partials.svg._instagram-svg')
                </a>

                <a href="{{ $footer->social_tiktok }}" target="_blank"
                    class="cursor-pointer rounded-full p-2 text-white hover:bg-black-2">
                    @include('partials.svg._tiktok-svg')
                </a>

                <a href="{{ $footer->social_youtube }}" target="_blank"
                    class="cursor-pointer rounded-full p-2 hover:bg-red-500">
                    @include('partials.svg._youtube-svg')
                </a>
            </div>
        </nav>
    </div>
</footer>
<hr>
<footer class="flex items-center justify-center space-x-2 bg-slate-950 py-3 text-xs text-slate-400 lg:py-4 lg:text-sm">
    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
        clip-rule="evenodd" class="hidden fill-current lg:block">
        <path
            d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
        </path>
    </svg>
    <p>© Made with ❤️ by <a href="https://www.instagram.com/kkn12_sdmku" target="_blank"
            class="hover:underline">Kelompok 12 KKN STMIK AMIKOM SURAKARTA</a></p>
</footer>
