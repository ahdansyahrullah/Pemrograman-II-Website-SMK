@extends('layouts.app')

@section('content')
<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">Fasilitas Sekolah</p>
        <h1 class="mt-4 text-5xl font-bold">Ruang Kelas</h1>
        <p class="mt-5 max-w-2xl text-lg text-blue-100">Lingkungan belajar yang nyaman untuk mendukung proses pembelajaran siswa.</p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">
            <div class="min-h-[360px]"><img src="/images/kelas.jpg" alt="Ruang Kelas SMK PGRI 31 Legok" class="h-full min-h-[360px] w-full object-cover"></div>
            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="w-fit rounded-md bg-blue-900 px-3 py-1 text-sm font-bold text-white">PEMBELAJARAN</span>
                <h2 class="mt-5 text-3xl font-bold text-blue-900">Ruang Belajar yang Nyaman</h2>
                <p class="mt-4 leading-relaxed text-gray-600">Ruang kelas SMK PGRI 31 Legok dirancang untuk memberikan suasana belajar yang nyaman, kondusif, dan mendukung interaksi antara guru dengan peserta didik.</p>
                <p class="mt-4 leading-relaxed text-gray-600">Dengan lingkungan pembelajaran yang baik, siswa dapat mengikuti kegiatan akademik maupun praktik secara optimal.</p>
            </div>
        </article>
    </div>
</section>

@php
$fasilitas = [
    ['🪑', 'Meja dan Kursi Belajar', 'Mendukung kenyamanan siswa selama proses pembelajaran.'],
    ['📚', 'Media Pembelajaran', 'Mendukung kegiatan belajar dengan berbagai media pembelajaran.'],
    ['💡', 'Lingkungan Nyaman', 'Menciptakan suasana belajar yang aman dan nyaman.'],
];
$galeri = ['/images/kelas.jpg', '/images/kelas.jpg', '/images/kelas.jpg'];
@endphp

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">
        <h2 class="text-center text-3xl font-bold text-blue-900">Fasilitas Ruang Kelas</h2>
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
        <h2 class="text-center text-3xl font-bold text-blue-900">Galeri Ruang Kelas</h2>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            @foreach ($galeri as $foto)
                <img src="{{ $foto }}" alt="Ruang Kelas SMK PGRI 31 Legok" class="h-72 w-full rounded-xl object-cover shadow">
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
