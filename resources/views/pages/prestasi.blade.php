@extends('layouts.app')

@section('content')
    @php
        $prestasi = [
            ['icon' => '🥇', 'name' => 'Muhammad Rizky Pratama', 'level' => 'Kabupaten', 'detail' => 'Juara 1 LKS Bidang IT Networking', 'year' => '2024', 'type' => 'Akademik'],
            ['icon' => '🏅', 'name' => 'Tim Paskibra', 'level' => 'Kecamatan', 'detail' => 'Pengibar Bendera HUT RI ke-79', 'year' => '2024', 'type' => 'Nonakademik'],
            ['icon' => '🥈', 'name' => 'Siti Nur Aisyah', 'level' => 'Kabupaten', 'detail' => 'Juara 2 LKS Bidang Akuntansi', 'year' => '2023', 'type' => 'Akademik'],
            ['icon' => '🥉', 'name' => 'Tim Futsal Putra', 'level' => 'Kabupaten', 'detail' => 'Juara 3 Turnamen Futsal Pelajar', 'year' => '2023', 'type' => 'Nonakademik'],
            ['icon' => '🥈', 'name' => 'Tim Pramuka', 'level' => 'Kabupaten', 'detail' => 'Juara 2 Perkemahan Penggalang (LT-IV)', 'year' => '2023', 'type' => 'Nonakademik'],
        ];

        $filter = request()->query('kategori', 'Semua');
        $filters = ['Semua', 'Akademik', 'Nonakademik'];
        if (!in_array($filter, $filters, true)) $filter = 'Semua';
        $visible = array_filter($prestasi, fn ($item) => $filter === 'Semua' || $item['type'] === $filter);
    @endphp

    <section class="school-achievement-hero" aria-labelledby="achievement-title">
        <div class="school-container">
            <p class="school-achievement-eyebrow">KEBANGGAAN KAMI</p>
            <h1 id="achievement-title">Prestasi Siswa</h1>
            <p>Catatan prestasi membanggakan yang diraih oleh siswa-siswi SMK<br class="achievement-desktop-break"> PGRI 31 Legok.</p>
        </div>
    </section>

    <section class="school-achievement-list-section" aria-label="Daftar prestasi siswa">
        <div class="school-container school-achievement-list-container">
            <nav class="school-achievement-filters" aria-label="Filter prestasi">
                @foreach ($filters as $item)
                    <a href="{{ url('/informasi/prestasi') }}?kategori={{ urlencode($item) }}"
                       class="school-achievement-filter {{ $filter === $item ? 'is-active' : '' }}">
                        {{ $item }}
                    </a>
                @endforeach
            </nav>

            <div class="school-achievement-list">
                @forelse ($visible as $item)
                    <article class="school-achievement-row">
                        <span class="school-achievement-medal" aria-hidden="true">{{ $item['icon'] }}</span>
                        <div class="school-achievement-row-copy">
                            <div class="school-achievement-row-heading">
                                <h2>{{ $item['name'] }}</h2>
                                <span>{{ $item['level'] }}</span>
                            </div>
                            <p>{{ $item['detail'] }}</p>
                        </div>
                        <time datetime="{{ $item['year'] }}">{{ $item['year'] }}</time>
                    </article>
                @empty
                    <p class="school-achievement-empty">Belum ada prestasi pada kategori ini.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
