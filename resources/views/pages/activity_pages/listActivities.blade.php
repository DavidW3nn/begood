@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 150px; margin-bottom: 60px">
        <div class="row mb-3 text-center">
            @if ($activity == 'Ongoing')
                <h2 class="fw-bold p-3 bg-light rounded">@lang('message.kegiatan_yang_sedang_berjalan')</h2>
            @elseif ($activity == 'Upcoming')
                <h2 class="fw-bold p-3 bg-light rounded">@lang('message.kegiatan_yang_akan_datang')</h2>
            @endif
        </div>

        <div class="row mb-4">
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
                    @if ($activity == 'Ongoing')
                        <a href="/ongoing-activity-detail" class="btn btn-dark mt-3">@lang('message.lanjut')</a>
                    @elseif ($activity == 'Upcoming')
                        <a href="/upcoming-activity-detail" class="btn btn-dark mt-3">@lang('message.lanjut')</a>
                    @endif
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
                <img src="{{ asset('assets/image/activities/kegiatan1.jpg') }}" alt="Kegiatan"
                    class="img-fluid w-100 h-100">
            </div>
        </div>
        <div class="row mb-4">
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
        <div class="row mb-4">
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
        <div class="d-flex justify-content-center mt-4 mb-5">
            <button class="btn btn-light mx-1">1</button>
            <button class="btn btn-light mx-1">2</button>
            <button class="btn btn-light mx-1">3</button>
        </div>
    </div>
@endsection
