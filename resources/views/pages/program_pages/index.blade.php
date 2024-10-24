@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 110px;">

        {{-- Program Donasi Yang Sedang Berjalan --}}
        <div class="bg-white p-4 rounded shadow-sm mb-4" id="ongoing">
            <h1 class="text-center display-7" style="font-weight: bold">@lang('message.program_donasi_yang_sedang_berjalan')</h1>
        </div>

        {{-- Carousel1 Image --}}
        <div id="carousel1" class="carousel slide mb-" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($donasiBerjalan as $index => $db)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/image/donate/ongoing/' . $db) }}" class="d-block w-50" width="100px"
                                height="700%" alt="Placeholder image">
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <i class="fas fa-chevron-right"></i>
                <span class="sr-only">Next</span>
            </a>
            <ol class="carousel-indicators">
                @foreach ($donasiBerjalan as $index => $db)
                    <li data-target="#carousel1" class="{{ $index === 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
        </div>

        {{-- Button --}}
        <div class="text-center mb-4 mt-5">
            <a href="/donate" class="btn btn-dark">@lang('message.lihat_program_donasi')</a>
        </div>


        {{-- Program Donasi Selanjutnya --}}
        <div class="bg-white p-4 rounded shadow-sm mb-5 mt-5" id="upcoming">
            <h1 class="text-center display-7" style="font-weight: bold">@lang('message.program_donasi_yang_akan_datang')</h1>
        </div>

        {{-- Carousel2 Image --}}
        <div id="carousel2" class="carousel slide mb-" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($donasiAkanDatang as $index => $dad)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/image/donate/upcoming/' . $dad) }}" class="d-block w-50"
                                width="100px" height="700%" alt="Placeholder image">
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                <i class="fas fa-chevron-right"></i>
                <span class="sr-only">Next</span>
            </a>
            <ol class="carousel-indicators">
                @foreach ($donasiAkanDatang as $index => $dad)
                    <li data-target="#carousel2" class="{{ $index === 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
        </div>



        {{-- Program Donasi Yang Sudah Selesai --}}
        <div class="bg-white p-4 rounded shadow-sm mb-4 mt-5">
            <h1 class="text-center display-7" style="font-weight: bold">@lang('message.program_donasi_yang_sudah_selesai')</h1>
        </div>

        {{-- Carousel3 Image --}}
        <div id="donationCarousel" class="carousel slide bg-white p-4 rounded-bottom shadow-sm mb-5" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($donasiSelesai as $index => $image)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card border-0">
                                    <img src="{{ asset('assets/image/donate/completed/' . $image) }}" class="card-img-top"
                                        alt="Placeholder image">
                                    <div class="card-body text-center">
                                        <div class="">
                                            {{-- Jumlah yang terkumpul --}}
                                            <i class="fas fa-seedling fa-2x text-secondary"></i>
                                            <p class="card-text font-weight-bold">@lang('message.jumlah_yang_terkumpul')</p>
                                            <h2 style="font-weight: bold">Rp 140.000.000</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tambah kolom kedua jika ada -->
                            @if ($index + 1 < count($donasiSelesai))
                                <div class="col-md-6">
                                    <div class="card border-0">
                                        <img src="{{ asset('assets/image/donate/completed/' . $donasiSelesai[$index + 1]) }}"
                                            class="card-img-top" alt="Placeholder image">
                                        <div class="card-body text-center">
                                            <div class="">
                                                {{-- Jumlah yang terkumpul --}}
                                                <i class="fas fa-seedling fa-2x text-secondary"></i>
                                                <p class="card-text font-weight-bold">@lang('message.jumlah_yang_terkumpul')</p>
                                                <h2 style="font-weight: bold">Rp 140.000.000</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#donationCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#donationCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <ol class="carousel-indicators">
                @foreach ($donasiSelesai as $index => $image)
                    <li data-target="#donationCarousel" data-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
        </div>


    </div>
@endsection
