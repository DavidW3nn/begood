<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            {{-- Berita --}}
            <div class="col-6 col-md-3 mb-4">
                <h5>@lang('message.berita')</h5>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <img class="card-img" src="https://via.placeholder.com/150" alt="Card image">
                    </div>
                    <div class="col-sm-6">
                        <p>Proses awal pengerjaan konstruksi talud</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <img class="card-img" src="https://via.placeholder.com/150" alt="Card image">
                    </div>
                    <div class="col-sm-6">
                        <p>SERAH TERIMA DANA PARAMITA BEASISWA SPP KELAS X SEMESTER 1 2024</p>
                    </div>
                </div>
            </div>

            {{-- Halaman --}}
            <div class="col-6 col-md-2 mb-4">
                <h5>@lang('message.halaman')</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">@lang('message.beranda')</a>
                    </li>

                    {{-- About Us --}}
                    <li class="nav-item dropdown mb-2">
                        <a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDropdown1"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('message.tentang_kami')
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="/about/#latar_belakang">@lang('message.latar_belakang')</a>
                            <a class="dropdown-item" href="/about/#visi_misi_tujuan">@lang('message.visi_misi_tujuan')</a>
                            <a class="dropdown-item" href="/about/#legalitas_hukum">@lang('message.legalitas_hukum')</a>
                            <a class="dropdown-item" href="/about/#struktur_yayasan">@lang('message.struktur_yayasan')</a>
                            <a class="dropdown-item" href="/about/#program_kerja">@lang('message.program_kerja')</a>
                            <a class="dropdown-item" href="/about/#mengapa_kalimantan_barat">@lang('message.video_testimoni')</a>
                        </ul>
                    </li>

                    {{-- Laporan --}}
                    <li class="nav-item dropdown mb-2">
                        <a class="nav-link dropdown-toggle p-0 text-white" href="/report" id="navbarDropdown2"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('message.laporan')
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="/report/#keuangan">@lang('message.keuangan')</a></li>
                            <li><a class="dropdown-item" href="/report/#pertanggung_jawaban">@lang('message.pertanggung_jawaban')</a></li>
                        </ul>
                    </li>

                    {{-- Aktivitas --}}
                    <li class="nav-item dropdown mb-2">
                        <a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDropdown3"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('message.aktivitas/berita')
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <li><a class="dropdown-item" href="#">@lang('message.kegiatan_yayasan')</a></li>
                            <li><a class="dropdown-item" href="#">@lang('message.profile_guru/sekolah')</a></li>
                            <li><a class="dropdown-item" href="#">@lang('message.SMB_Kalbar')</a></li>
                        </ul>
                    </li>

                    {{-- Artikel --}}
                    <li class="nav-item dropdown mb-2">
                        <a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDropdown4"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('message.artikel')
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                            <li><a class="dropdown-item" href="#">@lang('message.literasi_pendidikan')</a></li>
                            <li><a class="dropdown-item" href="#">@lang('message.artikel_dhamma')</a></li>
                            <li><a class="dropdown-item" href="#">@lang('message.video_dhamma')</a></li>
                        </ul>
                    </li>

                    {{-- Program --}}
                    <li class="nav-item dropdown mb-2">
                        <a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDropdown5"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('message.program')
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
                            <li><a class="dropdown-item" href="#">@lang('message.sedang_berjalan')</a></li>
                            <li><a class="dropdown-item" href="#">@lang('message.sudah_selesai/tutup')</a></li>
                            <li><a class="dropdown-item" href="#">@lang('message.yang_akan_datang')</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mb-2"><a href="#"
                            class="nav-link p-0 text-white">@lang('message.kontak')</a></li>
                </ul>
            </div>

            {{-- Kotak Info --}}
            <div class="col-6 col-md-3 mb-4">
                <h5>@lang('message.kontak_info')</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-white">
                            <i class="fas fa-map-marker-alt"></i> Prasadha Jinarakkhita, Jl. Kembangan Raya Blok JJ,
                            RT.2/RW.3, Kembangan Sel., Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta
                            11610
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-white">
                            <i class="fas fa-phone-alt"></i> 081219272299
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 offset-md-1 mb-4">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="assets/image/icon.png" width="100px" alt="" class="mb-3">
                                <h5>YAYASAN DANA PARAMITA AGAMA BUDDHA INDONESIA</h5>
                            </div>
                        </div>

                        <p class="text-white">Prasadha Jinarakkhita1</p>

                        {{-- Social Media --}}
                        <div class="d-flex flex-row">
                            <a href="#" class="text-white px-2">
                                <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center p-2"
                                    style="width: 40px; height: 40px;">
                                    <i class="fab fa-facebook-square"></i>
                                </div>
                            </a>
                            <a href="#" class="text-white px-2">
                                <div class="rounded-circle bg-info d-flex align-items-center justify-content-center p-2"
                                    style="width: 40px; height: 40px;">
                                    <i class="fab fa-twitter-square"></i>
                                </div>
                            </a>
                            <a href="#" class="text-white px-2">
                                <div class="rounded-circle bg-danger d-flex align-items-center justify-content-center p-2"
                                    style="width: 40px; height: 40px;">
                                    <i class="fab fa-instagram-square"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-center py-4 my-4 border-top">
            <p class="text-center">Copyright ©2021 www.danaparamitaabi.or.id</p>
        </div>
    </div>
</footer>
