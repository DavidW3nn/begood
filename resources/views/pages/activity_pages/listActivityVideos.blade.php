@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 110px;">
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h1 class="text-center display-7" style="font-weight: bold">@lang('message.daftar_video_kegiatan')</h1>
        </div>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-8 p-3" style="height: 300px;">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/mQstYKoZ5O8?si=CU82QKwACDWEs4_c" width="100%" height="100%"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title fw-bold mb-0">Judul Video Kegiatan</h5>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-thumbs-up text-muted"></i>
                                <span class="ms-1 text-muted">20</span>
                            </div>
                        </div>
                        <p class="card-text">Waktu Kegiatan</p>
                        <p class="card-text">Oportet uti solum de actibus prosequionem et fugam, haec leniter et blandus et
                            reservato.</p>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>

                        <div class="d-flex mt-5">
                            <button class="btn btn-outline-secondary me-2" onclick="toggleLikeActive(this)">
                                <i class="fas fa-thumbs-up"></i>
                            </button>
                            <button class="btn btn-outline-secondary" onclick="toggleLikeActive(this)">
                                <i class="fas fa-thumbs-down"></i>
                            </button>
                            {{-- Detail --}}
                            <a href="/video-detail" class="btn btn-dark ms-auto" type="button">@lang('message.detail')</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-8 p-3" style="height: 300px;">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/mQstYKoZ5O8?si=CU82QKwACDWEs4_c" width="100%" height="100%"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title fw-bold mb-0">Judul Video Kegiatan</h5>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-thumbs-up text-muted"></i>
                                <span class="ms-1 text-muted">20</span>
                            </div>
                        </div>
                        <p class="card-text">Waktu Kegiatan</p>
                        <p class="card-text">Oportet uti solum de actibus prosequionem et fugam, haec leniter et blandus et
                            reservato.</p>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>

                        <div class="d-flex mt-5">
                            <button class="btn btn-outline-secondary me-2" onclick="toggleLikeActive(this)">
                                <i class="fas fa-thumbs-up"></i>
                            </button>
                            <button class="btn btn-outline-secondary" onclick="toggleLikeActive(this)">
                                <i class="fas fa-thumbs-down"></i>
                            </button>
                            {{-- Detail --}}
                            <a href="/video-detail" class="btn btn-dark ms-auto" type="button">@lang('message.detail')</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-8 p-3" style="height: 300px;">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/mQstYKoZ5O8?si=CU82QKwACDWEs4_c" width="100%" height="100%"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title fw-bold mb-0">Judul Video Kegiatan</h5>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-thumbs-up text-muted"></i>
                                <span class="ms-1 text-muted">20</span>
                            </div>
                        </div>
                        <p class="card-text">Waktu Kegiatan</p>
                        <p class="card-text">Oportet uti solum de actibus prosequionem et fugam, haec leniter et blandus et
                            reservato.</p>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>

                        <div class="d-flex mt-5">
                            <button class="btn btn-outline-secondary me-2" onclick="toggleLikeActive(this)">
                                <i class="fas fa-thumbs-up"></i>
                            </button>
                            <button class="btn btn-outline-secondary" onclick="toggleLikeActive(this)">
                                <i class="fas fa-thumbs-down"></i>
                            </button>
                            {{-- Detail --}}
                            <a href="/video-detail" class="btn btn-dark ms-auto" type="button">@lang('message.detail')</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-center mt-4 mb-5">
            <button class="btn btn-light mx-1">1</button>
            <button class="btn btn-light mx-1">2</button>
            <button class="btn btn-light mx-1">3</button>
        </div>
    </div>
@endsection
