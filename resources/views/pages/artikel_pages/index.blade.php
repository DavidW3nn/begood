@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 150px;margin-bottom: 100px;">
        {{-- Literasi Pendidikan --}}
        <div class="bg-white p-4 rounded shadow-sm mb-4" id="pendidikan">
            <h1 class="text-center display-7" style="font-weight: bold">@lang('message.literasi_pendidikan')</h1>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="border p-4 rounded-lg shadow-sm">
                    <div class="d-flex align-items-center mb-4">
                        <img alt="Placeholder image" class="w-24 h-24 mr-5" height="150"
                            src="https://storage.googleapis.com/a1aa/image/NGDq5jb95eSYASXRSbcScw7FNj7gaQ1Uur6KZAmuUViZi60JA.jpg"
                            width="130" />
                        <div style="margin-left: 30px">
                            <h3 class="h5 font-weight-bold">
                                Judul Literasi
                            </h3>
                            <p class="text-muted">
                                Oportet ut saltem de actibus praesentationem et fugen, haec iustior et blandus et reseruata.
                            </p>
                            <p class="text-muted">
                                Quae hic placent eique.
                            </p>
                            <span class="badge bg-secondary me-2">Tag</span>
                            <span class="badge bg-secondary me-2">Tag</span>
                            <span class="badge bg-secondary">Tag</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-dark">
                            @lang('message.unduh')
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="border p-4 rounded-lg shadow-sm">
                    <div class="d-flex align-items-center mb-4">
                        <img alt="Placeholder image" class="w-24 h-24 mr-5" height="150"
                            src="https://storage.googleapis.com/a1aa/image/NGDq5jb95eSYASXRSbcScw7FNj7gaQ1Uur6KZAmuUViZi60JA.jpg"
                            width="130" />
                        <div style="margin-left: 30px">
                            <h3 class="h5 font-weight-bold">
                                Judul Literasi
                            </h3>
                            <p class="text-muted">
                                Oportet ut saltem de actibus praesentationem et fugen, haec iustior et blandus et reseruata.
                            </p>
                            <p class="text-muted">
                                Quae hic placent eique.
                            </p>
                            <span class="badge bg-secondary me-2">Tag</span>
                            <span class="badge bg-secondary me-2">Tag</span>
                            <span class="badge bg-secondary">Tag</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-dark">
                            @lang('message.unduh')
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/list-literacy" class="btn btn-dark"> @lang('message.lihat_literasi_lainnya')
            </a>
        </div>
    </div>

    {{-- Artikel Buddhis --}}
    <div class="bg-white p-4 rounded shadow-sm mb-4" id="artikel">
        <h1 class="text-center display-7" style="font-weight: bold">@lang('message.artikel_dhamma')</h1>
    </div>

    <div class="row m-3">
        <div class="col-md-6 mb-4">
            <div class="border p-4 rounded-lg shadow-sm">
                <img alt="Placeholder image" class="w-100 h-48 mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/NGDq5jb95eSYASXRSbcScw7FNj7gaQ1Uur6KZAmuUViZi60JA.jpg"
                    width="300" />
                <h3 class="h5 font-weight-bold">
                    Judul Artikel
                </h3>
                <p class="text-muted mb-2">
                    Penulis Artikel
                </p>
                <p class="text-muted mb-4">
                    Oportet ut saltem de actibus praesentationem et fugen, haec iustior et blandus et reseruata. Quae hic
                    placent eique.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="">
                        <span class="badge bg-secondary me-2">Tag</span>
                        <span class="badge bg-secondary me-2">Tag</span>
                        <span class="badge bg-secondary">Tag</span>
                    </div>

                    <button class="btn btn-dark">
                        @lang('message.unduh')
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="border p-4 rounded-lg shadow-sm">
                <img alt="Placeholder image" class="w-100 h-48 mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/NGDq5jb95eSYASXRSbcScw7FNj7gaQ1Uur6KZAmuUViZi60JA.jpg"
                    width="300" />
                <h3 class="h5 font-weight-bold">
                    Judul Artikel
                </h3>
                <p class="text-muted mb-2">
                    Penulis Artikel
                </p>
                <p class="text-muted mb-4">
                    Oportet ut saltem de actibus praesentationem et fugen, haec iustior et blandus et reseruata. Quae hic
                    placent eique.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="">
                        <span class="badge bg-secondary me-2">Tag</span>
                        <span class="badge bg-secondary me-2">Tag</span>
                        <span class="badge bg-secondary">Tag</span>
                    </div>

                    <button class="btn btn-dark">
                        @lang('message.unduh')
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="/list-article-dhamma" class="btn btn-dark"> @lang('message.lihat_artikel_lainnya')</a>
    </div>
    </div>

    {{-- Video Dhamma --}}
    <div class="bg-white p-4 rounded shadow-sm mb-4 mt-5" id="video_dhamma">
        <h1 class="text-center display-7" style="font-weight: bold">@lang('message.video_dhamma')</h1>
    </div>

    <div class="card mb-3 m-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-8 p-3" style="height: 300px;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mQstYKoZ5O8?si=CU82QKwACDWEs4_c"
                    width="100%" height="100%" allowfullscreen></iframe>
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
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Button  --}}
    <div class="d-flex justify-content-center align-items-center mt-3 mb-5" style="height: 10vh;">
        <a href="/list-videos-dhamma" class="btn btn-dark d-flex justify-content-center align-items-center"
            style="width: 250px; height: 50px;">
            @lang('message.lihat_video_dhamma_lainnya')
        </a>
    </div>
    </div>
@endsection
