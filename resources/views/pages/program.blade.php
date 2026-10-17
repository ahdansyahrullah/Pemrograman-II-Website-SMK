@extends('layouts.app')

@section('content')
    <section class="school-profile-hero" aria-labelledby="program-page-title">
        <div class="school-container">
            <p class="school-section-label">Pilih Jurusanmu</p>

            <h1 id="program-page-title">Program Keahlian</h1>

            <p class="school-profile-intro">
                Tiga program keahlian untuk mengembangkan
                keterampilan sesuai minat dan bakatmu.
            </p>
        </div>
    </section>

    @php
        $programs = [
            [
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Program yang membekali siswa dengan keterampilan di bidang komputer, jaringan, dan administrasi sistem.',
                'image' => 'images/tkj.jpg',
                'careers' => [
                    'Teknisi Jaringan',
                    'IT Support',
                    'Administrator Sistem',
                    'Teknisi Komputer',
                ],
                'path' => '/program/tkj',
                'style' => 'tkj',
            ],
            [
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'description' => 'Program yang mengembangkan keterampilan pencatatan transaksi, penyusunan laporan keuangan, dan administrasi perpajakan.',
                'image' => 'images/akl.jpg',
                'careers' => [
                    'Staf Akuntansi',
                    'Staf Keuangan',
                    'Administrasi Pajak',
                    'Administrasi Pembukuan',
                ],
                'path' => '/program/akl',
                'style' => 'akl',
            ],
            [
                'code' => 'MPLB',
                'name' => 'Manajemen Perkantoran dan Layanan Bisnis',
                'description' => 'Program yang membekali siswa dengan keterampilan administrasi perkantoran, pengelolaan dokumen, komunikasi bisnis, dan layanan pelanggan.',
                'image' => 'images/mplb.jpg',
                'careers' => [
                    'Administrasi Perkantoran',
                    'Sekretaris',
                    'Resepsionis',
                    'Staf Layanan Pelanggan',
                ],
                'path' => '/program/mplb',
                'style' => 'mplb',
            ],
        ];
    @endphp

    <section class="school-program-directory"
             aria-label="Daftar program keahlian">
        <div class="school-container school-program-directory-list">
            @foreach ($programs as $program)
                <article
                    class="school-program-feature school-program-feature-{{ $program['style'] }}"
                    aria-labelledby="program-{{ $program['style'] }}-title"
                >
                    <div class="school-program-feature-photo">
                        <img
                            src="{{ asset($program['image']) }}"
                            alt=""
                            loading="lazy"
                            decoding="async"
                        >
                    </div>

                    <div class="school-program-feature-content">
                        <span class="school-program-feature-code">
                            {{ $program['code'] }}
                        </span>

                        <h2 id="program-{{ $program['style'] }}-title">
                            {{ $program['name'] }}
                        </h2>

                        <p class="school-program-feature-description">
                            {{ $program['description'] }}
                        </p>

                        <p class="school-program-careers-label">
                            Peluang Karier:
                        </p>

                        <ul class="school-program-careers">
                            @foreach ($program['careers'] as $career)
                                <li>{{ $career }}</li>
                            @endforeach
                        </ul>

                        <a
                            href="{{ url($program['path']) }}"
                            class="school-program-feature-button"
                            aria-label="Pelajari lebih lanjut tentang {{ $program['name'] }}"
                        >
                            Pelajari Lebih Lanjut
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection