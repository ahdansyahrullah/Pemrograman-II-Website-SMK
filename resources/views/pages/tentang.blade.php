@extends('layouts.app')

@section('content')

{{-- HERO TENTANG SEKOLAH --}}
<section class="school-profile-hero" aria-labelledby="profile-title">
    <div class="school-container">
        <p class="school-section-label">Profil Sekolah</p>

        <h1 id="profile-title">Tentang Kami</h1>

        <p class="school-profile-intro">
            Mengenal lebih dekat SMK PGRI 31 Legok,
            sekolah menengah kejuruan di Kabupaten Tangerang
            yang berdiri sejak tahun 1997.
        </p>
    </div>
</section>

@php
// Statistik sekolah: format [angka, label]
$stats = [
    ['1997', 'Tahun Berdiri'],
    ['763', 'Siswa Aktif'],
    ['37', 'Tenaga Pendidik'],
    ['3', 'Program Keahlian'],
];
//NILAI-NILAI SEKOLAH
$nilai = [
    [
        '🕌',
        'Berakhlak',
        'Menumbuhkan pribadi yang bertakwa, beretika, jujur, dan bertanggung jawab dalam kehidupan sehari-hari.',
    ],
    [
        '🎯',
        'Kompeten',
        'Mengembangkan keterampilan profesional sesuai bidang keahlian melalui pembelajaran berbasis teknologi dan kebutuhan industri.',
    ],
    [
        '🏆',
        'Berprestasi',
        'Mendorong siswa mengembangkan potensi, menghasilkan karya, dan meraih prestasi akademik maupun nonakademik.',
    ],
];
// Tombol navigasi cepat ke bagian lain
$nav = ['Sejarah Sekolah', 'Visi & Misi', 'Struktur Organisasi'];
@endphp

{{-- Profil Sekolah: kiri foto, kanan informasi sekolah --}}
{{-- TENTANG SEKOLAH --}}
<section class="school-profile" aria-labelledby="school-profile-title">
    <div class="school-container school-profile-grid">
        <div class="school-profile-photo">
            <img
                src="{{ asset('images/sekolah.jpg') }}"
                alt="Gedung SMK PGRI 31 Legok"
                loading="lazy"
                decoding="async"
            >
        </div>

        <div class="school-profile-content">
            <h2 id="school-profile-title" class="school-section-title">
                Siapa Kami?
            </h2>

            <p>
                SMK PGRI 31 Legok merupakan sekolah menengah kejuruan
                swasta yang berlokasi di Desa Babakan, Kecamatan Legok,
                Kabupaten Tangerang, Provinsi Banten. Berdiri sejak
                tahun 1997, sekolah ini tumbuh melalui swadaya masyarakat
                dan dukungan pemerintah Kecamatan Legok.
            </p>

            <p>
                Sejak tahun 2010, sekolah memiliki gedung sendiri dan
                mengembangkan tiga program keahlian:
                <strong>Teknik Komputer dan Jaringan</strong>,
                <strong>Akuntansi dan Keuangan Lembaga</strong>, serta
                <strong>Manajemen Perkantoran dan Layanan Bisnis</strong>.
                Pada tahun ajaran 2026/2027, sekolah memiliki
                23 rombongan belajar dari kelas X hingga XII.
            </p>

            <p>
                Melalui pembelajaran berbasis teknologi informasi,
                penguatan karakter, dan kerja sama dengan dunia usaha
                serta industri, kami berupaya mewujudkan peserta didik
                yang profesional, bertakwa, beretika, dan berjiwa
                kewirausahaan sesuai bidang keahliannya.
            </p>

            <div class="school-profile-actions">
                <a href="{{ url('/tentang/sejarah') }}"
                   class="school-section-button">
                    Sejarah Sekolah
                </a>

                <a href="{{ url('/tentang/visi-misi') }}"
                   class="school-section-button">
                    Visi &amp; Misi
                </a>

                <a href="{{ url('/tentang/struktur-organisasi') }}"
                   class="school-section-button">
                    Struktur Organisasi
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Statistik Sekolah: angka-angka profil sekolah --}}
<section class="py-12 bg-gray-50">
    <div class="school-container">
        <div class="grid md:grid-cols-4 gap-6">
            @foreach ($stats as $s)
            <div class="bg-white rounded-xl shadow p-8 text-center">
                <h3 class="text-4xl font-bold text-blue-900">{{ $s[0] }}</h3>
                <p class="mt-2 text-gray-600">{{ $s[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- NILAI-NILAI SEKOLAH --}}
<section class="school-values" aria-labelledby="values-title">
    <div class="school-container">
        <h2 id="values-title" class="school-section-title">
            Nilai-Nilai Sekolah
        </h2>

        <div class="school-values-grid">
            @foreach ($nilai as [$icon, $title, $description])
                <article class="school-value-card">
                    <span class="school-value-icon" aria-hidden="true">
                        {{ $icon }}
                    </span>

                    <h3>{{ $title }}</h3>
                    <p>{{ $description }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
        </div>
    </div>
</section>

@endsection