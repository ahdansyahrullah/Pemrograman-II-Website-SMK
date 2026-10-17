<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panduan PPDB Online - SMK PGRI 31 Legok</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="ppdb-page">

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
            <a href="{{ url('/ppdb-online') }}">
                Beranda
            </a>

            <a href="{{ url('/ppdb-online/panduan') }}"
               class="is-active"
               aria-current="page">
                Panduan
            </a>

            <a href="{{ url('/kontak') }}">
                Hubungi Kami
            </a>
        </div>
    </nav>
</header>

<main class="ppdb-guide-page">
    <section class="ppdb-guide-hero">
        <div class="school-container">
            <span class="ppdb-online-badge">
                PANDUAN PPDB ONLINE
            </span>

            <h1>
                Cara Mendaftar di<br>
                SMK PGRI 31 Legok
            </h1>

            <p>
                Ikuti langkah-langkah berikut agar proses pendaftaran
                berjalan mudah dan lancar.
            </p>
        </div>
    </section>

    <section class="ppdb-guide-content">
        <div class="school-container">
            <div class="ppdb-online-heading">
                <span></span>
                <h2>Daftar dalam 5 Langkah Mudah</h2>
                <p>
                    Pastikan seluruh data dan dokumen yang diunggah sudah benar.
                </p>
            </div>

            <div class="ppdb-guide-list">
                @foreach ([
                    ['1', 'Data Siswa', 'Isi nama lengkap, NISN, tempat tanggal lahir, alamat, dan data diri lainnya dengan benar.'],
                    ['2', 'Orang Tua / Wali', 'Lengkapi data orang tua atau wali, termasuk nomor telepon dan alamat yang dapat dihubungi.'],
                    ['3', 'Pilihan Jurusan', 'Pilih program keahlian sesuai minat dan bakat. Tersedia TKJ, AKL, dan MPLB.'],
                    ['4', 'Unggah Dokumen', 'Siapkan dan unggah dokumen persyaratan sesuai format yang diminta.'],
                    ['5', 'Periksa dan Kirim', 'Periksa kembali seluruh data sebelum menekan tombol kirim pendaftaran.'],
                ] as [$number, $title, $description])
                    <article class="ppdb-guide-card">
                        <div class="ppdb-guide-number">
                            {{ $number }}
                        </div>

                        <div>
                            <h3>{{ $title }}</h3>
                            <p>{{ $description }}</p>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="ppdb-guide-requirements">
                <h2>Dokumen yang Perlu Disiapkan</h2>

                <ul>
                    <li>Kartu Keluarga</li>
                    <li>Akta Kelahiran</li>
                    <li>Kartu Indonesia Pintar jika ada</li>
                    <li>Ijazah atau surat keterangan lulus</li>
                    <li>Pas foto calon peserta didik</li>
                </ul>
            </div>

            <div class="ppdb-guide-actions">
                <a href="{{ url('/ppdb-online') }}"
                   class="ppdb-online-secondary">
                    ← Kembali ke PPDB
                </a>

                <a href="{{ url('/kontak') }}"
                   class="ppdb-online-primary">
                    Hubungi Panitia →
                </a>
            </div>
        </div>
    </section>
</main>

</body>
</html>