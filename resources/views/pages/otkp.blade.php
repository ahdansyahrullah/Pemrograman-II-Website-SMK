@extends('layouts.app')

@section('content')
    <section class="school-program-detail-hero"
             style="--program-hero-image: url('{{ asset('images/kelas.jpg') }}')">
        <div class="school-container">
            <span class="school-program-detail-code">MPLB</span>
            <h1>Manajemen Perkantoran dan Layanan Bisnis</h1>
        </div>
    </section>

    <section class="school-program-detail">
        <div class="school-container">
            <p class="school-program-detail-intro">
                Program Manajemen Perkantoran dan Layanan Bisnis (MPLB)
                membekali peserta didik dengan kompetensi administrasi
                perkantoran, pengelolaan dokumen, komunikasi bisnis,
                teknologi perkantoran, dan layanan pelanggan.
            </p>

            <div class="school-program-detail-columns">
                <section>
                    <h2>Kompetensi yang Dipelajari</h2>

                    <ul class="school-check-list">
                        <li>Administrasi umum dan tata kelola perkantoran</li>
                        <li>Pengelolaan surat dan dokumen kantor</li>
                        <li>Kearsipan manual dan digital</li>
                        <li>Teknologi dan aplikasi perkantoran</li>
                        <li>Komunikasi bisnis dan pelayanan pelanggan</li>
                        <li>Pengelolaan agenda dan rapat</li>
                    </ul>
                </section>

                <section>
                    <h2>Kegiatan Pembelajaran</h2>

                    <ul class="school-learning-list">
                        <li>📌 Praktik administrasi perkantoran</li>
                        <li>📌 Simulasi pelayanan pelanggan</li>
                        <li>📌 Praktik pengelolaan arsip digital</li>
                        <li>📌 Praktik kerja industri di dunia usaha</li>
                    </ul>
                </section>
            </div>

            <section class="school-career-section">
                <h2>Peluang Karier</h2>

                <div class="school-career-grid">
                    <article>
                        <h3>Staf Administrasi</h3>
                        <p>Mengelola dokumen, data, dan kegiatan administrasi perusahaan.</p>
                    </article>

                    <article>
                        <h3>Sekretaris</h3>
                        <p>Mengelola agenda, surat-menyurat, rapat, dan kebutuhan pimpinan.</p>
                    </article>

                    <article>
                        <h3>Resepsionis</h3>
                        <p>Memberikan pelayanan informasi dan menerima tamu perusahaan.</p>
                    </article>

                    <article>
                        <h3>Staf Layanan Pelanggan</h3>
                        <p>Memberikan informasi serta menangani kebutuhan pelanggan.</p>
                    </article>
                </div>
            </section>

            <section class="school-program-cta">
                <h2>Tertarik dengan Program MPLB?</h2>

                <p>
                    Daftarkan dirimu sekarang dan mulai perjalanan
                    menuju karier impian.
                </p>

                <a href="#" class="school-program-cta-button">
                    Daftar PPDB Sekarang
                </a>
            </section>
        </div>
    </section>
@endsection