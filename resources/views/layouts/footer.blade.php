<footer class="school-footer">
    <div class="school-container">
        <div class="school-footer-grid">
            <div class="school-footer-brand">
                <a href="{{ url('/') }}" class="school-brand"
                   aria-label="SMK PGRI 31 Legok — Beranda">
                    <span class="school-brand-icon">SMK</span>

                    <span class="school-brand-text">
                        <strong>SMK PGRI 31</strong>
                        <span>LEGOK</span>
                    </span>
                </a>

                <p>
                    Berakhlak · Kompeten · Berprestasi.
                    Mencetak generasi unggul yang siap
                    bersaing di era global.
                </p>

                {{-- Tautan diaktifkan setelah akun resmi tersedia --}}
                <div class="school-footer-socials"
                     role="group" aria-label="Media sosial sekolah">
                    <button type="button" disabled
                            aria-label="Facebook belum tersedia"
                            title="Akun Facebook belum tersedia">F</button>
                    <button type="button" disabled
                            aria-label="Instagram belum tersedia"
                            title="Akun Instagram belum tersedia">I</button>
                    <button type="button" disabled
                            aria-label="YouTube belum tersedia"
                            title="Akun YouTube belum tersedia">Y</button>
                </div>
            </div>

            <div class="school-footer-column">
                <h2>Navigasi</h2>

                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>
                        <a href="{{ url('/tentang-Tisata') }}">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ url('/program-keahlian') }}">Program Keahlian</a>
                    </li>
                    <li>
                        <a href="{{ url('/fasilitas') }}">Fasilitas</a>
                    </li>
                    <li>
                        <span aria-disabled="true" title="Halaman belum tersedia">
                            Prestasi
                        </span>
                    </li>
                </ul>
            </div>

            <div class="school-footer-column">
                <h2>Program</h2>

                <ul>
                    <li><a href="{{ url('/program/tkj') }}">TKJ</a></li>
                    <li><a href="{{ url('/program/akl') }}">AKL</a></li>
                    <li><a href="{{ url('/program/mplb') }}">MPLB</a></li>
                    <li>
                        <a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a>
                    </li>
                    <li>
                        <span aria-disabled="true" title="Halaman belum tersedia">
                            PPDB Online
                        </span>
                    </li>
                </ul>
            </div>

            <div class="school-footer-column">
                <h2>Kontak</h2>

                {{-- Data contoh dari desain; ganti dengan kontak resmi --}}
                <address class="school-footer-contact">
                    <p>
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8"
                             aria-hidden="true">
                            <path d="M20 10c0 6-8 11-8 11S4 16 4 10a8 8 0 1 1 16 0Z"/>
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>
                        <span>
                            Jl. Raya Legok, Kec. Legok,
                            Kab. Tangerang, Banten
                        </span>
                    </p>

                    <p>
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8"
                             aria-hidden="true">
                            <path d="m7 3 3 5-2 2a14 14 0 0 0 6 6l2-2 5 3-1 4C10 22 2 14 3 4Z"/>
                        </svg>
                        <span>(021) 5983–xxxx</span>
                    </p>

                    <p>
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8"
                             aria-hidden="true">
                            <rect x="3" y="5" width="18" height="14" rx="2"/>
                            <path d="m3 6 9 7 9-7"/>
                        </svg>
                        <span>info@smkpgri31legok.sch.id</span>
                    </p>
                </address>
            </div>
        </div>

        <div class="school-footer-bottom">
            <p>
                © {{ date('Y') }} SMK PGRI 31 Legok.
                Hak cipta dilindungi.
            </p>

            <p class="school-footer-motto">
                Berakhlak · Kompeten · Berprestasi
            </p>
        </div>
    </div>
</footer>