@extends('layouts.main')


@section('content')
    <div class="container" style="margin-top: 150px;margin-bottom: 100px;">
        {{-- Daftar Listerasi --}}
        <div class="bg-white p-4 rounded shadow-sm mb-4" id="pendidikan">
            <h1 class="text-center display-7" style="font-weight: bold">@lang('message.daftar_literasi')</h1>
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

            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-light mx-1">1</button>
                <button class="btn btn-light mx-1">2</button>
                <button class="btn btn-light mx-1">3</button>
            </div>
        </div>
    </div>
@endsection
