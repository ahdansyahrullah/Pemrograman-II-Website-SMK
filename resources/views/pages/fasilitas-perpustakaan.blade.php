@extends('layouts.app')

@section('content')
<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">Fasilitas Sekolah</p>
        <h1 class="mt-4 text-5xl font-bold">Perpustakaan</h1>
        <p class="mt-5 max-w-2xl text-lg text-blue-100">Pusat literasi dan sumber belajar untuk mendukung perkembangan wawasan peserta didik.</p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">
            <div class="min-h-[360px]"><img src="/images/perpustakaan.jpg" alt="Perpustakaan SMK PGRI 31 Legok" class="h-full min-h-[360px] w-full object-cover"></div>
            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="w-fit rounded-md bg-blue-900 px-3 py-1 text-sm font-bold text-white">LITERASI</span>
                <h2 class="mt-5 text-3xl font-bold text-blue-900">Ruang Membaca dan Sumber Belajar</h2>
                <p class="mt-4 leading-relaxed text-gray-600">Perpustakaan SMK PGRI 31 Legok menyediakan berbagai sumber informasi untuk membantu siswa dalam kegiatan belajar.</p>
                <p class="mt-4 leading-relaxed text-gray-600">Selain sebagai tempat membaca, perpustakaan menjadi ruang pengembangan budaya literasi dan peningkatan wawasan peserta didik.</p>
            </div>
        </article>
    </div>
</section>

@php
$fasilitas = [
    ['📚', 'Koleksi Buku', 'Referensi pembelajaran untuk mendukung kegiatan akademik siswa.'],
    ['📖', 'Area Membaca', 'Ruang nyaman untuk membaca dan belajar secara mandiri.'],
    ['💻', 'Literasi Digital', 'Akses informasi melalui teknologi dan sumber belajar digital.'],
];
$galeri = ['/images/perpustakaan.jpg', '/images/perpustakaan.jpg', '/images/perpustakaan.jpg'];
@endphp

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">
        <h2 class="text-center text-3xl font-bold text-blue-900">Fasilitas Perpustakaan</h2>
        <div class="mt-10 grid gap-8 md:grid-cols-3">
            @foreach ($fasilitas as $f)
                <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                    <div class="text-4xl">{{ $f[0] }}</div>
                    <h3 class="mt-4 font-bold text-blue-900">{{ $f[1] }}</h3>
                    <p class="mt-3 text-gray-600">{{ $f[2] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <h2 class="text-center text-3xl font-bold text-blue-900">Galeri Perpustakaan</h2>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            @foreach ($galeri as $foto)
                <img src="{{ $foto }}" alt="Perpustakaan SMK PGRI 31 Legok" class="h-72 w-full rounded-xl object-cover shadow">
            @endforeach
                <div class="school-facility-back">
    <a href="{{ url('/fasilitas') }}?page={{ request('from_page', 1) }}"
       class="school-facility-back-button">
        ← Kembali ke Fasilitas
    </a>
</div>
    </div>
</section>
@endsection
