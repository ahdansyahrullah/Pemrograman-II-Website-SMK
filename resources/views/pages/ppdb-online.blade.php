<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PPDB Online - SMK PGRI 31 Legok</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="ppdb-page">
    {{-- Navbar khusus PPDB --}}
    <header class="ppdb-header">
        <nav class="ppdb-nav" aria-label="Navigasi PPDB">
            <a href="{{ url('/ppdb-online') }}" class="ppdb-brand">
                <img
                    src="{{ asset('images/logo-smk.jpeg') }}"
                    alt="Logo SMK PGRI 31 Legok"
                >

                <span>
                    <strong>SMK PGRI 31 LEGOK</strong>
                    <small>Portal PPDB</small>
                </span>
            </a>

            <div class="ppdb-nav-links">
                <a href="{{ url('/ppdb-online') }}"
                   class="is-active"
                   aria-current="page">
                    Beranda
                </a>

                <a href="{{ url('/ppdb-online/panduan') }}">
                    Panduan
                </a>

                <a href="{{ url('/ppdb-online/kontak') }}">Hubungi Kami</a>
            </div>
        </nav>
    </header>

    <main>
<section class="ppdb-online-hero">
    <div class="school-container ppdb-online-hero-grid">
        <div>
            <span class="ppdb-online-badge">PENERIMAAN PESERTA DIDIK BARU</span>
            <h1>Mulai Masa Depanmu<br> Bersama Tisata</h1>
            <p>Daftar dengan mudah dan pilih program keahlian sesuai minatmu.</p>
            <div class="ppdb-online-actions">
                <a href="{{ url('/ppdb-online/daftar') }}"
                class="ppdb-online-primary">
                Daftar Sekarang <span aria-hidden="true">→</span>
            </a>    
                <a
    href="{{ url('/ppdb-online/status') }}"
    class="ppdb-online-secondary"
    onclick="
        const number = localStorage.getItem('last_ppdb_registration');

        if (!number) {
            event.preventDefault();
            alert('Belum ada data pendaftaran yang tersimpan.');
            return;
        }

        this.href = '{{ url('/ppdb-online/status') }}/' + number;
    "
>
    Cek Status Pendaftaran
</a>
            </div>
            <small>Pendaftaran Tahun Ajaran 2026/2027</small>
        </div>
        <div class="ppdb-online-illustration">
    <img
        src="{{ asset('images/smk31.png') }}"
        alt="Siswa SMK PGRI 31 Legok"
    >
</div>
</section>

<section class="ppdb-online-facts">
    <div class="school-container ppdb-online-facts-grid">
        <div><strong>👥</strong><b>3 Program Keahlian</b><span>Pilih sesuai minat dan bakatmu.</span></div>
        <div><strong>▣</strong><b>Pendaftaran Online</b><span>Mudah, cepat, dan aman.</span></div>
        <div><strong>◉</strong><b>Bantuan Panitia PPDB</b><span>Siap membantu proses pendaftaran.</span></div>
    </div>
</section>

<section class="ppdb-online-steps" id="formulir">
    <div class="school-container">
        <div class="ppdb-online-heading">
            <span></span>
            <h2>Daftar dalam 5 Langkah Mudah</h2>
            <p>Ikuti langkah berikut untuk menyelesaikan pendaftaran PPDB.</p>
        </div>
        <div class="ppdb-online-step-grid">
    @foreach ([
        ['1', 'Data Siswa', 'Lengkapi data diri siswa dengan benar.',
         'M20 21v-2a7 7 0 0 0-14 0v2 M13 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8 M21 11v6 M18 14h6'],
        ['2', 'Orang Tua / Wali', 'Isi data orang tua atau wali siswa.',
         'M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2 M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8 M22 21v-2a4 4 0 0 0-3-3.87 M16 3.13a4 4 0 0 1 0 7.75'],
        ['3', 'Pilihan Jurusan', 'Pilih program keahlian sesuai minatmu.',
         'M2 8l10-5 10 5-10 5-10-5 M6 10v7l6 3 6-3v-7 M22 8v8'],
        ['4', 'Unggah Dokumen', 'Unggah berkas persyaratan yang dibutuhkan.',
         'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6 M14 2v6h6 M8 13h8 M8 17h6'],
        ['5', 'Periksa & Kirim', 'Periksa kembali, kemudian kirim pendaftaran.',
         'M22 2L9 15 M22 2l-7 20-6-7-7-6 20-7'],
    ] as [$number, $title, $description, $icon])
        <article>
            <em>{{ $number }}</em>

            <div class="ppdb-online-step-content">
                <svg class="ppdb-online-step-icon"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.7"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     aria-hidden="true">
                    <path d="{{ $icon }}" />
                </svg>

                <h3>{{ $title }}</h3>
                <p>{{ $description }}</p>
            </div>
        </article>
    @endforeach
</div>
</section>

<section class="ppdb-online-programs" id="status">
    <div class="school-container">
        <div class="ppdb-online-heading">
            <span></span>
            <h2>Program Keahlian di SMK PGRI 31 Legok</h2>
            <p>Pilih program keahlian unggulan sesuai minat dan rencana kariermu.</p>
        </div>
        <div class="ppdb-online-program-grid">
    @foreach ([
        [
            'code' => 'TKJ',
            'name' => 'Teknik Komputer dan Jaringan',
            'description' => 'Pelajari jaringan komputer, sistem operasi, keamanan jaringan, dan teknologi infrastruktur digital untuk menjadi tenaga ahli di bidang IT.',
            'path' => '/program/tkj',
            'style' => 'tkj',
            'icon' => 'M9 3h6v5H9z M2 16h6v5H2z M16 16h6v5h-6z M9 16h6v5H9z M12 8v8 M5 16v-4h14v4',
        ],
        [
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Pelajari pencatatan keuangan, perpajakan, aplikasi akuntansi, dan pengelolaan keuangan lembaga untuk siap terjun di dunia kerja dan wirausaha.',
            'path' => '/program/akl',
            'style' => 'akl',
            'icon' => 'M3 13h4v8H3z M10 8h4v13h-4z M17 3h4v18h-4z',
        ],
        [
            'code' => 'MPLB',
            'name' => 'Manajemen Perkantoran dan Layanan Bisnis',
            'description' => 'Pelajari administrasi perkantoran, layanan bisnis, komunikasi profesional, dan pengelolaan arsip dengan dukungan teknologi modern.',
            'path' => '/program/mplb',
            'style' => 'mplb',
            'icon' => 'M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2 M4 6h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2 M2 12h20',
        ],
    ] as $program)
        <article>
            <div class="ppdb-online-program-top">
                <span class="ppdb-online-program-icon ppdb-icon-{{ $program['style'] }}">
                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.7"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         aria-hidden="true">
                        <path d="{{ $program['icon'] }}" />
                    </svg>
                </span>

                <div>
                    <b>{{ $program['code'] }}</b>
                    <h3>{{ $program['name'] }}</h3>
                </div>
            </div>

            <p>{{ $program['description'] }}</p>

            <a href="{{ url($program['path']) }}"
               aria-label="Lihat program {{ $program['code'] }}">
                →
            </a>
        </article>
        @endforeach
        </div>
    </div>
</section>

<div class="ppdb-back-home">
    <a href="{{ url('/') }}">
        ← Kembali ke Beranda
    </a>
</div>

    </main>
</body>
</html>
