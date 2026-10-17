@extends('layouts.app')

@section('content')
    <section class="school-program-detail-hero"
             style="--program-hero-image: url('{{ asset('images/praktek.jpg') }}')">
        <div class="school-container">
            <span class="school-program-detail-code">AKL</span>
            <h1>Akuntansi dan Keuangan Lembaga</h1>
        </div>
    </section>

    <section class="school-program-detail">
        <div class="school-container">
            <p class="school-program-detail-intro">
                Program Akuntansi dan Keuangan Lembaga (AKL) membekali
                peserta didik dengan kompetensi pencatatan transaksi,
                penyusunan laporan keuangan, perpajakan, dan administrasi
                keuangan berbasis teknologi.
            </p>

            <div class="school-program-detail-columns">
                <section>
                    <h2>Kompetensi yang Dipelajari</h2>

                    <ul class="school-check-list">
                        <li>Akuntansi dasar dan pencatatan transaksi</li>
                        <li>Penyusunan laporan keuangan</li>
                        <li>Akuntansi perusahaan jasa dan dagang</li>
                        <li>Administrasi keuangan dan perbankan</li>
                        <li>Perpajakan dasar</li>
                        <li>Komputer akuntansi</li>
                    </ul>
                </section>

                <section>
                    <h2>Kegiatan Pembelajaran</h2>

                    <ul class="school-learning-list">
                        <li>📌 Praktik pencatatan transaksi perusahaan</li>
                        <li>📌 Simulasi penyusunan laporan keuangan</li>
                        <li>📌 Praktik aplikasi komputer akuntansi</li>
                        <li>📌 Kunjungan dan praktik kerja industri</li>
                    </ul>
                </section>
            </div>

            <section class="school-career-section">
                <h2>Peluang Karier</h2>

                <div class="school-career-grid">
                    <article>
                        <h3>Staf Akuntansi</h3>
                        <p>Mencatat transaksi dan membantu menyusun laporan keuangan.</p>
                    </article>

                    <article>
                        <h3>Staf Keuangan</h3>
                        <p>Mengelola administrasi keuangan dan dokumen pembayaran.</p>
                    </article>

                    <article>
                        <h3>Administrasi Pajak</h3>
                        <p>Membantu pengelolaan data serta administrasi perpajakan.</p>
                    </article>

                    <article>
                        <h3>Staf Administrasi</h3>
                        <p>Mengelola dokumen, data, dan administrasi operasional perusahaan.</p>
                    </article>
                </div>
            </section>

            <section class="school-program-cta">
                <h2>Tertarik dengan Program AKL?</h2>

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