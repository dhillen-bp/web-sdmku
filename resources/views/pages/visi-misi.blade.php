@extends('layouts.app')

@section('body')
    <section class="bg-base-200">

        <div class="h-24 bg-cover bg-no-repeat py-24 opacity-90"
            style="background-image: url({{ asset('images/shapes/low-poly-grid-haikei.svg') }});">
            <h1 class="mt-4 text-center text-3xl font-bold text-slate-100">Visi & Misi</h1>
        </div>
        <div class="px-6 py-16 lg:px-16">
            <div class="flex flex-col gap-6 lg:flex-row lg:gap-16">
                <div class="card w-full bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title justify-center">Visi</h2>
                        <p>Mewujudkan siswa-siswi yang Berakhlak Mulia, Kreatif, Cerdas, Cinta terhadap Lingkungan dan
                            Berwawasan Global</p>
                    </div>
                </div>
                <div class="card w-full bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title justify-center">Misi</h2>
                        <ol class="list-decimal py-1">
                            <li>Mewujudkan/menciptakan siswa yang taat beribadah.</li>
                            <li>Membentuk sikap dan perilaku yang baik.</li>
                            <li>Mewujudkan siswa/i yang disiplin.</li>
                            <li>Menciptakan suasana Pembelajaran yang aktif, inovatif, kreatif, efektif, menyenangkan,
                                gembira dan berbobot</li>
                            <li>Mewujudkan siswa yang berprestasi.</li>
                            <li>Mewujudkan suasana kekeluargaan antar warga sekolah</li>
                            <li>Mewujudkan sekolah yang bersih</li>
                            <li>Mengembangkan bidang Ilmu Pengetahuan dan Teknologi berdasarkan minat, bakat dan potensi
                                peserta didik</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
