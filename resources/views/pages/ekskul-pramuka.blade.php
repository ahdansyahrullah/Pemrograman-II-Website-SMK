@extends('layouts.app')

@section('content')
<section class="bg-blue-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6">
        <p class="font-semibold uppercase tracking-wider text-green-400">Ekstrakurikuler</p>
        <h1 class="mt-4 text-5xl font-bold">Pramuka</h1>
        <p class="mt-5 max-w-2xl text-lg text-blue-100">Membentuk karakter disiplin, mandiri, dan bertanggung jawab melalui kegiatan kepramukaan.</p>
    </div>
</section>

<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">
        <article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2">
            <div class="min-h-[360px]"><img src="{{ asset('images/pramuka1.jpg') }}" alt="Kegiatan Pramuka SMK PGRI 31 Legok" class="h-full min-h-[360px] w-full object-cover"></div>
            <div class="flex flex-col justify-center p-8 md:p-12">
                <span class="w-fit rounded-md bg-blue-900 px-3 py-1 text-sm font-bold text-white">WAJIB</span>
                <h2 class="mt-5 text-3xl font-bold text-blue-900">Belajar Memimpin dan Bekerja Sama</h2>
                <p class="mt-4 leading-relaxed text-gray-600">Ekstrakurikuler Pramuka menjadi wadah pembentukan karakter siswa melalui latihan disiplin, kemandirian, kepemimpinan, dan kepedulian terhadap lingkungan.</p>
                <p class="mt-4 leading-relaxed text-gray-600">Kegiatan dilaksanakan secara aktif melalui latihan rutin, kegiatan lapangan, dan kerja sama tim.</p>
            </div>
        </article>
    </div>
</section>

<section class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid gap-6 md:grid-cols-3">
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm"><h3 class="font-bold text-blue-900">Pembina</h3><p class="mt-3 text-gray-600">Guru Pembina Ekstrakurikuler</p></article>
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm"><h3 class="font-bold text-blue-900">Jadwal Latihan</h3><p class="mt-3 text-gray-600">Sabtu, 08.00–10.00</p></article>
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm"><h3 class="font-bold text-blue-900">Lokasi</h3><p class="mt-3 text-gray-600">Area sekolah dan lapangan</p></article>
        </div>

        @php
            $manfaat = ['Melatih jiwa kepemimpinan', 'Meningkatkan disiplin dan tanggung jawab', 'Mengembangkan kemampuan kerja sama tim', 'Membentuk karakter mandiri dan peduli lingkungan'];
            $prestasi = ['Kegiatan kepramukaan sekolah', 'Latihan kepemimpinan siswa', 'Kegiatan sosial dan lingkungan'];
        @endphp

        <div class="mt-10 grid gap-8 md:grid-cols-2">
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm"><h3 class="text-xl font-bold text-blue-900">Manfaat Latihan</h3><ul class="mt-4 space-y-2 text-gray-600">@foreach ($manfaat as $item)<li><span class="mr-2 text-green-500">✓</span>{{ $item }}</li>@endforeach</ul></article>
            <article class="rounded-xl bg-slate-50 p-6 shadow-sm"><h3 class="text-xl font-bold text-blue-900">Program Kegiatan</h3><ul class="mt-4 space-y-2 text-gray-600">@foreach ($prestasi as $item)<li><span class="mr-2 text-green-500">✓</span>{{ $item }}</li>@endforeach</ul></article>
        </div>

        <div class="mt-12 flex flex-wrap justify-center gap-4">
    <a
        href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20bergabung%20dengan%20Ekstrakurikuler%20Pramuka"
        target="_blank"
        rel="noopener"
        class="inline-block rounded-lg bg-green-500 px-6 py-3 font-semibold text-white hover:bg-green-600"
    >
        Hubungi Pembina
    </a>

    <a
        href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20bergabung%20dengan%20Ekstrakurikuler%20Pramuka"
        target="_blank"
        rel="noopener"
        class="inline-block rounded-lg bg-blue-900 px-6 py-3 font-semibold text-white hover:bg-blue-800"
    >
        Gabung Ekskul →
    </a>
</div>
        
        <div class="mt-12 text-center"><a href="{{ url('/ekstrakurikuler') }}" class="inline-block rounded-lg bg-blue-900 px-6 py-3 font-semibold text-white hover:bg-blue-800">← Kembali ke Ekstrakurikuler</a></div>
    </div>
</section>
@endsection
