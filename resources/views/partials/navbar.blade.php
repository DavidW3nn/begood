<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-3">
    <a class="navbar-brand m-2" href="/"><img src="{{ asset('assets/image/icon.png') }}" width="100px" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            {{-- YDPABI BRANCH --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('message.pilih_cabang')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                    <a class="dropdown-item" href="#">Nasional</a>
                    <a class="dropdown-item" href="#">Aceh</a>
                    <a class="dropdown-item" href="#">Sumatera Barat</a>
                    <a class="dropdown-item" href="#">DKI Jakarta</a>
                </div>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/"> @lang('message.beranda')
                    <span class="sr-only">(current)</span></a>
            </li>

            {{-- Tentang Kami --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/about" id="navbarDropdownMenuLink2"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('message.tentang_kami')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="/about/#latar_belakang">@lang('message.latar_belakang')</a>
                    <a class="dropdown-item" href="/about/#visi_misi_tujuan">@lang('message.visi_misi_tujuan')</a>
                    <a class="dropdown-item" href="/about/#legalitas_hukum">@lang('message.legalitas_hukum')</a>
                    <a class="dropdown-item" href="/about/#struktur_yayasan">@lang('message.struktur_yayasan')</a>
                    <a class="dropdown-item" href="/about/#program_kerja">@lang('message.program_kerja')</a>
                    <a class="dropdown-item" href="/about/#mengapa_kalimantan_barat">@lang('message.video_testimoni')</a>
                </div>
            </li>

            {{-- Laporan --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/report" id="navbarDropdownMenuLink3"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('message.laporan')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                    <a class="dropdown-item" href="/report/#keuangan">@lang('message.keuangan')</a>
                    <a class="dropdown-item" href="/report/#pertanggung_jawaban">@lang('message.pertanggung_jawaban')</a>
                </div>
            </li>

            {{-- Kegiatan / Berita --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('message.aktivitas/berita')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                    <a class="dropdown-item" href="/activity">@lang('message.kegiatan_yayasan')</a>
                    <a class="dropdown-item" href="/profile">@lang('message.profile_guru/sekolah')</a>
                    <a class="dropdown-item" href="/smb">@lang('message.SMB_Kalbar')</a>
                </div>
            </li>

            {{-- Artikel --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/article" id="navbarDropdownMenuLink5"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('message.artikel')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink5">
                    <a class="dropdown-item" href="/article/#pendidikan">@lang('message.literasi_pendidikan')</a>
                    <a class="dropdown-item" href="/article/#artikel">@lang('message.artikel_dhamma')</a>
                    <a class="dropdown-item" href="/article/#video_dhamma">@lang('message.video_dhamma')</a>
                </div>
            </li>

            {{-- Program --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('message.program')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
                    <a class="dropdown-item" href="/program/#donate">@lang('message.donasi')</a>
                    <a class="dropdown-item" href="/program/#ongoing">@lang('message.sudah_selesai/tutup')</a>
                    <a class="dropdown-item" href="/program/#upcoming">@lang('message.yang_akan_datang')</a>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#">@lang('message.kontak')</a>
            </li>

            {{-- Bahasa --}}
            <li class="nav-item dropdown me-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('message.bahasa')
                </a>
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdownMenuLink7">
                    <a class="dropdown-item" href="{{ route('locale', ['locale' => 'id']) }}">
                        <img src="/assets/image/flags/indonesia.png" width="30" alt="Indonesia" class="me-2">
                        @lang('message.bahasa_indonesia')
                    </a>
                    <a class="dropdown-item" href="{{ route('locale', ['locale' => 'en']) }}">
                        <img src="/assets/image/flags/united_kingdom.png" width="30" alt="English"
                            class="me-2">
                        @lang('message.bahasa_inggris')
                    </a>
                    <a class="dropdown-item" href="{{ route('locale', ['locale' => 'ch']) }}">
                        <img src="/assets/image/flags/china.png" width="30" alt="Chinese" class="me-2">
                        @lang('message.bahasa_mandarin')
                    </a>
                </div>
            </li>

        </ul>
    </div>
</nav>
