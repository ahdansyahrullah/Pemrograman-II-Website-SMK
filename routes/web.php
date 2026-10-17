<?php

use Illuminate\Support\Facades\Route;


// # Route halaman utama website SMK PGRI 31 LEGOK

Route::get('/', function () {

    return view('pages.home');

    // # Route halaman Tentang Kami

});

Route::get('/tentang-Tisata', function () {

    return view('pages.tentang');

});

// # Route halaman Sejarah Sekolah

Route::get('/tentang/sejarah', function () {

    return view('pages.tentang-sejarah');

});

// # Route halaman Visi & Misi

Route::get('/tentang/visi-misi', function () {

    return view('pages.visi-misi');

});

// # Route halaman Struktur Organisasi

Route::get('/tentang/struktur-organisasi', function () {

    return view('pages.struktur-organisasi');

});

// # Route halaman daftar program keahlian

Route::get('/program-keahlian', function () {

    return view('pages.program');

});

// # Route halaman detail jurusan TKJ

Route::get('/program/tkj', function () {

    return view('pages.tkj');

});

// # Route halaman detail jurusan AKL

Route::get('/program/akl', function () {

    return view('pages.akl');

});

// Halaman detail MPLB
Route::get('/program/mplb', function () {
    return view('pages.otkp');
});

// Tautan lama tetap menuju halaman MPLB
Route::redirect('/program/otkp', '/program/mplb');

// # Route halaman fasilitas sekolah

Route::get('/fasilitas', function () {

    return view('pages.fasilitas');

});

// # Detail fasilitas

Route::get('/fasilitas/laboratorium-komputer', function () {

    return view('pages.fasilitas-lab');

});


Route::get('/fasilitas/ruang-kelas', function () {

    return view('pages.fasilitas-kelas');

});

// # Route detail fasilitas perpustakaan

Route::get('/fasilitas/perpustakaan', function () {

    return view('pages.fasilitas-perpustakaan');

});

// # Route halaman ekstrakurikuler

Route::get('/ekstrakurikuler', function () {

    return view('pages.ekstrakurikuler');

});

// # Route detail ekstrakurikuler Pramuka

Route::get('/ekstrakurikuler/pramuka', function () {

    return view('pages.pramuka');

});

/* Route Detail Ruang Praktik */
Route::get('/fasilitas/ruang-praktik', function () {
    return view('pages.fasilitas-praktik');
});

/* Route Detail Ruang UKS */
Route::get('/fasilitas/uks', function () {
    return view('pages.fasilitas-uks');
});

/* Route Detail Ruang Seni */
Route::get('/fasilitas/ruang-seni', function () {
    return view('pages.fasilitas-seni');
});

/* Route Detail Ruang Osis */
Route::get('/fasilitas/ruang-osis', function () {
    return view('pages.fasilitas-osis');
});

/* Route Detail Lapangan */
Route::get('/fasilitas/lapangan', function () {
    return view('pages.fasilitas-lapangan');
});

/* Route Detail Kantin */
Route::get('/fasilitas/kantin', function () {
    return view('pages.fasilitas-kantin');
});

/* Route Detail Mushola */
Route::get('/fasilitas/mushola', function () {
    return view('pages.fasilitas-mushola');
});

/* Route Detail Ekskul Pramuka */
Route::get('/ekstrakurikuler/pramuka', function () {
    return view('pages.ekskul-pramuka');
});

/* Route Detail Ekskul Paskibra */
Route::get('/ekstrakurikuler/paskibra', function () {
    return view('pages.ekskul-paskibra');
});

/* Route Detail Ekskul Futsal */
Route::get('/ekstrakurikuler/futsal', function () {
    return view('pages.ekskul-futsal');
});

/* Route Detail Ekskul PMR */
Route::get('/ekstrakurikuler/pmr', function () {
    return view('pages.ekskul-pmr');
});

/* Route Detail Ekskul Seni */
Route::get('/ekstrakurikuler/seni', function () {
    return view('pages.ekskul-seni');
});

/* Route Detail Ekskul Rohis */
Route::get('/ekstrakurikuler/rohis', function () {
    return view('pages.ekskul-rohis');
});

/* Route Informasi/Artikel */
Route::get('/informasi/berita', function () {
    return view('pages.berita');
});

/* Route Detail Informasi/Artikel */
Route::get('/informasi/berita/{slug}', function ($slug) {
    return view('pages.berita-detail', compact('slug'));
});

/* Route Kontak */
Route::get('/kontak', function () {
    return view('pages.kontak');
});

// Route Portal Sekolah
Route::get('/portal/login', function () {
    return view('pages.portal-login');
});

// Route halaman Prestasi Siswa
Route::get('/informasi/prestasi', function () {
    return view('pages.prestasi');
});

// Halaman informasi PPDB
Route::get('/informasi/ppdb', function () {
    return view('pages.informasi-ppdb');
});

//Halaman PPDB-ONLINE
Route::get('/ppdb-online', function () {
    return view('pages.ppdb-online');
});

// Halaman Panduan PPDB Online
Route::get('/ppdb-online/panduan', function () {
    return view('pages.ppdb-panduan');
});

// Kontak Panitia PPDB Online
Route::get('/ppdb-online/kontak', function () {
    return view('pages.ppdb-kontak');
});

// Formulir pendaftaran PPDB
Route::get('/ppdb-online/daftar', function () {
    return view('pages.ppdb-daftar');
});

// Status pendaftaran PPDB
Route::get('/ppdb-online/status/{registrationNumber?}', function ($registrationNumber = null) {
    return view('pages.ppdb-status', compact('registrationNumber'));
});