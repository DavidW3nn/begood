@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 130px; margin-bottom: 60px">
        <div class="row mb-3 text-center">
            <h2 class="fw-bold p-3 bg-light rounded">@lang('message.foto_kegiatan_yayasan')</h2>
        </div>

        {{-- Image Slider --}}
        <div class="slider">
            @foreach ($activities as $activity)
                <div class="slides" style="--img:url({{ asset('assets/image/activities/' . $activity['image']) }});">
                    <div class="content">
                        <h2>{{ $activity['title'] }}</h2>
                        <p>{{ $activity['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="buttons">
            <span class="prev"></span>
            <span class="next"></span>
        </div>

        {{-- Video kegiatan Yayasan Be Good --}}
        <div class="row mb-1 text-center videoKegiatanYBG">
            <h2 class="fw-bold p-3 bg-light rounded">@lang('message.video_kegiatan_yayasan')</h2>
        </div>

        {{-- Video --}}
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
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Lihat Video Kegiatan Yayasan Be Good --}}
        <div class="text-center mt-4">
            <a href="list-activity-videos" type="button" class="btn btn-dark">@lang('message.lihat_video_kegiatan_berjalan_lainnya')</a>
        </div>


        {{-- Kegiatan Yang Sedang Berjalan --}}
        <div class="row mb-1 text-center mt-5">
            <h2 class="fw-bold p-3 bg-light rounded">@lang('message.kegiatan_yang_sedang_berjalan')</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="card-title fw-bold">Judul Kegiatan</h2>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-thumbs-up text-black"></i>
                            <span class="ms-2 text-black">305</span>
                        </div>
                    </div>
                    <p class="text-muted">Waktu Kegiatan</p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error porro ex, culpa,
                        accusantium atque optio quaerat nisi esse cum officiis consectetur suscipit placeat dolor unde,
                        veniam debitis! Nulla, cupiditate dignissimos.</p>
                    <p class="text-muted">Quae tibi placent quicunq prosunt aut diligebat multum, quod memor sis ad communia
                        sunt ab initio minima. Quod si, exempli gratia, cupidum rerum in propria sunt ceramic calicem,
                        admonere te solum Ceramic, quod sit generalis poculis, in cuius es tu cupidum. Deinde, si erumpit,
                        non turbaretur.</p>
                    <div class="d-flex mt-3">
                        <span class="badge bg-secondary me-2">Tag</span>
                        <span class="badge bg-secondary me-2">Tag</span>
                        <span class="badge bg-secondary">Tag</span>
                    </div>
                    <a href="/ongoing-activity-detail" class="btn btn-dark mt-3">@lang('message.lanjut')</a>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
                <img src="{{ asset('assets/image/activities/kegiatan1.jpg') }}" alt="Kegiatan"
                    class="img-fluid w-100 h-100">
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="/list-ongoing-activities" type="button" class="btn btn-dark">@lang('message.lihat_kegiatan_berjalan_lainnya')</a>
        </div>

        {{-- Kegiatan Yang AKan Datang --}}
        <div class="row mb-1 text-center mt-5">
            <h2 class="fw-bold p-3 bg-light rounded">@lang('message.kegiatan_yang_akan_datang')</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="card-title fw-bold">Judul Kegiatan</h2>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-thumbs-up text-black"></i>
                            <span class="ms-2 text-black">305</span>
                        </div>
                    </div>
                    <p class="text-muted">Waktu Kegiatan</p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error porro ex, culpa,
                        accusantium atque optio quaerat nisi esse cum officiis consectetur suscipit placeat dolor unde,
                        veniam debitis! Nulla, cupiditate dignissimos.</p>
                    <p class="text-muted">Quae tibi placent quicunq prosunt aut diligebat multum, quod memor sis ad communia
                        sunt ab initio minima. Quod si, exempli gratia, cupidum rerum in propria sunt ceramic calicem,
                        admonere te solum Ceramic, quod sit generalis poculis, in cuius es tu cupidum. Deinde, si erumpit,
                        non turbaretur.</p>
                    <div class="d-flex mt-3">
                        <span class="badge bg-secondary me-2">Tag</span>
                        <span class="badge bg-secondary me-2">Tag</span>
                        <span class="badge bg-secondary">Tag</span>
                    </div>
                    <a href="/upcoming-activity-detail" class="btn btn-dark mt-3">@lang('message.lanjut')</a>

                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
                <img src="{{ asset('assets/image/activities/kegiatan1.jpg') }}" alt="Kegiatan"
                    class="img-fluid w-100 h-100">
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="/list-upcoming-activities" type="button" class="btn btn-dark">@lang('message.lihat_kegiatan_yang_akan_datang_lainnya')</a>
        </div>


    </div>
@endsection
