<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hubungi Panitia PPDB - SMK PGRI 31 Legok</title>

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
            <a href="{{ url('/ppdb-online') }}">Beranda</a>
            <a href="{{ url('/ppdb-online/panduan') }}">Panduan</a>
            <a href="{{ url('/ppdb-online/kontak') }}"
               class="is-active"
               aria-current="page">
                Hubungi Kami
            </a>
        </div>
    </nav>
</header>

<main class="ppdb-contact-page">
    <section class="ppdb-contact-hero">
        <div class="school-container">
            <span class="ppdb-online-badge">
                HUBUNGI PANITIA PPDB
            </span>

            <h1>
                Kami Siap Membantu<br>
                Proses Pendaftaranmu
            </h1>

            <p>
                Jangan ragu untuk menghubungi panitia apabila membutuhkan
                informasi lebih lanjut mengenai PPDB Online.
            </p>
        </div>
    </section>

    <section class="ppdb-contact-content">
        <div class="school-container ppdb-contact-grid">
            <article class="ppdb-contact-card">
                <span class="ppdb-contact-icon">☎</span>
                <h2>Telepon</h2>
                <p>Hubungi panitia pada jam pelayanan sekolah.</p>
                <a href="tel:02154211623">(021) 54211623</a>
            </article>

            <article class="ppdb-contact-card">
                <span class="ppdb-contact-icon">✉</span>
                <h2>Email</h2>
                <p>Kirim pertanyaan melalui email sekolah.</p>
                <a href="mailto:info@smkpgri31legok.sch.id">
                    info@smkpgri31legok.sch.id
                </a>
            </article>

            <article class="ppdb-contact-card">
                <span class="ppdb-contact-icon">⌖</span>
                <h2>Alamat Sekolah</h2>
                <p>
                    Jl. Alun Alun No. RT.01/RW.3, Babakan,
                    Kecamatan Legok, Kabupaten Tangerang.
                </p>
                <a href="{{ url('/kontak') }}">
                    Lihat lokasi sekolah →
                </a>
            </article>
        </div>

        <div class="school-container">
            <div class="ppdb-contact-hours">
                <h2>Jam Pelayanan Panitia</h2>
                <p>
                    Senin–Jumat, pukul 07.00–15.00 WIB
                </p>
            </div>

            <div class="ppdb-contact-actions">
                <a href="{{ url('/ppdb-online') }}"
                   class="ppdb-online-secondary">
                    ← Kembali ke PPDB
                </a>
            </div>
        </div>
    </section>
</main>

</body>
</html>