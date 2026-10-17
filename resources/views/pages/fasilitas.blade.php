@extends('layouts.app')

@section('content')
    <section class="school-profile-hero" aria-labelledby="facility-title">
        <div class="school-container">
            <p class="school-section-label">Infrastruktur Modern</p>

            <h1 id="facility-title">Fasilitas Sekolah</h1>

            <p class="school-profile-intro">
                Fasilitas lengkap dan modern untuk mendukung proses belajar
                mengajar yang optimal.
            </p>
        </div>
    </section>

    @php
        $fasilitas = [
            [
                'image' => 'images/lab.jpg',
                'name' => 'Laboratorium Komputer',
                'description' => '60 unit komputer terbaru dengan akses internet berkecepatan tinggi.',
                'path' => '/fasilitas/laboratorium-komputer',
            ],
            [
                'image' => 'images/gedung.jpg',
                'name' => 'Ruang Praktik Keahlian',
                'description' => 'Ruang praktik khusus untuk mendukung pembelajaran TKJ, AKL, dan MPLB.',
                'path' => '/fasilitas/ruang-praktik',
            ],
            [
                'image' => 'images/perpustakaan.jpg',
                'name' => 'Perpustakaan',
                'description' => 'Koleksi buku dan sumber belajar untuk mendukung budaya literasi siswa.',
                'path' => '/fasilitas/perpustakaan',
            ],
            [
                'image' => 'images/lapangan.jpg',
                'name' => 'Lapangan Olahraga',
                'description' => 'Lapangan multifungsi untuk futsal, basket, dan kegiatan olahraga lainnya.',
                'path' => '/fasilitas/lapangan',
            ],
            [
                'image' => 'images/kantin.jpg',
                'name' => 'Kantin Sekolah',
                'description' => 'Kantin sekolah yang bersih dan nyaman untuk mendukung kebutuhan siswa.',
                'path' => '/fasilitas/kantin',
            ],
            [
                'image' => 'images/mushola.jpg',
                'name' => 'Mushola',
                'description' => 'Tempat ibadah yang nyaman untuk kegiatan keagamaan siswa dan guru.',
                'path' => '/fasilitas/mushola',
            ],

            [
                'image' => 'images/kelas.jpg',
                'name' => 'Ruang Kelas / Ruang Belajar',
                'description' => 'Ruang belajar yang nyaman dan kondusif untuk mendukung kegiatan pembelajaran.',
                'path' => '/fasilitas/ruang-kelas',
            ],

            [
                'image' => 'images/uks1.jpg',
                'name' => 'UKS',
                'description' => 'Ruang pelayanan kesehatan siswa untuk pertolongan pertama dan pemeriksaan dasar.',
                'path' => '/fasilitas/uks',
            ],

            [
                'image' => 'images/ruang-seni1.jpg',
                'name' => 'Ruang Seni',
                'description' => 'Ruang untuk mengembangkan kreativitas, minat, dan bakat seni peserta didik.',
                'path' => '/fasilitas/ruang-seni',
            ],

            [
                'image' => 'images/gedung.jpg',
                'name' => 'Ruang OSIS',
                'description' => 'Ruang kegiatan organisasi siswa untuk mendukung kepemimpinan dan kegiatan kesiswaan.',
                'path' => '/fasilitas/ruang-osis',
            ],
        ];
    @endphp

    @php
    $perPage = 6;
    $currentPage = max(1, (int) request()->query('page', 1));
    $totalPages = (int) ceil(count($fasilitas) / $perPage);

    $currentPage = min($currentPage, max(1, $totalPages));

    $pageFacilities = array_slice(
        $fasilitas,
        ($currentPage - 1) * $perPage,
        $perPage
    );
@endphp

    <section class="school-facility-directory"
             aria-labelledby="facility-list-title">
        <div class="school-container">
            <h2 id="facility-list-title" class="school-section-title">
                Fasilitas Pendukung Pembelajaran
            </h2>

            <p class="school-facility-intro">
                Lingkungan belajar yang nyaman untuk mendukung
                pengembangan kompetensi siswa.
            </p>

            <div class="school-facility-directory-grid">
                @foreach ($pageFacilities as $facility)
                    <article class="school-facility-directory-card">
                        <img
                            src="{{ asset($facility['image']) }}"
                            alt="{{ $facility['name'] }}"
                            loading="lazy"
                            decoding="async"
                        >

                        <div class="school-facility-directory-content">
                            <h3>{{ $facility['name'] }}</h3>
                            <p>{{ $facility['description'] }}</p>

                            @if ($facility['path'] !== '#')
                                <a href="{{ url($facility['path']) }}?from_page={{ $currentPage }}">
                                    Lihat Detail <span aria-hidden="true">→</span>
                                </a>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>

            @if ($totalPages > 1)
    <nav class="school-facility-pagination"
         aria-label="Navigasi halaman fasilitas">

        @if ($currentPage > 1)
            <a href="{{ url('/fasilitas') }}?page={{ $currentPage - 1 }}"
               class="school-pagination-button">
                ← Sebelumnya
            </a>
        @endif

        <span class="school-pagination-status">
            Halaman {{ $currentPage }} dari {{ $totalPages }}
        </span>

        @if ($currentPage < $totalPages)
            <a href="{{ url('/fasilitas') }}?page={{ $currentPage + 1 }}"
               class="school-pagination-button">
                Berikutnya →
            </a>
        @endif
    </nav>
@endif
        </div>
    </section>
@endsection