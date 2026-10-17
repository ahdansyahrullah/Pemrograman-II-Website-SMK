@extends('layouts.app')

@section('content')
<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">
            Fasilitas Sekolah
        </p>
        <h1 class="mt-4 text-5xl font-bold">Ruang OSIS</h1>
        <p class="mt-5 max-w-2xl text-lg text-blue-100">
            Ruang kegiatan organisasi siswa untuk mengembangkan
            kepemimpinan, kerja sama, dan tanggung jawab.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">
            <div class="h-80 md:h-[420px]">
                <img src="{{ asset('images/gedung.jpg') }}"
                     alt="Ruang OSIS SMK PGRI 31 Legok"
                     class="h-full w-full object-cover">
            </div>

            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="w-fit rounded-md bg-blue-900 px-3 py-1 text-sm font-bold text-white">
                    ORGANISASI SISWA
                </span>

                <h2 class="mt-5 text-3xl font-bold text-blue-900">
                    Ruang Kolaborasi dan Kepemimpinan
                </h2>

                <p class="mt-4 leading-relaxed text-gray-600">
                    Ruang OSIS mendukung kegiatan pengurus organisasi
                    siswa dalam merencanakan dan mengoordinasikan
                    program kesiswaan.
                </p>

                <p class="mt-4 leading-relaxed text-gray-600">
                    Melalui kegiatan organisasi, siswa dapat melatih
                    komunikasi, kerja sama, serta tanggung jawab
                    dalam menjalankan tugas bersama.
                </p>
            </div>
        </article>

        @php
            $kegiatan = [
                ['Rapat dan Koordinasi', 'Tempat berdiskusi dan menyusun rencana kegiatan organisasi siswa.'],
                ['Administrasi Organisasi', 'Mendukung pengelolaan dokumen dan kebutuhan administrasi OSIS.'],
                ['Perencanaan Kegiatan', 'Mendukung persiapan program dan kegiatan kesiswaan di sekolah.'],
            ];
        @endphp

        <h2 class="mt-16 text-center text-3xl font-bold text-blue-900">
            Kegiatan di Ruang OSIS
        </h2>

        <div class="mt-8 grid gap-6 md:grid-cols-3">
            @foreach ($kegiatan as [$judul, $deskripsi])
                <article class="rounded-xl bg-white p-6 shadow-sm">
                    <h3 class="font-bold text-blue-900">{{ $judul }}</h3>
                    <p class="mt-3 leading-relaxed text-gray-600">
                        {{ $deskripsi }}
                    </p>
                </article>
            @endforeach
        </div>

        <div class="school-facility-back">
    <a href="{{ url('/fasilitas') }}?page={{ request('from_page', 1) }}"
       class="school-facility-back-button">
        ← Kembali ke Fasilitas
    </a>
</div>
    </div>
</section>
@endsection