<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portal Sekolah - SMK PGRI 31 Legok</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="portal-page">

    <main class="portal-shell">

        <section
    class="portal-intro"
    style="
        background-image:
            linear-gradient(
                90deg,
                rgba(16, 53, 107, 0.78) 0%,
                rgba(16, 53, 107, 0.52) 38%,
                rgba(16, 53, 107, 0.12) 72%,
                rgba(16, 53, 107, 0) 100%
            ),
            url('{{ asset('images/smk31.png') }}');
    "
>
            <div class="portal-brand-row">
                <img
                    src="{{ asset('images/logo-smk.jpeg') }}"
                    alt="Logo SMK PGRI 31 Legok"
                    class="portal-brand-logo"
                >

                <p class="portal-school-name">
                    SMK PGRI 31 LEGOK
                </p>
            </div>

            <div class="portal-accent"></div>

            <h1>Portal Sekolah</h1>

            <p>
                Akses informasi dan layanan sekolah dalam satu tempat.
            </p>
        </section>

        <section class="portal-form-panel">
            <div class="portal-form-content">

                <p class="portal-eyebrow">
                    Portal Sekolah
                </p>

                <h2>Selamat Datang</h2>

                <p class="portal-form-subtitle">
                    Silakan masuk ke akun sekolah Anda.
                </p>

                <form action="#" method="POST" class="portal-login-form">
                    @csrf

                    <label for="email">
                        Email / Username
                    </label>

                    <input
                        id="email"
                        name="email"
                        type="text"
                        placeholder="Masukkan email atau username"
                        required
                    >

                    <label for="password">
                        Password
                    </label>

                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Masukkan password"
                        required
                    >

                    <label class="portal-remember">
                        <input type="checkbox" name="remember">
                        <span>Ingat saya</span>
                    </label>

                    <button type="submit" class="portal-login-button">
                        Masuk
                    </button>
                </form>

                <p class="portal-help">
                    Butuh bantuan?
                    <a href="{{ url('/kontak') }}">
                        Hubungi sekolah
                    </a>
                </p>

                <a href="{{ url('/') }}" class="portal-back">
                    ← Kembali ke Beranda
                </a>

            </div>
        </section>

    </main>

</body>
</html>