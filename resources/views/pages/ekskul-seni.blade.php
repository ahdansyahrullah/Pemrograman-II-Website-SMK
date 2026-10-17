@extends('layouts.app')

@section('content')
<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">
            Kegiatan Siswa
        </p>

        <h1 class="mt-4 text-5xl font-bold">
            Ekstrakurikuler Seni
        </h1>

        <p class="mt-5 max-w-2xl text-lg text-blue-100">
            Wadah bagi siswa untuk mengembangkan kreativitas, ekspresi diri,
            dan apresiasi terhadap seni dan budaya.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">
            <div class="min-h-[360px]">
                <img
                    src="{{ asset('images/seniman.jpg') }}"
                    alt="Ekstrakurikuler Seni SMK PGRI 31 Legok"
                    class="h-full min-h-[360px] w-full object-cover"
                >
            </div>

            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="w-fit rounded-md bg-purple-600 px-3 py-1 text-sm font-bold text-white">
                    KREATIVITAS SISWA
                </span>

                <h2 class="mt-5 text-3xl font-bold text-blue-900">
                    Berkarya dan Mengekspresikan Diri
                </h2>

                <p class="mt-4 leading-relaxed text-gray-600">
                    Ekstrakurikuler Seni memberikan ruang bagi siswa untuk
                    mengembangkan minat dan bakat melalui berbagai kegiatan seni.
                </p>

                <p class="mt-4 leading-relaxed text-gray-600">
                    Siswa dapat belajar berkarya, berlatih tampil percaya diri,
                    serta mengenal dan melestarikan seni budaya Indonesia.
                </p>

                <ul class="mt-6 space-y-3 text-blue-900">
                    <li><span class="mr-2 text-green-500">✓</span>Mengembangkan kreativitas siswa</li>
                    <li><span class="mr-2 text-green-500">✓</span>Melatih kepercayaan diri</li>
                    <li><span class="mr-2 text-green-500">✓</span>Mengenal seni dan budaya</li>
                    <li><span class="mr-2 text-green-500">✓</span>Menyalurkan minat dan bakat</li>
                </ul>
            </div>
        </article>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid gap-6 md:grid-cols-3">
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Bidang Kegiatan</h3>
                <p class="mt-3 text-gray-600">
                    Musik, tari, teater, seni rupa, dan kreativitas lainnya.
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Manfaat</h3>
                <p class="mt-3 text-gray-600">
                    Meningkatkan kreativitas, keberanian, dan kemampuan bekerja sama.
                </p>
            </article>

            <article class="rounded-xl bg-slate-50 p-6 shadow-sm">
                <h3 class="font-bold text-blue-900">Peserta</h3>
                <p class="mt-3 text-gray-600">
                    Siswa yang memiliki minat dan bakat di bidang seni dan budaya.
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
