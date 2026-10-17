<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pendaftaran PPDB - SMK PGRI 31 Legok</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                <a href="{{ url('/ppdb-online') }}">Beranda</a>
                <a href="{{ url('/ppdb-online/panduan') }}">Panduan</a>
                <a href="{{ url('/ppdb-online/kontak') }}">Hubungi Kami</a>
            </div>
        </nav>
    </header>

    <main
    class="ppdb-registration"
    x-data="{
        step: 1,

        next() {
            const fields = this.$refs.form.querySelectorAll(
                '[data-step=\'' + this.step + '\'] input,' +
                '[data-step=\'' + this.step + '\'] select,' +
                '[data-step=\'' + this.step + '\'] textarea'
            );

            for (const field of fields) {
                if (!field.reportValidity()) {
                    return;
                }
            }

            this.step = Math.min(5, this.step + 1);

            this.$refs.card.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        },

        submitRegistration() {
            const formData = new FormData(this.$refs.form);
            const data = Object.fromEntries(formData.entries());

            const registrationNumber =
                'PPDB-' + new Date().getFullYear() + '-' +
                Math.floor(100000 + Math.random() * 900000);

            data.registration_number = registrationNumber;
            data.status = 'Menunggu Verifikasi';
            data.submitted_at = new Date().toLocaleString('id-ID');

            localStorage.setItem(
                'ppdb_registration_' + registrationNumber,
                JSON.stringify(data)
            );

            localStorage.setItem(
                'last_ppdb_registration',
                registrationNumber
            );

            window.location.href =
                '{{ url('/ppdb-online/status') }}/' + registrationNumber;
        }
    }"
>
    <div class="ppdb-registration-container">
        <div class="ppdb-registration-container">
            <div class="ppdb-registration-heading">
                <p>PENDAFTARAN PESERTA DIDIK BARU</p>
                <h1>Formulir Pendaftaran</h1>
                <span>
                    Lengkapi data calon peserta didik sesuai dokumen resmi.
                </span>
            </div>

            <ol class="ppdb-registration-progress"
                aria-label="Tahapan pendaftaran">
                @foreach ([
                    'Data Siswa',
                    'Orang Tua / Wali',
                    'Pilihan Jurusan',
                    'Dokumen',
                    'Periksa & Kirim',
                ] as $step)
                    <li :class="{ 'is-active': step === {{ $loop->iteration }} }"
                        :aria-current="step === {{ $loop->iteration }} ? 'step' : null">
                        <span>{{ $loop->iteration }}</span>
                        <strong>{{ $step }}</strong>
                    </li>
                @endforeach
            </ol>

           <section class="ppdb-registration-card"
         x-ref="card"
         aria-labelledby="registration-title">

    <div class="ppdb-registration-card-heading">
        <span x-text="'LANGKAH ' + step + ' DARI 5'"></span>

        <h2 id="registration-title"
            x-text="[
                'Data Calon Peserta Didik',
                'Data Orang Tua / Wali',
                'Pilihan Program Keahlian',
                'Dokumen Persyaratan',
                'Periksa Data Pendaftaran'
            ][step - 1]">
        </h2>

        <p>Kolom bertanda * wajib diisi.</p>
    </div>

    <form class="ppdb-registration-form"
          x-ref="form"
          @submit.prevent
          x-data="{
              siswa: {
                  nama: '',
                  nisn: '',
                  tempat_lahir: '',
                  tanggal_lahir: '',
                  jenis_kelamin: '',
                  asal_sekolah: '',
                  telepon: '',
                  email: '',
                  alamat: ''
              },
              wali: {
                  nama: '',
                  hubungan: '',
                  pekerjaan: '',
                  telepon: '',
                  alamat: ''
              },
              jurusan: '',
              dokumen: {},
              setuju: false
          }">

        {{-- LANGKAH 1: DATA SISWA --}}
        <div data-step="1" x-show="step === 1">
            <div class="ppdb-registration-fields">
                @foreach ([
                    ['nama', 'Nama Lengkap', 'text', 'Sesuai dokumen resmi'],
                    ['nisn', 'NISN', 'text', '10 digit NISN'],
                    ['tempat_lahir', 'Tempat Lahir', 'text', 'Kota / kabupaten'],
                    ['tanggal_lahir', 'Tanggal Lahir', 'date', ''],
                    ['asal_sekolah', 'Asal Sekolah', 'text', 'Nama SMP / MTs'],
                    ['telepon', 'Nomor HP / WhatsApp', 'tel', 'Nomor aktif'],
                ] as [$name, $label, $type, $placeholder])
                    <div class="ppdb-field">
                        <label for="{{ $name }}">{{ $label }} *</label>
                        <input
                            id="{{ $name }}"
                            name="{{ $name }}"
                            type="{{ $type }}"
                            placeholder="{{ $placeholder }}"
                            x-model="siswa.{{ $name }}"
                            @if($name === 'nisn')
                                inputmode="numeric"
                                pattern="[0-9]{10}"
                                maxlength="10"
                            @endif
                            @if($type === 'date')
                                max="{{ now()->toDateString() }}"
                            @endif
                            required
                        >
                    </div>
                @endforeach

                <div class="ppdb-field">
                    <label for="jenis_kelamin">Jenis Kelamin *</label>
                    <select id="jenis_kelamin"
                            name="jenis_kelamin"
                            x-model="siswa.jenis_kelamin"
                            required>
                        <option value="">Pilih jenis kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div class="ppdb-field">
                    <label for="email">Email</label>
                    <input id="email"
                           name="email"
                           type="email"
                           placeholder="nama@email.com"
                           x-model="siswa.email">
                </div>

                <div class="ppdb-field ppdb-field-full">
                    <label for="alamat">Alamat Lengkap *</label>
                    <textarea id="alamat"
                              name="alamat"
                              rows="3"
                              x-model="siswa.alamat"
                              required></textarea>
                </div>
            </div>
        </div>

        {{-- LANGKAH 2: ORANG TUA / WALI --}}
        <div data-step="2" x-show="step === 2" x-cloak>
            <div class="ppdb-registration-fields">
                <div class="ppdb-field">
                    <label for="nama_wali">Nama Orang Tua / Wali *</label>
                    <input id="nama_wali"
                           name="nama_wali"
                           type="text"
                           x-model="wali.nama"
                           required>
                </div>

                <div class="ppdb-field">
                    <label for="hubungan">Hubungan dengan Siswa *</label>
                    <select id="hubungan"
                            name="hubungan"
                            x-model="wali.hubungan"
                            required>
                        <option value="">Pilih hubungan</option>
                        <option>Ayah</option>
                        <option>Ibu</option>
                        <option>Wali</option>
                    </select>
                </div>

                <div class="ppdb-field">
                    <label for="pekerjaan">Pekerjaan *</label>
                    <input id="pekerjaan"
                           name="pekerjaan"
                           type="text"
                           x-model="wali.pekerjaan"
                           placeholder="Contoh: wiraswasta"
                           required>
                </div>

                <div class="ppdb-field">
                    <label for="telepon_wali">Nomor HP / WhatsApp *</label>
                    <input id="telepon_wali"
                           name="telepon_wali"
                           type="tel"
                           x-model="wali.telepon"
                           required>
                </div>

                <div class="ppdb-field ppdb-field-full">
                    <label for="alamat_wali">Alamat Orang Tua / Wali *</label>
                    <textarea id="alamat_wali"
                              name="alamat_wali"
                              rows="3"
                              x-model="wali.alamat"
                              required></textarea>
                </div>
            </div>
        </div>

        {{-- LANGKAH 3: PILIHAN JURUSAN --}}
        <div data-step="3" x-show="step === 3" x-cloak>
            <div class="ppdb-jurusan-options">
                @foreach ([
                    ['TKJ', 'Teknik Komputer dan Jaringan'],
                    ['AKL', 'Akuntansi dan Keuangan Lembaga'],
                    ['MPLB', 'Manajemen Perkantoran dan Layanan Bisnis'],
                ] as [$code, $name])
                    <label class="ppdb-jurusan-option"
                           :class="{ 'is-selected': jurusan === '{{ $code }}' }">
                        <input type="radio"
                               name="jurusan"
                               value="{{ $code }}"
                               x-model="jurusan"
                               required>

                        <span>
                            <strong>{{ $code }}</strong>
                            <small>{{ $name }}</small>
                        </span>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- LANGKAH 4: DOKUMEN --}}
        <div data-step="4" x-show="step === 4" x-cloak>
            <p class="ppdb-document-intro">
                Contoh dokumen persyaratan berikut akan disesuaikan
                dengan ketentuan panitia PPDB.
            </p>

            <div class="ppdb-registration-fields">
                @foreach ([
                    ['kk', 'Kartu Keluarga', true],
                    ['akta', 'Akta Kelahiran', true],
                    ['kelulusan', 'Ijazah / Surat Keterangan Lulus', true],
                    ['foto', 'Pas Foto', true],
                    ['kip', 'Kartu Indonesia Pintar', false],
                ] as [$key, $label, $required])
                    <div class="ppdb-field">
                        <label for="dokumen_{{ $key }}">
                            {{ $label }} {{ $required ? '*' : '(opsional)' }}
                        </label>

                        <input
                            id="dokumen_{{ $key }}"
                            name="dokumen_{{ $key }}"
                            type="file"
                            accept="{{ $key === 'foto' ? '.jpg,.jpeg,.png' : '.pdf,.jpg,.jpeg,.png' }}"
                            @if($required) required @endif
                            @change="
                                const file = $event.target.files[0];
                                $event.target.setCustomValidity('');

                                if (file && file.size > 2 * 1024 * 1024) {
                                    $event.target.setCustomValidity(
                                        'Ukuran file maksimal 2 MB.'
                                    );
                                    $event.target.reportValidity();
                                }

                                dokumen['{{ $key }}'] = file ? file.name : '';
                            "
                        >

                        <small>
                            {{ $key === 'foto' ? 'JPG / PNG' : 'PDF / JPG / PNG' }},
                            maksimal 2 MB.
                        </small>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- LANGKAH 5: RINGKASAN --}}
        <div data-step="5" x-show="step === 5" x-cloak>
            <div class="ppdb-review">
                <h3>Data Siswa</h3>

                <dl>
                    @foreach ([
                        'nama' => 'Nama Lengkap',
                        'nisn' => 'NISN',
                        'tempat_lahir' => 'Tempat Lahir',
                        'tanggal_lahir' => 'Tanggal Lahir',
                        'jenis_kelamin' => 'Jenis Kelamin',
                        'asal_sekolah' => 'Asal Sekolah',
                        'telepon' => 'Nomor HP',
                        'email' => 'Email',
                        'alamat' => 'Alamat',
                    ] as $key => $label)
                        <div>
                            <dt>{{ $label }}</dt>
                            <dd x-text="siswa.{{ $key }} || '—'"></dd>
                        </div>
                    @endforeach
                </dl>

                <h3>Orang Tua / Wali</h3>

                <dl>
                    @foreach ([
                        'nama' => 'Nama',
                        'hubungan' => 'Hubungan',
                        'pekerjaan' => 'Pekerjaan',
                        'telepon' => 'Nomor HP',
                        'alamat' => 'Alamat',
                    ] as $key => $label)
                        <div>
                            <dt>{{ $label }}</dt>
                            <dd x-text="wali.{{ $key }} || '—'"></dd>
                        </div>
                    @endforeach
                </dl>

                <h3>Program Keahlian</h3>
                <p x-text="jurusan"></p>

                <h3>Dokumen Pilihan</h3>
                <dl>
                    @foreach ([
                        'kk' => 'Kartu Keluarga',
                        'akta' => 'Akta Kelahiran',
                        'kelulusan' => 'Dokumen Kelulusan',
                        'foto' => 'Pas Foto',
                        'kip' => 'KIP',
                    ] as $key => $label)
                        <div>
                            <dt>{{ $label }}</dt>
                            <dd x-text="dokumen['{{ $key }}'] || 'Tidak dipilih'"></dd>
                        </div>
                    @endforeach
                </dl>
            </div>

            <label class="ppdb-confirmation">
                <input type="checkbox" x-model="setuju">
                <span>
                    Saya sudah memeriksa seluruh data yang diisi.
                </span>
            </label>
        </div>

        <div class="ppdb-registration-note">
            Ini merupakan pratinjau formulir. Data dan dokumen belum
            dikirim atau disimpan; isian akan hilang ketika halaman dimuat ulang.
        </div>

        <div class="ppdb-registration-actions">
            <a x-show="step === 1"
               href="{{ url('/ppdb-online') }}"
               class="ppdb-online-secondary">
                ← Kembali ke PPDB
            </a>

            <button x-show="step > 1"
                    type="button"
                    class="ppdb-online-secondary"
                    @click="step--">
                ← Sebelumnya
            </button>

            <button x-show="step < 5"
                    type="button"
                    class="ppdb-online-primary"
                    @click="next()">
                Selanjutnya →
            </button>
            <button
                x-show="step === 5"
                type="button"
                class="ppdb-online-primary"
                :disabled="!setuju"
                @click="submitRegistration()">
                Kirim Pendaftaran →
            </button>
        </div>
    </form>
    </section>
        </div>
    </main>
</body>
</html>