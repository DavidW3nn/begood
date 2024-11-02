@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 110px;">

        {{-- Program Donasi Yayasan Be Good --}}
        <div class="bg-white p-4 rounded shadow-sm mb-5" id="ongoing">
            <h1 class="text-center display-7" style="font-weight: bold">@lang('message.program_donasi_yayasan')</h1>
        </div>

        {{-- Donasi --}}
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="bg-white p-4 rounded shadow-sm mb-4" id="ongoing">
                    <h1 class="text-center display-7" style="font-weight: bold">Judul Program Donasi</h1>
                </div>
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('assets/image/donate/ongoing/1.jpg') }}" class="card-img-top"
                        alt="Placeholder image">
                    <div class="card-body text-center">
                        {{-- Jumlah yang dibutuhkan --}}
                        <div class="mb-5">
                            <i class="fas fa-coins text-muted">
                            </i>
                            <p class="card-text font-weight-bold">@lang('message.jumlah_yang_dibutuhkan')</p>
                            <h2 style="font-weight: bold">Rp 140.000.000</h2>
                        </div>
                        <div class="">
                            {{-- Jumlah yang terkumpul --}}
                            <i class="fas fa-seedling fa-2x text-secondary"></i>
                            <p class="card-text font-weight-bold">@lang('message.jumlah_yang_terkumpul')</p>
                            <h2 style="font-weight: bold">Rp 140.000.000</h2>
                        </div>
                        <a href="https://danaparamitaabi.or.id/programdonasi.html" target="_blank"
                            class="btn btn-dark mt-3">@lang('message.donasi')</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 rounded shadow-sm mb-4" id="ongoing">
                    <h1 class="text-center display-7" style="font-weight: bold">Judul Program Donasi</h1>
                </div>
                <div class="card border-0 shadow-sm">
                    <img src="{{ asset('assets/image/donate/ongoing/1.jpg') }}" class="card-img-top"
                        alt="Placeholder image">
                    <div class="card-body text-center">
                        {{-- Jumlah yang dibutuhkan --}}
                        <div class="mb-5">
                            <i class="fas fa-coins text-muted">
                            </i>
                            <p class="card-text font-weight-bold">@lang('message.jumlah_yang_dibutuhkan')</p>
                            <h2 style="font-weight: bold">Rp 140.000.000</h2>
                        </div>
                        <div class="">
                            {{-- Jumlah yang terkumpul --}}
                            <i class="fas fa-seedling fa-2x text-secondary"></i>
                            <p class="card-text font-weight-bold">@lang('message.jumlah_yang_terkumpul')</p>
                            <h2 style="font-weight: bold">Rp 140.000.000</h2>
                        </div>
                        <a href="https://danaparamitaabi.or.id/programdonasi.html" target="_blank"
                            class="btn btn-dark mt-3">@lang('message.donasi')</a>

                    </div>
                </div>
            </div>
        </div>

        {{-- Donasi Melalui Marketplace kami --}}
        <div class="bg-white p-4 rounded shadow-sm mb-1" id="ongoing" style="margin-top: 30px">
            <h1 class="text-center display-7" style="font-weight: bold">@lang('message.donasi_melalui_marketplace_kami')</h1>
        </div>

        <div class="container mt-3">
            <div class="row">
                <!-- Card untuk Shopee -->
                <div class="col-md-4 mb-4">
                    <a href="https://shopee.co.id" class="text-decoration-none" target="_blank">
                        <div class="card text-center">
                            <div class="card-img-top-container m-3">
                                <img src="{{ asset('assets/image/marketplace/shoope.png') }}" class="card-img-top"
                                    alt="Shopee" style="height: 200px; object-fit: contain;">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 650">Shopee</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card untuk Tokopedia -->
                <div class="col-md-4 mb-4">
                    <a href="https://tokopedia.com" class="text-decoration-none" target="_blank">
                        <div class="card text-center">
                            <div class="card-img-top-container m-3">
                                <img src="{{ asset('assets/image/marketplace/tokopedia.png') }}" class="card-img-top"
                                    alt="Tokopedia" style="height: 200px; object-fit: contain;">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 650">Tokopedia</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card untuk TikTok -->
                <div class="col-md-4 mb-4">
                    <a href="https://tiktok.com" class="text-decoration-none" target="_blank">
                        <div class="card text-center">
                            <div class="card-img-top-container m-3">
                                <img src="{{ asset('assets/image/marketplace/tiktok.png') }}" class="card-img-top"
                                    alt="TikTok" style="height: 200px; object-fit: contain;">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 650">TikTok</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        {{-- Rekening --}}
        <div class="bg-white p-4 rounded shadow-sm mb-1" id="ongoing" style="margin-top: 30px">
            <h1 class="text-center display-7" style="font-weight: bold">@lang('message.donasi_langsung_ke_rekening_resmi_kami')</h1>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row text-center">
                <!-- Kolom untuk Bank Mandiri -->
                <div class="col-md-6 d-flex align-items-center mb-4">
                    <div class="card shadow-sm w-100">
                        <div class="card-body d-flex align-items-center">
                            <img src="{{ asset('assets/image/banks/bca.png') }}" alt="Bank BCA" class="img-fluid mr-3"
                                style="width: 150px; height: auto; margin-right: 20px;">
                            <div class="text-center w-100">
                                <h5 class="card-title" style="font-weight: bold;font-size: 25px;">Yayasan Begood</h5>
                                <p class="card-text" style="font-weight: 400;font-size: 20px">BCA</p>
                                <p class="card-text font-weight-bold"
                                    style="font-size: 25px;font-weight:bold;color: #e96022;">
                                    2886076808</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom untuk Bank BRI -->
                <div class="col-md-6 d-flex align-items-center mb-4">
                    <div class="card shadow-sm w-100">
                        <div class="card-body d-flex align-items-center">
                            <img src="{{ asset('assets/image/banks/bri.png') }}" alt="BRI" class="img-fluid mr-3"
                                style="width: 150px; height: auto; margin-right: 20px;">
                            <div class="text-center w-100">
                                <h5 class="card-title" style="font-weight: bold;font-size: 25px;">Yayasan Begood</h5>
                                <p class="card-text" style="font-weight: 400;font-size: 20px">BRI</p>
                                <p class="card-text font-weight-bold"
                                    style="font-size: 25px;font-weight:bold;color: #e96022;">
                                    111801000366305</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








    </div>
@endsection
