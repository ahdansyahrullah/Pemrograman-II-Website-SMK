@extends('layouts.app')

@section('content')
@php
    $articles = [
        'juara-1-lks-tingkat-kabupaten' => [
            'image' => 'images/hero1.jpg',
            'category' => 'Prestasi',
            'date' => '15 Nov 2024',
            'title' => 'SMK PGRI 31 Legok Raih Juara 1 LKS Tingkat Kabupaten',
            'intro' => 'Siswa program TKJ berhasil meraih juara pertama dalam Lomba Kompetensi Siswa tingkat Kabupaten.',
            'content' => [
                'Prestasi membanggakan kembali diraih oleh siswa SMK PGRI 31 Legok melalui ajang Lomba Kompetensi Siswa tingkat Kabupaten.',
                'Siswa program Teknik Komputer dan Jaringan menunjukkan kemampuan, ketelitian, dan kreativitas selama mengikuti seluruh rangkaian perlombaan.',
                'Pencapaian ini menjadi motivasi bagi seluruh warga sekolah untuk terus mengembangkan kompetensi dan meraih prestasi di berbagai bidang.'
            ],
        ],
        'pelaksanaan-pkl-semester-genap' => [
            'image' => 'images/praktek.jpg',
            'category' => 'Kegiatan',
            'date' => '10 Nov 2024',
            'title' => 'Pelaksanaan Praktik Kerja Lapangan Semester Genap 2024',
            'intro' => 'Lebih dari 150 siswa kelas XI memulai program PKL di berbagai perusahaan mitra industri.',
            'content' => [
                'SMK PGRI 31 Legok melaksanakan kegiatan Praktik Kerja Lapangan sebagai bagian dari pembelajaran berbasis pengalaman kerja.',
                'Melalui kegiatan ini, siswa mendapatkan kesempatan untuk menerapkan pengetahuan dan keterampilan yang telah dipelajari di sekolah.',
                'Program PKL juga membantu siswa mengenal budaya kerja, meningkatkan tanggung jawab, dan mempersiapkan diri menghadapi dunia industri.'
            ],
        ],
        'tim-paskibra-hut-ri' => [
            'image' => 'images/hero3.jpg',
            'category' => 'Prestasi',
            'date' => '5 Nov 2024',
            'title' => 'Tim Paskibra Tampil Membanggakan di HUT RI Ke-79',
            'intro' => 'Tim Paskibra SMK PGRI 31 Legok dipercaya menjadi pengibar bendera pada upacara HUT RI tingkat Kabupaten.',
            'content' => [
                'Tim Paskibra SMK PGRI 31 Legok berhasil menjalankan tugas dengan baik dalam upacara peringatan Hari Ulang Tahun Kemerdekaan Republik Indonesia.',
                'Persiapan dilakukan melalui latihan rutin yang membentuk kedisiplinan, kekompakan, ketepatan gerakan, dan rasa tanggung jawab siswa.',
                'Keikutsertaan ini menjadi pengalaman berharga sekaligus kebanggaan bagi siswa, pembina, dan seluruh keluarga besar sekolah.'
            ],
        ],
    ];

    abort_unless(isset($articles[$slug]), 404);
    $article = $articles[$slug];
@endphp

<section class="school-profile-hero" aria-labelledby="article-title">
    <div class="school-container">
        <p class="school-section-label">{{ $article['category'] }}</p>
        <h1 id="article-title">{{ $article['title'] }}</h1>
        <p class="school-profile-intro">
            Informasi terbaru dari SMK PGRI 31 Legok.
        </p>
    </div>
</section>

<section class="school-news-detail">
    <div class="school-container school-news-detail-container">
        <article class="school-news-detail-card">
            <img
                src="{{ asset($article['image']) }}"
                alt="{{ $article['title'] }}"
                class="school-news-detail-image"
            >

            <div class="school-news-detail-content">
                <div class="school-news-meta">
                    <span class="school-news-category">{{ $article['category'] }}</span>
                    <time>{{ $article['date'] }}</time>
                </div>

                <h2>{{ $article['title'] }}</h2>

                <p class="school-news-detail-intro">
                    {{ $article['intro'] }}
                </p>

                @foreach ($article['content'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </article>

        <div class="school-news-detail-back">
            <a href="{{ url('/informasi/berita') }}"
               class="school-section-button">
                ← Kembali ke Artikel & Berita
            </a>
        </div>
    </div>
</section>
@endsection
