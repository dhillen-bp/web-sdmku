<footer class="footer justify-between bg-slate-950 px-6 py-6 text-white lg:grid-cols-2 lg:px-16 lg:py-10">
    <aside class="col-span-1 grid items-center pt-4 lg:pt-0">
        <div class="flex items-center gap-2 lg:gap-5">
            <img src="{{ asset('images/logo/logo_sdmku_compress.png') }}" alt="School Logo"
                class="w-2h-20 mr-3 h-20 lg:h-24 lg:w-24">
            <div class="space-y-2">
                <h2 class="font-lobster text-lg font-bold lg:text-2xl">SD Muhammadiyah Klaten Utara</h2>
                <div class="flex flex-[4] items-center">
                    <span class="material-icons flex-[0.3] text-lg">call</span>
                    <p class="flex-[3.7] gap-2 text-xs md:text-sm">0272326984</p>
                </div>
                <div class="flex flex-[4] items-center gap-2">
                    <span class="flex-[0.2]">@include('partials.svg._whatsapp-svg', ['width' => 18, 'height' => 18])</span>
                    <div>
                        <a class="text-xs hover:underline md:text-sm" href="https://wa.me/6281326915512">+6281326915512
                        </a>
                        <span class="text-xs">(Jam Kerja Senin-Jum'at Pukul 07.00 - 14.00)</span>
                    </div>
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
                <span class="text-wrap flex-[0.5] font-semibold lg:flex-[0.40]">Kampus 2:</span>
                <p class="flex-[2.5] lg:flex-[2.60]">Jl. Sersan Sadikin No.4, RW.09, Tirtomulyo,
                    Gergunung, Kec.
                    Klaten Utara, Kabupaten Klaten, Jawa Tengah 57434</p>
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
                <a href="https://www.facebook.com/pages/SD-Muhammadiyah-Klaten-Utara/145005322367547?mibextid=rS40aB7S9Ucbxw6v"
                    target="_blank" class="cursor-pointer rounded-full p-2 hover:bg-blue-500">
                    @include('partials.svg._facebook-svg')
                </a>
                <a href="https://www.instagram.com/sdmuhklatenutara/" target="_blank"
                    class="cursor-pointer rounded-full bg-gradient-to-tr p-2 hover:from-[#FF7806] hover:to-[#A20AD0]">
                    @include('partials.svg._instagram-svg')
                </a>

                <a href="https://www.tiktok.com/@sdmuhklatenutara?_t=8kfWcypYH6f&_r=1" target="_blank"
                    class="cursor-pointer rounded-full p-2 text-white hover:bg-black-2">
                    @include('partials.svg._tiktok-svg')
                </a>

                <a href="https://youtube.com/@sdmuhammadiyahklatenutara7131?si=24ktqPuVwajWWfBI" target="_blank"
                    class="cursor-pointer rounded-full p-2 hover:bg-red-500">
                    @include('partials.svg._youtube-svg')
                </a>
            </div>
        </nav>
    </div>
</footer>
