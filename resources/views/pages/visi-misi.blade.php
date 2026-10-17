@extends('layouts.app')

@section('content')
    <section class="school-profile-hero" aria-labelledby="vision-page-title">
        <div class="school-container">
            <p class="school-section-label">Arah Pendidikan</p>

            <h1 id="vision-page-title">Visi &amp; Misi</h1>

            <p class="school-profile-intro">
                Landasan SMK PGRI 31 Legok dalam mengembangkan
                pendidikan, karakter, dan kompetensi peserta didik.
            </p>
        </div>
    </section>

    <section class="school-vision-mission">
        <div class="school-container">
            <article class="school-vision" aria-labelledby="vision-title">
                <p class="school-section-label">Cita-Cita Sekolah</p>
                <h2 id="vision-title">Visi Sekolah</h2>

                <blockquote>
                    Terwujudnya peserta didik yang profesional, bertaqwa,
                    beretika, dan berjiwa interprenuershif sesuai dengan
                    Bidang Keahliannya.
                </blockquote>
            </article>

            <div class="school-mission" aria-labelledby="mission-title">
                <div class="school-mission-heading">
                    <p class="school-section-label">Langkah Bersama</p>

                    <h2 id="mission-title" class="school-section-title">
                        Misi Sekolah
                    </h2>
                </div>

                @php
                    $missions = [
                        'Mengembangkan sekolah sebagai pusat budaya belajar yang religius, berakhlak dan berwawasan global.',
                        'Meningkatkan mutu pembelajaran berbasis ICT.',
                        'Meningkatkan profesionalisme dan manajemen sekolah.',
                        'Meningkatkan peserta didik yang mahir sesuai dengan keahliannya.',
                        'Membina dan meningkatkan kerjasama dengan Dunia Usaha dan Industri serta komponen masyarakat.',
                    ];
                @endphp

                <ol class="school-mission-list">
                    @foreach ($missions as $mission)
                        <li class="school-mission-card">
                            <span class="school-mission-number"
                                  aria-hidden="true">
                                {{ sprintf('%02d', $loop->iteration) }}
                            </span>

                            <p>{{ $mission }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div class="school-vision-action">
                <a href="{{ url('/tentang-Tisata') }}"
                   class="school-section-button">
                    ← Kembali ke Tentang Kami
                </a>
            </div>
        </div>
    </section>
@endsection