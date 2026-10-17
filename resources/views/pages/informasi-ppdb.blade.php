@extends('layouts.app')

@section('content')
<section class="school-ppdb-hero" aria-labelledby="ppdb-title">
    <div class="school-container">
        <p>TAHUN AJARAN 2025/2026</p>
        <h1 id="ppdb-title">PPDB Online</h1>
        <span>Pendaftaran Peserta Didik Baru SMK PGRI 31 Legok. Wujudkan<br class="ppdb-break"> impianmu bersama kami!</span>
    </div>
</section>

<section class="school-ppdb-page">
    <div class="school-container school-ppdb-layout">
        <div class="school-ppdb-main">
            <article class="school-ppdb-card">
                <h2>Informasi PPDB</h2>
                <p>SMK PGRI 31 Legok membuka penerimaan peserta didik baru untuk tahun ajaran 2025/2026. Kami menyediakan 3 program keahlian unggulan yang siap membekali Anda dengan kompetensi untuk berkarir di industri.</p>
                <div class="school-ppdb-programs">
                    <div><strong>TKJ</strong><span>Tersedia</span></div>
                    <div><strong>AKL</strong><span>Tersedia</span></div>
                    <div><strong>MPLB</strong><span>Tersedia</span></div>
                </div>
            </article>

            <article class="school-ppdb-card">
                <h2>Persyaratan Pendaftaran</h2>
                <ol class="school-ppdb-requirements">
                    <li>Ijazah/SKHÜN SMP/MTs asli dan fotokopi (2 lembar)</li>
                    <li>Kartu Keluarga (KK) asli dan fotokopi (2 lembar)</li>
                    <li>Akta Kelahiran asli dan fotokopi (2 lembar)</li>
                    <li>Pas foto ukuran 3×4 (4 lembar) background merah</li>
                    <li>Surat Keterangan Lulus (SKL) dari sekolah asal</li>
                    <li>Nilai rapor semester 1–5 asli dan fotokopi</li>
                </ol>
            </article>

            <article class="school-ppdb-card">
                <h2>Jadwal PPDB</h2>
                <ul class="school-ppdb-schedule">
                    <li><span>Pendaftaran Online</span><b>1 – 31 Desember 2024</b></li>
                    <li><span>Seleksi Administrasi</span><b>2 – 5 Januari 2025</b></li>
                    <li><span>Tes Akademik & Wawancara</span><b>10 – 12 Januari 2025</b></li>
                    <li><span>Pengumuman Hasil Seleksi</span><b>17 Januari 2025</b></li>
                    <li><span>Daftar Ulang</span><b>20 – 31 Januari 2025</b></li>
                    <li><span>Masa Pengenalan Sekolah</span><b>10 Juli 2025</b></li>
                </ul>
            </article>
        </div>

        <aside class="school-ppdb-side">
            <div class="school-ppdb-register">
                <div class="school-ppdb-document">📄</div>
                <h2>Daftar Sekarang</h2>
                <p>Jangan tunda impianmu. Daftarkan dirimu dan bergabung bersama keluarga besar SMK PGRI 31 Legok.</p>
                <a href="#" class="school-ppdb-register-button">Isi Formulir Pendaftaran</a>
            </div>
            <div class="school-ppdb-contact">
                <h2>Hubungi Kami</h2>
                <p>📞 <span>(021) 5983–xxxx</span></p>
                <p>💬 <span>WhatsApp: 0812–3456–7890</span></p>
                <p>◷ <span>Senin – Sabtu, 07.30 – 16.00</span></p>
            </div>
        </aside>
    </div>
</section>
@endsection
