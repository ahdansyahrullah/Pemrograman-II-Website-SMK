@extends('layouts.app')

@section('content')
<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">
            Kegiatan Siswa
        </p>

        <h1 class="mt-4 text-5xl font-bold">
            Rohani Islam
        </h1>

        <p class="mt-5 max-w-2xl text-lg text-blue-100">
            Membentuk karakter religius, akhlak mulia, dan kebersamaan siswa
            melalui kegiatan keislaman di sekolah.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">
            <div class="min-h-[360px]">
                <img
                    src="{{ asset('images/rohis.jpg') }}"
                    alt="Ekstrakurikuler Rohis SMK PGRI 31 Legok"
                    class="h-full min-h-[360px] w-full object-cover"
                >
            </div>

            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="w-fit rounded-md bg-emerald-600 px-3 py-1 text-sm font-bold text-white">
                    PEMBINAAN KARAKTER
                </span>

                <h2 class="mt-5 text-3xl font-bold text-blue-900">
                    Menumbuhkan Karakter Religius
                </h2>

                <p class="mt-4 leading-relaxed text-gray-600">
                    Rohis menjadi wadah bagi siswa untuk memperdalam pengetahuan
                    agama, membangun akhlak, dan mengembangkan kebiasaan positif.
                </p>

                <p class="mt-4 leading-relaxed text-gray-600">
                    Kegiatan Rohis juga mendorong siswa untuk saling menghargai,
                    bekerja sama, dan aktif dalam kegiatan sosial keagamaan.
                </p>

                <ul class="mt-6 space-y-3 text-blue-900">
                    <li><span class="mr-2 text-green-500">✓</span>Memperdalam pemahaman agama</li>
                    <li><span class="mr-2 text-green-500">✓</span>Membentuk akhlak mulia</li>
                    <li><span class="mr-2 text-green-500">✓</span>Kegiatan keagamaan dan sosial</li>
                    <li><span class="mr-2 text-green-500">✓</span>Membangun kebersamaan siswa</li>
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
                    Pembinaan keagamaan, akhlak, dan kepedulian sosial.
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Nilai yang Dibangun</h3>
                <p class="mt-3 text-gray-600">
                    Religius, disiplin, santun, peduli, dan bertanggung jawab.
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Peserta</h3>
                <p class="mt-3 text-gray-600">
                    Siswa yang ingin mengembangkan karakter dan wawasan keislaman.
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
