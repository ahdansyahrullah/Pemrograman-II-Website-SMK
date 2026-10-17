@extends('layouts.app')

@section('content')
    <section class="school-facility-detail-hero"
             style="--facility-hero-image: url('{{ asset('images/lab.jpg') }}')">
        <div class="school-container">
            <span class="school-facility-detail-label">
                Fasilitas Sekolah
            </span>

            <h1>Laboratorium Komputer</h1>

            <p>
                Ruang praktik teknologi informasi untuk mendukung
                keterampilan digital peserta didik.
            </p>
        </div>
    </section>

    <section class="school-facility-detail">
        <div class="school-container">
            <div class="school-facility-detail-grid">
                <div class="school-facility-detail-photo">
                    <img
                        src="{{ asset('images/lab.jpg') }}"
                        alt="Laboratorium Komputer SMK PGRI 31 Legok"
                    >
                </div>

                <div class="school-facility-detail-content">
                    <p class="school-section-label">
                        Tentang Fasilitas
                    </p>

                    <h2>
                        Laboratorium Komputer
                    </h2>

                    <p>
                        Laboratorium Komputer SMK PGRI 31 Legok digunakan
                        sebagai ruang praktik peserta didik untuk
                        mengembangkan kompetensi di bidang teknologi
                        informasi, komputer, dan jaringan.
                    </p>

                    <p>
                        Ruang ini mendukung kegiatan pembelajaran TKJ,
                        praktik perakitan komputer, instalasi sistem
                        operasi, konfigurasi jaringan, serta latihan
                        administrasi sistem.
                    </p>

                    <ul class="school-facility-detail-list">
                        <li>Komputer praktik untuk pembelajaran siswa</li>
                        <li>Akses internet untuk kegiatan pembelajaran</li>
                        <li>Perangkat jaringan dan pendukung praktik</li>
                        <li>Digunakan untuk praktik TKJ dan pembelajaran ICT</li>
                    </ul>
                </div>
            </div>

            <div class="school-facility-detail-info">
                <article>
                    <strong>Fungsi</strong>
                    <span>Praktik teknologi informasi</span>
                </article>

                <article>
                    <strong>Pengguna</strong>
                    <span>Siswa dan guru</span>
                </article>

                <article>
                    <strong>Program Terkait</strong>
                    <span>TKJ</span>
                </article>
            </div>

            <div class="school-facility-detail-back">
                <a href="{{ url('/fasilitas') }}?page={{ request('from_page', 1) }}"
                   class="school-section-button">
                    ← Kembali ke Fasilitas
                </a>
            </div>
        </div>
    </section>
@endsection