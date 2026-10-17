@extends('layouts.app')

@section('content')
<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">Fasilitas Sekolah</p>
        <h1 class="mt-4 text-5xl font-bold">Unit Kesehatan Sekolah</h1>
        <p class="mt-5 max-w-2xl text-lg text-blue-100">Ruang pelayanan kesehatan untuk mendukung keselamatan dan kenyamanan siswa selama berada di sekolah.</p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">
            <div class="min-h-[360px]"><img src="/images/uks.jpg" alt="UKS SMK PGRI 31 Legok" class="h-full min-h-[360px] w-full object-cover"></div>
            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="w-fit rounded-md bg-blue-900 px-3 py-1 text-sm font-bold text-white">KESEHATAN SISWA</span>
                <h2 class="mt-5 text-3xl font-bold text-blue-900">Ruang UKS yang Siap Mendukung Siswa</h2>
                <p class="mt-4 leading-relaxed text-gray-600">UKS merupakan fasilitas pelayanan kesehatan siswa untuk memberikan pertolongan pertama dan pemeriksaan dasar ketika dibutuhkan.</p>
                <p class="mt-4 leading-relaxed text-gray-600">Keberadaan UKS membantu menciptakan lingkungan sekolah yang aman, sehat, dan nyaman bagi seluruh warga sekolah.</p>
                <ul class="mt-6 space-y-3 text-blue-900">
                    <li><span class="mr-2 text-green-500">✓</span>Pertolongan pertama bagi siswa</li>
                    <li><span class="mr-2 text-green-500">✓</span>Pemeriksaan kesehatan dasar</li>
                    <li><span class="mr-2 text-green-500">✓</span>Tempat istirahat sementara</li>
                    <li><span class="mr-2 text-green-500">✓</span>Edukasi perilaku hidup sehat</li>
                </ul>
            </div>
        </article>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid gap-6 md:grid-cols-3">
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Fungsi</h3>
                <p class="mt-3 text-gray-600">
                    Pelayanan kesehatan siswa.
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Pengguna</h3>
                <p class="mt-3 text-gray-600">
                    Siswa, guru, dan tenaga kependidikan.
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Layanan</h3>
                <p class="mt-3 text-gray-600">
                    Pertolongan pertama dan pemeriksaan dasar.
                </p>
            </article>
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
