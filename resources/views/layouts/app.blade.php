<!DOCTYPE html>
<html lang="id">

<head>

    <!-- # Mengatur karakter website -->
    <meta charset="UTF-8">


    <!-- # Membuat website responsive di HP -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- # Judul website -->
    <title>
        SMK PGRI 31 LEGOK
    </title>


    <!-- # Memanggil CSS dan JS Laravel -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body class="bg-white text-gray-800">


    <!-- # Navbar digunakan di semua halaman -->
    @include('layouts.navbar')


    <!-- # Tempat isi halaman berubah -->
    <main>

        @yield('content')

    </main>


    <!-- # Footer digunakan di semua halaman -->
    @include('layouts.footer')


</body>

</html>