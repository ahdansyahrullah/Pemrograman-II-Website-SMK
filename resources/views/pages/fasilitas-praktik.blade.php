@extends('layouts.app')

@section('content')

<section class="bg-blue-900 text-white py-24">
    <div class="max-w-7xl mx-auto px-6">
        <p class="text-green-400 font-semibold uppercase tracking-wider">Fasilitas Keahlian</p>
        <h1 class="mt-4 text-5xl font-bold">Ruang Praktik</h1>
        <p class="mt-5 max-w-2xl text-lg text-blue-100">
            Ruang praktik yang disiapkan untuk mendukung pembelajaran sesuai program keahlian.
        </p>
    </div>
</section>

@php
$ruangPraktik = [
    [
        'kode' => 'TKJ',
        'nama' => 'Ruang Praktik TKJ',
        'image' => '/images/rps-tkj.jfif',
        'deskripsi' => 'Ruang praktik untuk mengembangkan keterampilan komputer, jaringan, perangkat keras, dan administrasi sistem.',
        'kegiatan' => ['Perakitan komputer', 'Konfigurasi jaringan', 'Administrasi server'],
    ],
    [
        'kode' => 'AKL',
        'nama' => 'Ruang Praktik AKL',
        'image' => '/images/rps-akl.jfif',
        'deskripsi' => 'Ruang praktik untuk melatih pencatatan transaksi, penyusunan laporan keuangan, dan administrasi perpajakan.',
        'kegiatan' => ['Pencatatan transaksi', 'Penyusunan laporan', 'Simulasi administrasi keuangan'],
    ],
    [
        'kode' => 'MPLB',
        'nama' => 'Ruang Praktik MPLB',
        'image' => '/images/rps-mplb.jfif',
        'deskripsi' => 'Ruang praktik untuk mengembangkan keterampilan administrasi perkantoran, komunikasi bisnis, dan layanan pelanggan.',
        'kegiatan' => ['Simulasi perkantoran', 'Pengelolaan dokumen', 'Praktik layanan pelanggan'],
    ],
];
@endphp

<section class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6 space-y-10">
        @foreach ($ruangPraktik as $ruang)
            <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">
                <div class="min-h-[320px] {{ $loop->even ? 'md:order-2' : '' }}">
                    <img src="{{ $ruang['image'] }}" alt="{{ $ruang['nama'] }}" class="h-full min-h-[320px] w-full object-cover">
                </div>
                <div class="flex flex-col justify-center p-8 md:p-12 {{ $loop->even ? 'md:order-1' : '' }}">
                    <span class="w-fit rounded-md bg-blue-900 px-3 py-1 text-sm font-bold text-white">{{ $ruang['kode'] }}</span>
                    <h2 class="mt-5 text-3xl font-bold text-blue-900">{{ $ruang['nama'] }}</h2>
                    <p class="mt-4 leading-relaxed text-gray-600">{{ $ruang['deskripsi'] }}</p>
                    <p class="mt-6 font-semibold text-blue-900">Kegiatan praktik:</p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach ($ruang['kegiatan'] as $kegiatan)
                            <span class="rounded-full bg-blue-50 px-3 py-2 text-sm text-blue-800">{{ $kegiatan }}</span>
                        @endforeach
                    </div>
                </div>
            </article>
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
