@extends('layouts.app')
@section('content')
<section class="bg-blue-900 py-24 text-white"><div class="mx-auto max-w-7xl px-6"><p class="font-semibold uppercase tracking-wider text-green-400">Fasilitas Sekolah</p><h1 class="mt-4 text-5xl font-bold">Kantin Sekolah</h1><p class="mt-5 max-w-2xl text-lg text-blue-100">Tempat yang nyaman untuk memenuhi kebutuhan makanan dan minuman warga sekolah.</p></div></section>
<section class="bg-slate-50 py-20"><div class="mx-auto max-w-7xl px-6"><article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2"><div class="h-80 md:h-[420px]"><img src="{{ asset('images/kantin.jpg') }}" alt="Kantin SMK PGRI 31 Legok" class="h-full w-full object-cover"></div><div class="flex flex-col justify-center p-8 md:p-12"><span class="w-fit rounded-md bg-blue-900 px-3 py-1 text-sm font-bold text-white">KEBUTUHAN SISWA</span><h2 class="mt-5 text-3xl font-bold text-blue-900">Kantin yang Bersih dan Nyaman</h2><p class="mt-4 leading-relaxed text-gray-600">Kantin sekolah menyediakan makanan dan minuman untuk mendukung kebutuhan siswa, guru, dan tenaga kependidikan selama berada di sekolah.</p><p class="mt-4 leading-relaxed text-gray-600">Area kantin juga menjadi tempat beristirahat dan bersosialisasi dengan tetap menjaga kebersihan lingkungan.</p></div></article><div class="mt-12">
    <a href="{{ url('/fasilitas') }}?page={{ request('from_page', 1) }}"
       class="inline-flex items-center rounded-lg border border-blue-900 bg-white px-6 py-3 font-medium text-blue-900 hover:bg-blue-900 hover:text-white">
        ← Kembali ke Fasilitas
    </a>
</div></div></section>
@endsection
