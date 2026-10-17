@extends('layouts.app')

@section('content')
<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">
            Kegiatan Siswa
        </p>

        <h1 class="mt-4 text-5xl font-bold">
            Palang Merah Remaja
        </h1>

        <p class="mt-5 max-w-2xl text-lg text-blue-100">
            Mengembangkan kepedulian sosial, keterampilan pertolongan pertama,
            dan jiwa kemanusiaan siswa.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">

            <div class="min-h-[360px]">
                <img
                    src="{{ asset('images/pmr.jpg') }}"
                    alt="Ekstrakurikuler PMR SMK PGRI 31 Legok"
                    class="h-full min-h-[360px] w-full object-cover"
                >
            </div>

            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="w-fit rounded-md bg-red-600 px-3 py-1 text-sm font-bold text-white">
                    KEGIATAN KEMANUSIAAN
                </span>

                <h2 class="mt-5 text-3xl font-bold text-blue-900">
                    Belajar Menolong dan Peduli Sesama
                </h2>

                <p class="mt-4 leading-relaxed text-gray-600">
                    PMR menjadi wadah bagi siswa untuk mempelajari pertolongan
                    pertama, kesehatan remaja, dan nilai-nilai kemanusiaan.
                </p>

                <p class="mt-4 leading-relaxed text-gray-600">
                    Kegiatan ini melatih kepedulian, tanggung jawab, kerja sama,
                    serta kesiapan siswa membantu warga sekolah dalam keadaan darurat.
                </p>

                <ul class="mt-6 space-y-3 text-blue-900">
                    <li><span class="mr-2 text-green-500">✓</span>Peltihan pertolongan pertama</li>
                    <li><span class="mr-2 text-green-500">✓</span>Edukasi pola hidup sehat</li>
                    <li><span class="mr-2 text-green-500">✓</span>Simulasi tanggap darurat</li>
                    <li><span class="mr-2 text-green-500">✓</span>Kegiatan sosial dan kemanusiaan</li>
                </ul>
            </div>
        </article>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">

        <div class="grid gap-6 md:grid-cols-3">
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Fokus Kegiatan</h3>
                <p class="mt-3 text-gray-600">
                    Kesehatan, pertolongan pertama, dan kemanusiaan.
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Karakter yang Dilatih</h3>
                <p class="mt-3 text-gray-600">
                    Peduli, sigap, disiplin, bertanggung jawab, dan mampu bekerja sama.
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Peserta</h3>
                <p class="mt-3 text-gray-600">
                    Siswa SMK PGRI 31 Legok yang tertarik pada kegiatan sosial dan kesehatan.
                </p>
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

        <div class="school-facility-back mt-8 text-center">
            <a
                href="{{ url('/ekstrakurikuler') }}"
                class="school-facility-back-button"
            >
                ← Kembali ke Ekstrakurikuler
            </a>
        </div>

    </div>
</section>
@endsection