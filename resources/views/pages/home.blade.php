@extends('layouts.app')

@section('content')
@php
$slides = [
    ['/images/hero1.jpeg', 'Berakhlak · Kompeten · Berprestasi', 'Selamat Datang di', 'SMK PGRI 31 LEGOK', 'Belajar, Berkarya, dan Berprestasi Bersama SMK PGRI 31 Legok'],
    ['/images/hero2.jpg', null, 'Raih Masa Depan', 'Bersama Tisata', 'Program keahlian terbaik untuk mempersiapkan karir impianmu'],
    ['/images/hero3.jpg', null, 'Fasilitas Modern', 'Pembelajaran Unggulan', 'Laboratorium lengkap dan tenaga pendidik berpengalaman']
];
$keunggulan = [
    ['🎓', 'Kompeten', 'Menguasai keterampilan sesuai bidang keahlian dan kebutuhan dunia kerja.'],
    ['💡', 'Berkarakter', 'Membentuk siswa disiplin, jujur, dan bertanggung jawab.'],
    ['🏫', 'Fasilitas Lengkap', 'Laboratorium dan sarana pembelajaran modern.'],
    ['🤝', 'Kerja Sama Industri', 'Menjalin hubungan dengan dunia industri.'],
    ['🏆', 'Berprestasi', 'Mendorong siswa meraih prestasi akademik dan non akademik.'],
    ['🌱', 'Lingkungan Nyaman', 'Suasana belajar aman dan mendukung kreativitas siswa.']
];
$stats = [['12+', 'Rombel'], ['300+', 'Siswa Aktif'], ['25+', 'Tenaga Pendidik'], ['10+', 'Mitra Industri']];
$programs = [
    ['💻', 'Teknik Komputer dan Jaringan (TKJ)', 'Mempelajari jaringan komputer, administrasi server, dan teknologi informasi.'],
    ['📊', 'Akuntansi dan Keuangan Lembaga (AKL)', 'Mempelajari pengelolaan keuangan, laporan keuangan, dan administrasi bisnis.'],
    ['📁', 'Manajemen Perkantoran dan Layanan Bisnis (MPLB)', 'Mempelajari administrasi perkantoran modern dan komunikasi bisnis.']
];
$fasilitas = [
    ['/images/lab.jpg', 'Laboratorium Komputer', 'Ruang praktik komputer dengan fasilitas pembelajaran teknologi.'],
    ['/images/kelas.jpg', 'Ruang Kelas', 'Ruang belajar nyaman untuk mendukung proses pembelajaran.'],
    ['/images/perpustakaan.jpg', 'Perpustakaan', 'Pusat sumber belajar dan literasi siswa.'],
    ['/images/lapangan.jpg','Lapangan Olahraga','Fasilitas olahraga untuk mendukung aktivitas dan kreativitas siswa.']
];
$artikel = [
    ['/images/hero1.jpg', 'Kegiatan Sekolah', 'SMK PGRI 31 LEGOK Mengadakan Kegiatan MPLS', 'Kegiatan pengenalan lingkungan sekolah bagi peserta didik baru.'],
    ['/images/hero2.jpg', 'Prestasi', 'Siswa SMK PGRI 31 LEGOK Raih Prestasi', 'Prestasi siswa menjadi motivasi untuk terus berkembang.'],
    ['/images/hero3.jpg', 'PPDB', 'Pendaftaran PPDB Tahun Ajaran Baru Dibuka', 'Informasi penerimaan peserta didik baru.']
];
@endphp

{{-- HERO SECTION --}}
<section

x-data="{

current:0,

total:{{ count($slides) }},

next(){

this.current = (this.current + 1) % this.total

}

}"

x-init="setInterval(()=>next(),5000)"

class="relative h-[440px] md:h-[440px] overflow-hidden"

>
    @foreach($slides as $s)
    <div

x-show="current == {{ $loop->index }}"

x-transition:enter="transition ease-out duration-700"

x-transition:enter-start="opacity-0"

x-transition:enter-end="opacity-100"

x-transition:leave="transition ease-in duration-700"

x-transition:leave-start="opacity-100"

x-transition:leave-end="opacity-0"

class="absolute inset-0 bg-cover bg-center bg-no-repeat"

style="background-image:url('{{ $s[0] }}');"

>
       <div class="absolute inset-0 bg-gradient-to-r from-blue-950/75 via-blue-900/50 to-gray-900/20"></div>
       <div class="relative z-10 h-full flex items-center">
            <div class="max-w-7xl mx-auto px-6 md:px-24 w-full text-white">
                @if($s[1])
<span class="inline-block px-4 py-2 rounded-full bg-green-500/20 text-green-300 text-sm">
    {{ $s[1] }}
</span>
@endif

<h1 class="text-5xl md:text-[58px] font-extrabold mt-5 leading-[1.1]">
    {{ $s[2] }}
    <br>
    <span class="text-green-400">
        {{ $s[3] }}
    </span>
</h1>

<p class="mt-5 text-base md:text-lg max-w-2xl text-white/90">
    {{ $s[4] }}
</p>
                <div class="flex gap-4 mt-6">
                    <a href="{{ url('/informasi/ppdb') }}" class="bg-green-500 px-6 py-3 rounded-lg font-semibold text-sm">Daftar PPDB</a>
                    <a href="/program-keahlian" class="border border-white px-6 py-3 rounded-lg font-semibold text-sm">Jelajahi Program Keahlian</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-3">
        @foreach($slides as $s)
        <button @click="current={{ $loop->index }}" :class="current=={{ $loop->index }} ? 'bg-green-400':'bg-white/50'" class="w-3 h-3 rounded-full"></button>
        @endforeach
    </div>
</section>

{{-- KEUNGGULAN SEKOLAH --}}
<section class="pt-14 pb-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-8">

        <div class="text-center mb-10">

            <p class="text-green-500 text-sm font-semibold uppercase">
                MENGAPA SMK PGRI 31?
            </p>

            <h2 class="text-4xl font-bold text-blue-900 mt-3">
                Keunggulan Sekolah Kami
            </h2>

            <p class="text-base text-gray-500 mt-4">
                Membekali siswa dengan kompetensi, karakter, dan pengalaman terbaik untuk masa depan.
            </p>

        </div>


        <div class="grid md:grid-cols-3 gap-8">

            @foreach($keunggulan as $k)

            <div class="bg-white rounded-xl border border-gray-100 p-8 h-[210px] shadow-sm">

                <div class="mb-6">
                <span class="text-4xl leading-none">
                    {{ $k[0] }}
                </span>
                </div>

                <h3 class="text-lg font-bold text-blue-900 mb-3">
                    {{ $k[1] }}
                </h3>

                <p class="text-sm text-gray-500 leading-relaxed">
                    {{ $k[2] }}
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>

{{-- TENTANG SEKOLAH --}}
<section class="py-16 bg-white-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div><img src="/images/sekolah.jpg" class="rounded-xl shadow-lg w-full" alt="SMK PGRI 31 LEGOK"></div>
            <div>
                <p class="text-green-600 font-semibold">Tentang Tisata</p>
                <h2 class="text-3xl font-bold text-blue-900 mt-3">SMK PGRI 31 LEGOK</h2>
                <p class="mt-5 text-gray-600 leading-relaxed">SMK PGRI 31 LEGOK berkomitmen mencetak generasi unggul, kompeten, dan berkarakter untuk menghadapi dunia kerja.</p>
                <p class="mt-4 text-gray-600 leading-relaxed">
Dengan semangat Berakhlak, Kompeten, dan Berprestasi, sekolah terus mengembangkan pembelajaran berbasis kompetensi.
</p>


{{-- STATISTIK DI DALAM TENTANG TISATA --}}
<div class="grid grid-cols-2 gap-4 mt-8">

    @foreach($stats as $s)

    <div class="bg-blue-50 rounded-xl p-5">
        <h3 class="text-3xl font-bold text-blue-900">
            {{ $s[0] }}
        </h3>

        <p class="mt-2 text-gray-600">
            {{ $s[1] }}
        </p>
    </div>

    @endforeach

</div>


<a href="{{ url('/tentang-Tisata') }}"
   class="inline-flex items-center mt-6 rounded-lg border border-blue-900 px-6 py-3 font-semibold text-blue-900 hover:bg-blue-900 hover:text-white">
    Selengkapnya →
</a>

</div> 
</div>
</div>
</section>

{{-- PROGRAM KEAHLIAN --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center">
            <p class="text-green-600 font-semibold">Program Keahlian</p>
            <h2 class="text-3xl font-bold text-blue-900 mt-3">Pilih Jurusan yang Sesuai dengan Minat dan Bakatmu</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8 mt-12">
            @foreach($programs as $p)
           <div class="bg-white rounded-xl shadow-sm p-6 border-t-4 border-blue-900 min-h-[260px]">
                <div class="w-14 h-14 rounded-xl bg-green-50 flex items-center justify-center text-3xl">{{ $p[0] }}</div>
                <h3 class="text-xl font-bold text-blue-900 mt-5">{{ $p[1] }}</h3>
                <p class="mt-4 text-gray-600">{{ $p[2] }}</p>
                <a href="{{ url(['/program/tkj', '/program/akl', '/program/mplb'][$loop->index]) }}" class="inline-block mt-6 text-green-600 font-semibold">Pelajari Lebih Lanjut →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FASILITAS SEKOLAH --}}
<section class="py-20">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center">

            <p class="text-green-600 font-semibold">
                INFRASTRUKTUR MODERN
            </p>

            <h2 class="text-3xl font-bold text-blue-900 mt-3">
                Fasilitas Sekolah
            </h2>

        </div>


        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">

            @foreach($fasilitas as $f)

            <div class="relative rounded-2xl overflow-hidden group">


                <img 
                src="{{ $f[0] }}"
                alt="{{ $f[1] }}"
                class="h-52 w-full object-cover group-hover:scale-110 transition duration-500">


                <div class="
                absolute 
                inset-0 
                bg-gradient-to-t 
                from-black/70 
                via-transparent 
                to-transparent">
                </div>


                <div class="
                absolute 
                bottom-0 
                left-0 
                p-4 
                text-white">

                    <h3 class="font-bold text-sm md:text-base">
                        {{ $f[1] }}
                    </h3>

                </div>


            </div>

            @endforeach


        </div>


        <div class="text-center mt-8">

            <a href="/fasilitas"
            class="
            inline-block
            border
            border-blue-900
            text-blue-900
            px-8
            py-3
            rounded-xl
            font-semibold
            hover:bg-blue-900
            hover:text-white
            transition">

                 Lihat Semua Fasilitas →

            </a>

        </div>


    </div>

</section>

{{-- ARTIKEL DAN BERITA --}}
<section class="py-20 bg-slate-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center">
            <p class="text-green-600 font-semibold">Informasi</p>
            <h2 class="text-3xl font-bold text-blue-900 mt-3">Berita dan Informasi Terbaru</h2>
            <p class="mt-4 text-gray-600">Ikuti informasi terbaru mengenai kegiatan dan perkembangan SMK PGRI 31 LEGOK.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8 mt-12">
            @foreach($artikel as $a)
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <img src="{{ $a[0] }}" class="aspect-video w-full object-cover" alt="Artikel">
                <div class="p-6">
                    <span class="text-green-600 text-sm font-semibold">{{ $a[1] }}</span>
                    <h3 class="text-xl font-bold text-blue-900 mt-3">{{ $a[2] }}</h3>
                    <p class="mt-3 text-gray-600">{{ $a[3] }}</p>
                    <a href="{{ url('/informasi/berita') }}" class="inline-block mt-5 text-green-600 font-semibold">Baca Selengkapnya →</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <a href="{{ url('/informasi/berita') }}"
                class="inline-flex items-center rounded-lg border border-blue-900 px-6 py-3 font-semibold text-blue-900 hover:bg-blue-900 hover:text-white">
                Lihat Semua Berita →
            </a>
        </div>
    </div>
</section>

{{-- CTA PPDB --}}
<section class="py-20 bg-blue-900 text-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold">Siap Menjadi Bagian dari<br>SMK PGRI 31 LEGOK?</h2>
        <p class="mt-6 text-gray-200">Persiapkan dirimu untuk masa depan bersama lingkungan belajar yang kompeten dan berkarakter.</p>
        <div class="mt-8 flex justify-center gap-4">
            <a href="{{ url('/informasi/ppdb') }}" class="bg-green-500 px-8 py-3 rounded-lg font-semibold">Daftar PPDB Online →</a>
            <a href="{{ url('/informasi/ppdb') }}" class="border border-white px-8 py-3 rounded-lg font-semibold">Informasi PPDB</a>
        </div>
    </div>
</section>
@endsection