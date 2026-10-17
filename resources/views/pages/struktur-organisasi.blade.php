@extends('layouts.app')

@section('content')
    <section class="school-profile-hero" aria-labelledby="organization-title">
        <div class="school-container">
            <p class="school-section-label">Pengelolaan Sekolah</p>

            <h1 id="organization-title">Struktur Organisasi</h1>

            <p class="school-profile-intro">
                Struktur kepegawaian SMK PGRI 31 Legok
                Kabupaten Tangerang.
            </p>
        </div>
    </section>

    <section class="school-organization"
             aria-labelledby="organization-document-title">
        <div class="school-container">
            <div class="school-organization-heading">
                <div>
                    <p class="school-section-label">Struktur Kepegawaian</p>

                    <h2 id="organization-document-title"
                        class="school-section-title">
                        Organisasi Sekolah
                    </h2>
                </div>

                <div class="school-organization-actions">
                    <a
                        href="{{ asset('documents/struktur-organisasi.pdf') }}"
                        target="_blank"
                        rel="noopener"
                        class="school-section-button"
                    >
                        Buka PDF ↗
                    </a>

                    <a
                        href="{{ asset('documents/struktur-organisasi.pdf') }}"
                        download="Struktur-Organisasi-SMK-PGRI-31-Legok.pdf"
                        class="school-section-button"
                    >
                        Unduh PDF ↓
                    </a>
                </div>
            </div>

            <p class="school-organization-description">
            Ringkasan pimpinan, pengelola sekolah, dan kepala program
            keahlian SMK PGRI 31 Legok. Struktur kepegawaian lengkap
            tersedia melalui tombol Buka PDF dan Unduh PDF.
            </p>

            {{-- Ringkasan jabatan berdasarkan dokumen struktur kepegawaian --}}
<div class="school-org-chart">
    <article class="school-org-chief">
        <p>Kepala Sekolah</p>
        <h3>Bella Nur Afinda, M.Pd., Gr.</h3>
    </article>

    <section class="school-org-group" aria-labelledby="org-management">
        <h3 id="org-management" class="school-org-group-title">
            Pengelola Sekolah
        </h3>

        <div class="school-org-grid">
            @foreach ([
                ['Wakasek Kesiswaan', 'Ahmad Entong R., S.Pd., Gr.'],
                ['Wakasek Sarpras', 'Reza Rasidi, S.Pd., Gr.'],
                ['Wakasek Kurikulum', 'Andi Subiantoro, SE., Gr.'],
                ['Wakasek Humas', 'Achmad Rodjidin, SE.'],
                ['Kepala Staf Tata Usaha', 'Riean Sofiana'],
                ['Bendahara Sekolah', 'Niyuliyani, S.Pd., SM., Gr.'],
            ] as [$position, $name])
                <article class="school-org-card">
                    <p>{{ $position }}</p>
                    <h4>{{ $name }}</h4>
                </article>
            @endforeach
        </div>
    </section>

    <section class="school-org-group" aria-labelledby="org-programs">
        <h3 id="org-programs" class="school-org-group-title">
            Kepala Program Keahlian
        </h3>

        <div class="school-org-grid">
            @foreach ([
                ['TKJ', 'Endang Sudrajat, S.Kom., Gr.'],
                ['AKL', 'Suharno, SE., M.Ak.'],
                ['MPLB', 'Suparti, M.Pd.'],
            ] as [$position, $name])
                <article class="school-org-card">
                    <p>{{ $position }}</p>
                    <h4>{{ $name }}</h4>
                </article>
            @endforeach
        </div>
    </section>
</div>

<p class="school-organization-help">
    Ringkasan ini menampilkan pimpinan dan pengelola sekolah.
    Struktur lengkap beserta badan pengawas harian, komite,
    guru, wali kelas, dan tenaga kependidikan tersedia pada PDF.
</p>

            <div class="school-organization-back">
                <a href="{{ url('/tentang-Tisata') }}"
                   class="school-section-button">
                    ← Kembali ke Tentang Kami
                </a>
            </div>
        </div>
    </section>
@endsection