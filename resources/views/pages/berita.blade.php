@extends('layouts.app')

@section('content')
    <section class="school-profile-hero" aria-labelledby="news-title">
        <div class="school-container">
            <p class="school-section-label">Update Terbaru</p>
            <h1 id="news-title">Artikel & Berita</h1>
            <p class="school-profile-intro">
                Informasi terkini seputar kegiatan dan prestasi SMK PGRI 31 Legok.
            </p>
        </div>
    </section>

    @php
        // Data contoh. Ganti dengan berita sekolah yang sudah dikonfirmasi.
        $berita = [
            [
                'image' => 'images/lab.jpg',
                'category' => 'Prestasi',
                'date' => '15 Nov 2024',
                'title' => 'SMK PGRI 31 Legok Raih Juara 1 LKS Tingkat Kabupaten',
                'description' => 'Siswa program TKJ berhasil meraih prestasi dalam Lomba Kompetensi Siswa tingkat kabupaten.',
                'slug' => 'juara-1-lks-tingkat-kabupaten',
            ],
            [
                'image' => 'images/gedung.jpg',
                'category' => 'Kegiatan',
                'date' => '10 Nov 2024',
                'title' => 'Pelaksanaan Praktik Kerja Lapangan Semester Genap 2024',
                'description' => 'Siswa mengikuti program PKL untuk mengembangkan keterampilan melalui pengalaman langsung di dunia kerja.',
                'slug' => 'pelaksanaan-pkl-semester-genap',
            ],
            [
                'image' => 'images/kelas.jpg',
                'category' => 'Kegiatan',
                'date' => '5 Nov 2024',
                'title' => 'Tim Paskibra Tampil Membanggakan di HUT RI',
                'description' => 'Tim Paskibra menunjukkan kedisiplinan dan semangat kebersamaan dalam kegiatan peringatan kemerdekaan.',
                'slug' => 'tim-paskibra-hut-ri',
            ],
        ];

        $categories = ['Semua', 'Prestasi', 'Kegiatan', 'Akademik', 'PPDB'];
        $selectedCategory = request()->query('kategori', 'Semua');

        if (!in_array($selectedCategory, $categories, true)) {
            $selectedCategory = 'Semua';
        }

        $filteredNews = array_values(array_filter(
            $berita,
            fn ($item) => $selectedCategory === 'Semua'
                || $item['category'] === $selectedCategory
        ));

        $perPage = 6;
        $totalPages = max(1, (int) ceil(count($filteredNews) / $perPage));
        $requestedPage = filter_var(
            request()->query('page', 1),
            FILTER_VALIDATE_INT
        );
        $currentPage = min($totalPages, max(1, $requestedPage ?: 1));

        $pageNews = array_slice(
            $filteredNews,
            ($currentPage - 1) * $perPage,
            $perPage
        );

        $newsUrl = fn ($page, $category) => url('/informasi/berita')
            . '?' . http_build_query([
                'kategori' => $category,
                'page' => $page,
            ]);
    @endphp

    <section class="school-news-directory" aria-label="Daftar berita sekolah">
        <div class="school-container">
            <nav class="school-news-filters" aria-label="Kategori berita">
                @foreach ($categories as $category)
                    <a
                        href="{{ $newsUrl(1, $category) }}"
                        class="school-news-filter {{ $selectedCategory === $category ? 'is-active' : '' }}"
                        @if ($selectedCategory === $category)
                            aria-current="page"
                        @endif
                    >
                        {{ $category }}
                    </a>
                @endforeach
            </nav>

            <div class="school-news-grid">
                @forelse ($pageNews as $item)
    <a
        href="{{ url('/informasi/berita/' . $item['slug']) }}"
        class="school-news-card"
    >
        <img
            src="{{ asset($item['image']) }}"
            alt="{{ $item['title'] }}"
            loading="lazy"
            decoding="async"
        >

        <div class="school-news-content">
            <div class="school-news-meta">
                <span class="school-news-category">
                    {{ $item['category'] }}
                </span>

                <span>{{ $item['date'] }}</span>
            </div>

            <h2>{{ $item['title'] }}</h2>
            <p>{{ $item['description'] }}</p>
        </div>
    </a>
@empty
                    <p>Belum ada berita pada kategori ini.</p>
                @endforelse
            </div>

            @if ($totalPages > 1)
                <nav class="school-news-pagination" aria-label="Navigasi halaman berita">
                    @if ($currentPage > 1)
                        <a
                            href="{{ $newsUrl($currentPage - 1, $selectedCategory) }}"
                            class="school-news-page-button"
                        >
                            ← Sebelumnya
                        </a>
                    @endif

                    <span class="school-news-page-status">
                        Halaman {{ $currentPage }} dari {{ $totalPages }}
                    </span>

                    @if ($currentPage < $totalPages)
                        <a
                            href="{{ $newsUrl($currentPage + 1, $selectedCategory) }}"
                            class="school-news-page-button"
                        >
                            Berikutnya →
                        </a>
                    @endif
                </nav>
            @endif
        </div>
    </section>
@endsection