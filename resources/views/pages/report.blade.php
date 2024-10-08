@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 150px;">
        {{-- Laporan Keuangan --}}
        <div id="keuangan" class="row mb-4 text-center">
            <h2 class="fw-bold p-3 bg-light rounded">@lang('message.laporan_keuangan')</h2>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card bg-light shadow border-0 text-center p-3">
                    <h4 class="mb-3">@lang('message.laporan') 2024</h4>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/image/1.jpg') }}" alt="Laporan 2024" class="img-fluid mb-3"
                            style="max-width: 80%; border-radius: 10px;">
                    </div>
                    <a href="{{ asset('assets/image/1.jpg') }}" class="btn btn-dark btn-sm" download>@lang('message.unduh')</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-light shadow border-0 text-center p-3">
                    <h4 class="mb-3">@lang('message.laporan') 2025</h4>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/image/1.jpg') }}" alt="Laporan 2025" class="img-fluid mb-3"
                            style="max-width: 80%; border-radius: 10px;">
                    </div>
                    <a href="{{ asset('assets/image/1.jpg') }}" class="btn btn-dark btn-sm" download>@lang('message.unduh')</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-light shadow border-0 text-center p-3">
                    <h4 class="mb-3">@lang('message.laporan') 2026</h4>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/image/1.jpg') }}" alt="Laporan 2026" class="img-fluid mb-3"
                            style="max-width: 80%; border-radius: 10px;">
                    </div>
                    <a href="{{ asset('assets/image/1.jpg') }}" class="btn btn-dark btn-sm" download>@lang('message.unduh')</a>
                </div>
            </div>
        </div>

        {{-- Laporan Pertanggung Jawaban --}}
        <div id="pertanggung_jawaban" class="row mb-4  mt-5 text-center">
            <h2 class="fw-bold p-3 bg-light rounded">@lang('message.pertanggung_jawaban')</h2>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card bg-light shadow border-0 text-center p-3">
                    <h4>@lang('message.laporan_kegiatan') </h4>
                    <span class="text-start mb-2 ms-4">Judul Laporan kegiatan</span>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/image/1.jpg') }}" alt="Laporan 2024" class="img-fluid mb-3"
                            style="max-width: 80%; border-radius: 10px;">
                    </div>
                    <a href="{{ asset('assets/image/1.jpg') }}" class="btn btn-dark btn-sm" download>@lang('message.unduh')</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-light shadow border-0 text-center p-3">
                    <h4>@lang('message.laporan_kegiatan') </h4>
                    <span class="text-start mb-2 ms-4">Judul Laporan kegiatan</span>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/image/1.jpg') }}" alt="Laporan 2025" class="img-fluid mb-3"
                            style="max-width: 80%; border-radius: 10px;">
                    </div>
                    <a href="{{ asset('assets/image/1.jpg') }}" class="btn btn-dark btn-sm" download>@lang('message.unduh')</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-light shadow border-0 text-center p-3">
                    <h4>@lang('message.laporan_kegiatan') </h4>
                    <span class="text-start mb-2 ms-4">Judul Laporan kegiatan</span>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/image/1.jpg') }}" alt="Laporan 2026" class="img-fluid mb-3"
                            style="max-width: 80%; border-radius: 10px;">
                    </div>
                    <a href="{{ asset('assets/image/1.jpg') }}" class="btn btn-dark btn-sm" download>@lang('message.unduh')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
