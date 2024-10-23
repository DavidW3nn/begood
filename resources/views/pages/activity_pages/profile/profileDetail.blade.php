@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="container py-5">
            <div class="bg-white p-4 rounded shadow-sm mb-4">
                <h1 class="text-center display-7 fw-bold">
                    @if ($role == 'coordinator')
                        @lang('message.biografi_koordinator')
                    @else
                        @lang('message.biografi_guru_asuh')
                    @endif
                </h1>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ asset('assets/image/3.jpeg') }}" class="img-fluid rounded-start"
                            alt="Placeholder image of Basuki" style="height:100%; width:750%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Basuki</h2>
                            <p class="card-text text-muted">Alamat/Lokasi Sekolah</p>
                            <p class="card-text">Oportet uti solum de actibus prosequionem et fugam, haec leniter et blandus
                                et reservato.</p>
                            <p class="card-text">Quae tibi placent quicunq prosunt aut diligebat multum, quod memor sis ad
                                communia sunt ab initio minima. Quod si, exempli gratia, cupidum rerum in propria sunt
                                ceramic calicem, admonere te solum Ceramic, quod sit generalis poculis, in cuius es tu
                                cupidum. Deinde, si erumpit, non turbaretur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ asset('assets/image/3.jpeg') }}" class="img-fluid rounded-start"
                            alt="Placeholder image of Basuki" style="height:100%; width:750%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Basuki</h2>
                            <p class="card-text text-muted">Alamat/Lokasi Sekolah</p>
                            <p class="card-text">Oportet uti solum de actibus prosequionem et fugam, haec leniter et blandus
                                et reservato.</p>
                            <p class="card-text">Quae tibi placent quicunq prosunt aut diligebat multum, quod memor sis ad
                                communia sunt ab initio minima. Quod si, exempli gratia, cupidum rerum in propria sunt
                                ceramic calicem, admonere te solum Ceramic, quod sit generalis poculis, in cuius es tu
                                cupidum. Deinde, si erumpit, non turbaretur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ asset('assets/image/3.jpeg') }}" class="img-fluid rounded-start"
                            alt="Placeholder image of Basuki" style="height:100%; width:750%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Basuki</h2>
                            <p class="card-text text-muted">Alamat/Lokasi Sekolah</p>
                            <p class="card-text">Oportet uti solum de actibus prosequionem et fugam, haec leniter et blandus
                                et reservato.</p>
                            <p class="card-text">Quae tibi placent quicunq prosunt aut diligebat multum, quod memor sis ad
                                communia sunt ab initio minima. Quod si, exempli gratia, cupidum rerum in propria sunt
                                ceramic calicem, admonere te solum Ceramic, quod sit generalis poculis, in cuius es tu
                                cupidum. Deinde, si erumpit, non turbaretur.</p>
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
    </div>
@endsection
