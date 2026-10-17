@extends('layouts.app')
@section('content')
<section class="bg-blue-900 py-24 text-white"><div class="mx-auto max-w-7xl px-6"><p class="font-semibold uppercase tracking-wider text-green-400">Fasilitas Sekolah</p><h1 class="mt-4 text-5xl font-bold">Mushola</h1><p class="mt-5 max-w-2xl text-lg text-blue-100">Tempat ibadah yang nyaman untuk mendukung kegiatan keagamaan warga sekolah.</p></div></section>
<section class="bg-slate-50 py-20"><div class="mx-auto max-w-7xl px-6"><article class="grid overflow-hidden rounded-2xl bg-white shadow-lg md:grid-cols-2"><div class="h-80 md:h-[420px]"><img src="{{ asset('images/mushola.jpg') }}" alt="Mushola SMK PGRI 31 Legok" class="h-full w-full object-cover"></div><div class="flex flex-col justify-center p-8 md:p-12"><span class="w-fit rounded-md bg-blue-900 px-3 py-1 text-sm font-bold text-white">KEGIATAN KEAGAMAAN</span><h2 class="mt-5 text-3xl font-bold text-blue-900">Ruang Ibadah dan Pembinaan Karakter</h2><p class="mt-4 leading-relaxed text-gray-600">Mushola sekolah menjadi tempat ibadah yang dapat digunakan oleh siswa, guru, dan tenaga kependidikan.</p><p class="mt-4 leading-relaxed text-gray-600">Fasilitas ini mendukung pembiasaan sikap disiplin, religius, dan saling menghormati dalam kehidupan sekolah.</p></div></article><div class="school-facility-back">
    <a href="{{ url('/fasilitas') }}?page={{ request('from_page', 1) }}"
       class="school-facility-back-button">
        ← Kembali ke Fasilitas
    </a>
</div>
</div>
</section>
@endsection
