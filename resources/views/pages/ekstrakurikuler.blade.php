@extends('layouts.app')

@section('content')

<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">
            Kegiatan Siswa
        </p>

        <h1 class="mt-4 text-5xl font-bold">
            Ekstrakurikuler
        </h1>

        <p class="mt-5 max-w-2xl text-lg text-blue-100">
            Kembangkan bakat dan minat melalui beragam kegiatan ekstrakurikuler.
        </p>
    </div>
</section>

@php
$ekskul = [
    [
        'image' => 'images/pramuka.jpg',
        'name' => 'Pramuka',
        'description' => 'Pembentukan karakter, kepemimpinan, dan cinta alam melalui kegiatan kepramukaan.',
        'path' => '/ekstrakurikuler/pramuka',
    ],
    [
        'image' => 'images/paskibra.jpg',
        'name' => 'Paskibra',
        'description' => 'Melatih kedisiplinan, nasionalisme, dan semangat bela negara.',
        'path' => '/ekstrakurikuler/paskibra',
    ],
    [
        'image' => 'images/futsal1.jpg',
        'name' => 'Futsal',
        'description' => 'Olahraga tim yang melatih kerja sama, strategi, dan kebugaran fisik.',
        'path' => '/ekstrakurikuler/futsal',
    ],
    [
        'image' => 'images/pmr.jpg',
        'name' => 'PMR',
        'description' => 'Palang Merah Remaja untuk belajar pertolongan pertama dan kemanusiaan.',
        'path' => '/ekstrakurikuler/pmr'
    ],
    [
        'image' => 'images/seniman.jpg',
        'name' => 'Seni',
        'description' => 'Wadah kreativitas siswa dalam bidang seni dan budaya.',
        'path' => '/ekstrakurikuler/seni'
    ],
    [
        'image' => 'images/rohis.jpg',
        'name' => 'Rohis',
        'description' => 'Membentuk karakter religius dan kegiatan positif siswa.',
        'path' => '/ekstrakurikuler/rohis'
    ],
];
@endphp

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid gap-8 md:grid-cols-2">
            @foreach ($ekskul as $e)
                <article class="overflow-hidden rounded-2xl bg-white shadow-lg transition hover:-translate-y-1">
                    <img
                        src="{{ asset($e['image']) }}"
                        alt="{{ $e['name'] }}"
                        class="h-72 w-full object-cover"
                    >

                    <div class="p-7">
                        <h2 class="text-2xl font-bold text-blue-900">
                            {{ $e['name'] }}
                        </h2>

                        <p class="mt-3 leading-relaxed text-gray-600">
                            {{ $e['description'] }}
                        </p>

                        @if ($e['path'] !== '#')
                            <a
                                href="{{ url($e['path']) }}"
                                class="mt-5 inline-block font-semibold text-green-600"
                            >
                                Lihat Detail →
                            </a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

@endsection