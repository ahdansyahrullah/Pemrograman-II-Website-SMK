@php
    $menus = [
        [
            'label' => 'Tentang Kami',
            'items' => [
                ['Tentang Sekolah', '/tentang-Tisata'],
                ['Sejarah Sekolah', '/tentang/sejarah'],
                ['Visi & Misi', '/tentang/visi-misi'],
                ['Struktur Organisasi', '/tentang/struktur-organisasi'],
            ],
        ],
        [
            'label' => 'Program Keahlian',
            'items' => [
                ['Semua Program', '/program-keahlian'],
                ['Teknik Komputer dan Jaringan', '/program/tkj'],
                ['Akuntansi dan Keuangan Lembaga', '/program/akl'],
                ['Manajemen Perkantoran dan Layanan Bisnis', '/program/mplb'],
            ],
        ],
        [
            'label' => 'Fasilitas',
            'items' => [
                ['Semua Fasilitas', '/fasilitas'],
                ['Laboratorium Komputer', '/fasilitas/laboratorium-komputer'],
                ['Ruang Kelas', '/fasilitas/ruang-kelas'],
                ['Perpustakaan', '/fasilitas/perpustakaan'],
            ],
        ],
        [
            'label' => 'Ekstrakurikuler',
            'items' => [
                ['Semua Ekstrakurikuler', '/ekstrakurikuler'],
                ['Pramuka', '/ekstrakurikuler/pramuka'],
            ],
        ],

               [
            'label' => 'Informasi',
            'items' => [
                ['Artikel / Berita', '/informasi/berita'],
                ['Prestasi Siswa', '/informasi/prestasi'],
                ['Pengumuman Sekolah', '/informasi/pengumuman'],
                ['Informasi PPDB', '/informasi/ppdb'],
            ],
        ],

        [
            'label' => 'Kontak',
            'items' => [
                ['Hubungi Kami', '/kontak'],
            ],
        ],
    ];
@endphp

<header class="school-header" x-data="{ mobileOpen: false }"
        @keydown.escape.window="mobileOpen = false">
    <nav class="school-nav school-container" aria-label="Navigasi utama">
                    {{-- Logo --}}
                    <a href="{{ url('/') }}" class="school-brand"
            aria-label="SMK PGRI 31 Legok">

                <img
                    src="{{ asset('images/logo-smk.jpeg') }}"
                    alt="Logo SMK PGRI 31 Legok"
                    class="school-brand-logo"
                >

                <span class="school-brand-text">
                    <strong>SMK PGRI 31</strong>
                    <span>LEGOK</span>
                </span>
            </a>

        {{-- Navigasi desktop --}}
        <div class="school-desktop-menu">
            <a href="{{ url('/') }}"
               class="school-nav-link {{ request()->is('/') ? 'is-active' : '' }}"
               @if(request()->is('/')) aria-current="page" @endif>
                Beranda
            </a>

            @foreach($menus as $menu)
    @php
        $active = collect($menu['items'])->contains(
            fn ($item) => request()->is(ltrim($item[1], '/'))
        );
    @endphp

    @if($menu['label'] === 'Kontak')
        <a
            href="{{ url('/kontak') }}"
            class="school-nav-link {{ $active ? 'is-active' : '' }}"
            @if($active) aria-current="page" @endif
        >
            Kontak
        </a>
    @else
        <div class="school-dropdown"
             x-data="{ open: false }"
             @click.outside="open = false"
             @keydown.escape.stop="open = false; $refs.trigger.focus()">

            <button
                type="button"
                x-ref="trigger"
                class="school-nav-link {{ $active ? 'is-active' : '' }}"
                @click="open = !open"
                :aria-expanded="open"
                aria-controls="school-menu-{{ $loop->index }}"
            >
                {{ $menu['label'] }}

                <svg class="school-chevron" viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.8"
                     aria-hidden="true">
                    <path d="m6 9 6 6 6-6"/>
                </svg>
            </button>

            <div
                id="school-menu-{{ $loop->index }}"
                class="school-dropdown-panel"
                x-show="open"
                x-cloak
            >
                @foreach($menu['items'] as [$label, $path])
                    <a href="{{ url($path) }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
    @endif
@endforeach 
        <div class="school-nav-actions">
    <a href="{{ url('/portal/login') }}"
       class="school-button school-button-outline school-portal">
        Portal Sekolah
    </a>

            <a href="{{ url('/ppdb-online') }}"
   class="school-button school-button-green"
   title="Buka halaman PPDB Online">

    PPDB Online

    <svg viewBox="0 0 24 24"
         fill="none"
         stroke="currentColor"
         stroke-width="1.8"
         aria-hidden="true">
        <path d="M14 3h7v7M21 3l-11 11"/>
        <path d="M10 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2-2v-5"/>
    </svg>
</a>

            <button type="button" class="school-mobile-toggle"
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen"
                    :aria-label="mobileOpen ? 'Tutup menu' : 'Buka menu'"
                    aria-controls="school-mobile-menu">
                <svg x-show="!mobileOpen" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     aria-hidden="true">
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileOpen" x-cloak viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     aria-hidden="true">
                    <path d="m6 6 12 12M6 18 18 6"/>
                </svg>
            </button>
        </div>
    </nav>

    {{-- Navigasi HP dan tablet --}}
    <nav id="school-mobile-menu"
         class="school-mobile-menu school-container"
         aria-label="Navigasi seluler"
         x-show="mobileOpen" x-cloak>
        <a href="{{ url('/') }}"
           @if(request()->is('/')) aria-current="page" @endif>
            Beranda
        </a>

        @foreach($menus as $menu)
            <details>
                <summary>{{ $menu['label'] }}</summary>
                <div class="school-mobile-submenu">
                    @foreach($menu['items'] as [$label, $path])
                        <a href="{{ url($path) }}"
                           @if(request()->is(ltrim($path, '/')))
                               aria-current="page"
                           @endif>
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </details>
        @endforeach
    </nav>
</header>