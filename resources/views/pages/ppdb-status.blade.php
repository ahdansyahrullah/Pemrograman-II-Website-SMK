<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Status Pendaftaran - PPDB SMK PGRI 31 Legok</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="ppdb-page">

    <header class="ppdb-header">
        <nav class="ppdb-nav" aria-label="Navigasi PPDB">
            <a href="{{ url('/ppdb-online') }}" class="ppdb-brand">
                <img
                    src="{{ asset('images/logo-smk.jpeg') }}"
                    alt="Logo SMK PGRI 31 Legok"
                >

                <span>
                    <strong>SMK PGRI 31 LEGOK</strong>
                    <small>Portal PPDB</small>
                </span>
            </a>

            <div class="ppdb-nav-links">
                <a href="{{ url('/ppdb-online') }}">
                    Beranda
                </a>

                <a href="{{ url('/ppdb-online/panduan') }}">
                    Panduan
                </a>

                <a href="{{ url('/ppdb-online/kontak') }}">
                    Hubungi Kami
                </a>
            </div>
        </nav>
    </header>

    <main
        class="ppdb-status-page"
        x-data="{
            registration: null,
            registrationNumber: '',
            identity: '',
            error: '',

            checkStatus() {
                const saved = localStorage.getItem(
                    'ppdb_registration_' + this.registrationNumber.trim()
                );

                if (!saved) {
                    this.registration = null;
                    this.error = 'Data pendaftaran tidak ditemukan.';
                    return;
                }

                const data = JSON.parse(saved);

                if (
                    data.nisn !== this.identity.trim() &&
                    data.telepon !== this.identity.trim()
                ) {
                    this.registration = null;
                    this.error = 'NISN atau nomor WhatsApp tidak sesuai.';
                    return;
                }

                this.registration = data;
                this.error = '';
            }
        }"
    >
        <div class="school-container">
            <div class="ppdb-status-login-card">
                <p class="ppdb-status-label">
                    CEK STATUS PENDAFTARAN
                </p>

                <h1>Lihat Status PPDB</h1>

                <p>
                    Masukkan nomor pendaftaran dan NISN atau nomor WhatsApp
                    yang digunakan saat mendaftar.
                </p>

                <form @submit.prevent="checkStatus">
                    <label for="registration_number">
                        Nomor Pendaftaran
                    </label>

                    <input
                        id="registration_number"
                        type="text"
                        x-model="registrationNumber"
                        placeholder="Contoh: PPDB-2026-123456"
                        required
                    >

                    <label for="identity">
                        NISN / Nomor WhatsApp
                    </label>

                    <input
                        id="identity"
                        type="text"
                        x-model="identity"
                        placeholder="Masukkan NISN atau nomor WhatsApp"
                        required
                    >

                    <p
                        x-show="error"
                        x-text="error"
                        class="ppdb-status-error"
                        x-cloak
                    ></p>

                    <button
                        type="submit"
                        class="ppdb-online-primary"
                    >
                        Cek Status →
                    </button>
                </form>
            </div>

            <div
                class="ppdb-status-result"
                x-show="registration"
                x-cloak
            >
                <div class="ppdb-status-success">✓</div>

                <h2>Pendaftaran Ditemukan</h2>

                <div class="ppdb-status-number">
                    <span>Nomor Pendaftaran</span>
                    <strong
                        x-text="registration?.registration_number"
                    ></strong>
                </div>

                <div class="ppdb-status-detail">
                    <div>
                        <span>Nama Siswa</span>
                        <strong x-text="registration?.nama"></strong>
                    </div>

                    <div>
                        <span>Program Keahlian</span>
                        <strong x-text="registration?.jurusan"></strong>
                    </div>

                    <div>
                        <span>Status</span>
                        <strong x-text="registration?.status"></strong>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>