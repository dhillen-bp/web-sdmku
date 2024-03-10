<footer class="footer justify-between bg-slate-950 px-6 py-6 text-white lg:grid-cols-2 lg:px-16 lg:py-10">
    <aside class="col-span-1 grid items-center pt-4 lg:pt-0">
        <div class="flex items-center gap-2 lg:gap-5">
            <img src="{{ asset('images/logo/logo_sdmku_compress.png') }}" alt="School Logo"
                class="w-2h-20 mr-3 h-20 lg:h-24 lg:w-24">
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
            <a class="link-hover link block">Profil Sekolah</a>
            <a class="link-hover link block">Visi & Misi</a>
            <a class="link-hover link block">Guru & Staf</a>
        </nav>
        <nav class="col-span-1 block space-y-2 py-2">
            <h6 class="footer-title">Kegiatan</h6>
            <a class="link-hover link block">Kegiatan Ekstrakurikuler</a>
            <a class="link-hover link block">Kegiatan Pendukung</a>
        </nav>
        <nav class="col-span-1 block space-y-2 py-2">
            <h6 class="footer-title">Menu Lain</h6>
            <a class="link-hover link block">Prestasi</a>
            <a class="link-hover link block">Berita</a>
            <a class="link-hover link block">Galeri</a>
            <a class="link-hover link block">PPDB</a>
        </nav>
        <nav class="py-2">
            <h6 class="footer-title">Media Sosial</h6>
            <div class="flex gap-4">
                <a class="cursor-pointer rounded-full bg-gradient-to-tr p-2 hover:from-[#FF7806] hover:to-[#A20AD0]">
                    @include('partials.svg._instagram-svg')
                </a>

                <a class="cursor-pointer rounded-full p-2 hover:bg-green-500">
                    @include('partials.svg._whatsapp-svg')
                </a>

                <a class="cursor-pointer rounded-full p-2 hover:bg-red-500">
                    @include('partials.svg._youtube-svg')
                </a>
            </div>
        </nav>
    </div>
</footer>
