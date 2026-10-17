@extends('layouts.app')

@section('content')
<section class="school-profile-hero" aria-labelledby="contact-title">
    <div class="school-container">
        <p class="school-section-label">Hubungi Kami</p>
        <h1 id="contact-title">Kontak SMK PGRI 31 Legok</h1>
        <p class="school-profile-intro">
            Kami siap membantu memberikan informasi tentang sekolah, program keahlian,
            fasilitas, dan penerimaan peserta didik baru.
        </p>
    </div>
</section>

<section class="school-contact-section">
    <div class="school-container">
        <div class="school-contact-grid">
            <div class="school-contact-info">
                <p class="school-section-label">Informasi Sekolah</p>
                <h2 class="school-section-title">Mari Terhubung dengan Kami</h2>
                <p class="school-contact-description">
                    Silakan hubungi SMK PGRI 31 Legok melalui informasi berikut
                    untuk mendapatkan bantuan dan informasi lebih lanjut.
                </p>

                <div class="school-contact-list">
                    <div class="school-contact-item">
                        <span class="school-contact-icon">⌖</span>
                        <div>
                            <strong>Alamat</strong>
                            <p>Jl. Alun Alun No.RT. 01, RT.01/RW.3, Babakan, Kec. Legok, Kabupaten Tangerang, Banten 15820</p>
                        </div>
                    </div>

                    <div class="school-contact-item">
                        <span class="school-contact-icon">☎</span>
                        <div>
                            <strong>Telepon</strong>
                            <p> (021) 54211623</p>
                        </div>
                    </div>

                    <div class="school-contact-item">
                        <span class="school-contact-icon">✉</span>
                        <div>
                            <strong>Email</strong>
                            <p>info@smkpgri31legok.sch.id</p>
                        </div>
                    </div>

                    <div class="school-contact-item">
                        <span class="school-contact-icon">◷</span>
                        <div>
                            <strong>Jam Pelayanan</strong>
                            <p>Senin–Jumat, pukul 07.00–15.00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="school-contact-form-card">
                <h2>Kirim Pesan</h2>
                <p>Isi formulir berikut untuk menghubungi pihak sekolah.</p>

                <form action="#" method="POST" class="school-contact-form">
                    @csrf

                    <label for="name">Nama Lengkap</label>
                    <input id="name" name="name" type="text" placeholder="Masukkan nama lengkap" required>

                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="nama@email.com" required>

                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tuliskan pesan kamu..." required></textarea>

                    <button type="submit" class="school-contact-submit">
                        Kirim Pesan →
                    </button>
                </form>
            </div>
        </div>

        <div class="school-contact-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2441.184794333009!2d106.58738658599876!3d-6.300993449898809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fcd1427be54d%3A0xd71c847f2cd121df!2sSMK%20PGRI%2031%20Legok!5e0!3m2!1sid!2sid!4v1791175718615!5m2!1sid!2sid"
        allowfullscreen
        loading="lazy"
        referrerpolicy="strict-origin-when-cross-origin"
        title="Lokasi SMK PGRI 31 Legok"
    ></iframe>
</div>
    </div>
</section>
@endsection
