@extends('layouts.app')

@section('content')
    <section class="school-program-detail-hero"
             style="--program-hero-image: url('{{ asset('images/lab.jpg') }}')">
        <div class="school-container">
            <span class="school-program-detail-code">TKJ</span>
            <h1>Teknik Komputer dan Jaringan</h1>
        </div>
    </section>

    <section class="school-program-detail">
        <div class="school-container">
            <p class="school-program-detail-intro">
                Program Teknik Komputer dan Jaringan (TKJ) membekali
                peserta didik dengan kompetensi di bidang teknologi
                informasi, meliputi perakitan komputer, instalasi sistem
                operasi, konfigurasi jaringan, dan keamanan siber.
            </p>

            <div class="school-program-detail-columns">
                <section>
                    <h2>Kompetensi yang Dipelajari</h2>

                    <ul class="school-check-list">
                        <li>Merakit dan mengkonfigurasi komputer</li>
                        <li>Instalasi sistem operasi Windows &amp; Linux</li>
                        <li>Konfigurasi jaringan LAN, WAN, dan wireless</li>
                        <li>Administrasi server dan cloud computing</li>
                        <li>Keamanan jaringan dan troubleshooting</li>
                        <li>Pemrograman web dasar</li>
                    </ul>
                </section>

                <section>
                    <h2>Kegiatan Pembelajaran</h2>

                    <ul class="school-learning-list">
                        <li>📌 Praktik lab komputer setiap minggu</li>
                        <li>📌 Kompetisi LKS bidang IT Networking</li>
                        <li>📌 Magang di perusahaan IT terkemuka</li>
                        <li>📌 Sertifikasi CISCO &amp; MikroTik</li>
                    </ul>
                </section>
            </div>

            <section class="school-career-section">
                <h2>Peluang Karier</h2>

                <div class="school-career-grid">
                    <article>
                        <h3>Network Engineer</h3>
                        <p>Merancang dan mengelola infrastruktur jaringan perusahaan.</p>
                    </article>

                    <article>
                        <h3>IT Support Specialist</h3>
                        <p>Memberikan dukungan teknis dan troubleshooting.</p>
                    </article>

                    <article>
                        <h3>System Administrator</h3>
                        <p>Mengelola server, database, dan keamanan sistem.</p>
                    </article>

                    <article>
                        <h3>Web Developer</h3>
                        <p>Membangun dan memelihara aplikasi web.</p>
                    </article>
                </div>
            </section>

            <section class="school-program-cta">
                <h2>Tertarik dengan Program TKJ?</h2>
                <p>Daftarkan dirimu sekarang dan mulai perjalanan menuju karier impian.</p>

                <a href="#" class="school-program-cta-button">
                    Daftar PPDB Sekarang
                </a>
            </section>
        </div>
    </section>
@endsection