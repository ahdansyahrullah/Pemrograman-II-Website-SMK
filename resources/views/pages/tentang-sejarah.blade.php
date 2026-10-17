@extends('layouts.app')

@section('content')
    <section class="school-profile-hero" aria-labelledby="history-title">
        <div class="school-container">
            <p class="school-section-label">Perjalanan Sekolah</p>

            <h1 id="history-title">Sejarah Sekolah</h1>

            <p class="school-profile-intro">
                Perjalanan SMK PGRI 31 Legok sejak tahun 1997
                dalam mengembangkan pendidikan kejuruan
                di Kabupaten Tangerang.
            </p>
        </div>
    </section>

    <section class="school-history" aria-labelledby="history-heading">
        <div class="school-container">
            <div class="school-history-heading">
                <p class="school-section-label">Tumbuh Bersama Masyarakat</p>

                <h2 id="history-heading" class="school-section-title">
                    Dari Awal Berdiri hingga Kini
                </h2>

                <p>
                    SMK PGRI 31 Legok berkembang melalui dukungan
                    masyarakat dan komitmen untuk menyediakan pendidikan
                    yang membekali peserta didik dengan keterampilan
                    sesuai bidang keahliannya.
                </p>
            </div>

            <ol class="school-history-timeline">
                <li class="school-history-item">
                    <span class="school-history-year">1983</span>

                    <div class="school-history-card">
                        <h3>Awal Perjalanan Pendidikan</h3>
                        <p>
                            SMA PGRI 83 Legok berdiri pada tahun 1983.
                            Keberadaan sekolah ini menjadi awal perjalanan
                            pendidikan yang kemudian berkembang menuju
                            pembukaan sekolah kejuruan pada tahun 1997.
                        </p>
                    </div>
                </li>

                <li class="school-history-item">
                    <span class="school-history-year">1997</span>

                    <div class="school-history-card">
                        <h3>SMK PGRI 31 Legok Berdiri</h3>
                        <p>
                            SMK PGRI 31 Legok mulai berdiri pada tahun 1997
                            di kawasan alun-alun Kecamatan Legok,
                            Kabupaten Tangerang. Sekolah dibangun melalui
                            swadaya masyarakat setempat dan dukungan
                            pemerintah Kecamatan Legok.
                        </p>
                        <p>
                            Pada awalnya, sekolah menggunakan lahan wakaf
                            seluas 3.500 m² dengan luas bangunan 1.578 m².
                            Kegiatan pendidikan dimulai dengan satu
                            rombongan belajar.
                        </p>
                    </div>
                </li>

                <li class="school-history-item">
                    <span class="school-history-year">2006</span>

                    <div class="school-history-card">
                        <h3>Meraih Akreditasi A</h3>
                        <p>
                            Setelah melalui perkembangan status dari
                            terdaftar menjadi diakui, pada tahun 2006
                            sekolah memperoleh akreditasi A untuk dua
                            program keahlian yang dibuka saat itu:
                            Administrasi Perkantoran dan Akuntansi.
                        </p>
                    </div>
                </li>

                <li class="school-history-item">
                    <span class="school-history-year">2009</span>

                    <div class="school-history-card">
                        <h3>Masa Penggunaan Gedung Bersama</h3>
                        <p>
                            Hingga tahun 2009, kegiatan belajar SMK
                            PGRI 31 Legok masih menggunakan gedung
                            secara bergantian dengan SMA PGRI 83 Legok.
                            Pembelajaran SMA berlangsung pada pagi hari,
                            sedangkan pembelajaran SMK berlangsung
                            pada siang hingga sore hari.
                        </p>
                    </div>
                </li>

                <li class="school-history-item">
                    <span class="school-history-year">2010</span>

                    <div class="school-history-card">
                        <h3>Gedung Sendiri dan Program TKJ</h3>
                        <p>
                            Pada tahun 2010, SMK PGRI 31 Legok mulai
                            memiliki gedung sendiri di belakang gedung
                            SMA PGRI 83 Legok. Lahan sekolah memiliki
                            luas 5.538 m² dengan luas bangunan 1.962 m².
                        </p>
                        <p>
                            Pada tahun yang sama, sekolah membuka
                            program keahlian Teknik Komputer dan
                            Jaringan untuk memperluas pilihan
                            pendidikan kejuruan.
                        </p>
                    </div>
                </li>

                <li class="school-history-item">
                    <span class="school-history-year">2026/2027</span>

                    <div class="school-history-card">
                        <h3>Berkembang Menjadi 23 Rombongan Belajar</h3>
                        <p>
                            Pada tahun ajaran 2026/2027, sekolah memiliki
                            23 rombongan belajar dari kelas X hingga XII
                            dengan tiga program keahlian:
                        </p>

                        <ul>
                            <li>Teknik Komputer dan Jaringan (TKJ)</li>
                            <li>Akuntansi dan Keuangan Lembaga (AKL)</li>
                            <li>
                                Manajemen Perkantoran dan Layanan Bisnis
                                (MPLB)
                            </li>
                        </ul>

                        <p>
                            Berdasarkan dokumen sejarah sekolah,
                            ketiga program tersebut memiliki
                            nilai akreditasi A.
                        </p>
                    </div>
                </li>
            </ol>

            <div class="school-history-action">
                <a href="{{ url('/tentang-Tisata') }}"
                   class="school-section-button">
                    ← Kembali ke Tentang Kami
                </a>
            </div>
        </div>
    </section>
@endsection