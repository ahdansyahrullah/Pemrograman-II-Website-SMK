@extends('layouts.app')

@section('content')
<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">
            Ekstrakurikuler
        </p>

        <h1 class="mt-4 text-5xl font-bold">Paskibra</h1>

        <p class="mt-5 max-w-2xl text-lg text-blue-100">
            Melatih kedisiplinan, nasionalisme, dan semangat bela negara.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">
            <div class="min-h-[360px]">
                <img
                    src="{{ asset('images/paskibra1.jpg') }}"
                    alt="Kegiatan Paskibra SMK PGRI 31 Legok"
                    class="h-full min-h-[360px] w-full object-cover"
                >
            </div>

            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="w-fit rounded-md bg-blue-900 px-3 py-1 text-sm font-bold text-white">
                    NASIONALISME
                </span>

                <h2 class="mt-5 text-3xl font-bold text-blue-900">
                    Membentuk Disiplin dan Jiwa Kepemimpinan
                </h2>

                <p class="mt-4 leading-relaxed text-gray-600">
                    Ekstrakurikuler Paskibra menjadi wadah bagi siswa
                    untuk melatih kedisiplinan, ketahanan fisik,
                    tanggung jawab, dan kerja sama tim.
                </p>

                <p class="mt-4 leading-relaxed text-gray-600">
                    Kegiatan Paskibra juga menumbuhkan rasa nasionalisme
                    dan kesiapan siswa dalam menjalankan tugas upacara
                    bendera di sekolah.
                </p>
            </div>
        </article>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid gap-6 md:grid-cols-3">
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Pembina</h3>
                <p class="mt-3 text-gray-600">
                    Guru Pembina Ekstrakurikuler
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Jadwal Latihan</h3>
                <p class="mt-3 text-gray-600">
                    Sabtu, 08.00–10.00
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Lokasi</h3>
                <p class="mt-3 text-gray-600">
                    Lapangan sekolah
                </p>
            </article>
        </div>

        <div class="mt-10 grid gap-8 md:grid-cols-2">
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="text-xl font-bold text-blue-900">
                    Manfaat Latihan
                </h3>

                <ul class="mt-4 space-y-2 text-gray-600">
                    <li>✓ Meningkatkan kedisiplinan</li>
                    <li>✓ Melatih ketahanan fisik</li>
                    <li>✓ Membangun rasa tanggung jawab</li>
                    <li>✓ Mengembangkan kerja sama tim</li>
                </ul>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="text-xl font-bold text-blue-900">
                    Program Kegiatan
                </h3>

                <ul class="mt-4 space-y-2 text-gray-600">
                    <li>✓ Latihan baris-berbaris</li>
                    <li>✓ Persiapan upacara bendera</li>
                    <li>✓ Pelatihan kepemimpinan</li>
                    <li>✓ Kegiatan nasionalisme siswa</li>
                </ul>
            </article>
        </div>

        <div class="mt-12 flex flex-wrap justify-center gap-4">
            <a
                href="https://wa.me/6281234567890"
                target="_blank"
                rel="noopener"
                class="rounded-lg bg-green-500 px-6 py-3 font-semibold text-white"
            >
                Hubungi Pembina
            </a>

            <a
                href="https://wa.me/6281234567890"
                target="_blank"
                rel="noopener"
                class="rounded-lg bg-blue-900 px-6 py-3 font-semibold text-white"
            >
                Gabung Ekskul →
            </a>
        </div>

        <div class="mt-6 text-center">
            <a
                href="{{ url('/ekstrakurikuler') }}"
                class="inline-block rounded-lg bg-blue-900 px-6 py-3 font-semibold text-white"
            >
                ← Kembali ke Ekstrakurikuler
            </a>
        </div>
    </div>
</section>
@endsection