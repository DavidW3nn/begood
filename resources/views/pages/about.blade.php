@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 150px;">

        {{-- Latar Belakang YBG --}}
        <div id="latar_belakang" class="row mb-5">
            <div class="col-sm-6">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h2 class="mb-3 fw-bold">@lang('message.latar_belakang') YBG</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione id aut eligendi quaerat consequuntur
                        nostrum possimus voluptatibus suscipit accusantium. Modi libero, aspernatur aliquam porro officia ad
                        dolorem! At mollitia nemo natus ea repellendus dolores quod incidunt eligendi asperiores voluptas.
                        Doloremque asperiores soluta blanditiis nemo voluptate reiciendis quas sequi quos inventore. Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Quibusdam voluptatibus ex aliquid, quaerat
                        doloribus explicabo non magnam vero est debitis necessitatibus! Sed mollitia dolor sunt molestiae
                        nam sint quo deleniti!</p>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/1.jpg') }}" class="img-fluid rounded" alt="Deskripsi Gambar">
            </div>
        </div>

        {{-- Visi Misi Tujuan --}}
        <div id="visi_misi_tujuan" class="row mb-5">
            <div class="col-sm-4">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h2 class="mb-3 fw-bold">@lang('message.visi')</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, voluptatibus eos veritatis
                        alias,
                        ipsa recusandae esse fuga ducimus voluptates nostrum eligendi fugit harum corporis explicabo quod
                        quas
                        non cupiditate libero.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h2 class="mb-3 fw-bold">@lang('message.misi')</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, voluptatibus eos veritatis
                        alias,
                        ipsa recusandae esse fuga ducimus voluptates nostrum eligendi fugit harum corporis explicabo quod
                        quas
                        non cupiditate libero.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h2 class="mb-3 fw-bold">@lang('message.tujuan')</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, voluptatibus eos veritatis
                        alias,
                        ipsa recusandae esse fuga ducimus voluptates nostrum eligendi fugit harum corporis explicabo quod
                        quas
                        non cupiditate libero.
                    </p>
                </div>
            </div>
        </div>

        {{-- Legalitas dan Hukum --}}
        <div id="legalitas_hukum" class="row mb-5">
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/1.jpg') }}" class="img-fluid rounded" alt="Deskripsi Gambar">
            </div>
            <div class="col-sm-6">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h2 class="mb-3 fw-bold">@lang('message.legalitas_hukum')</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione id aut eligendi quaerat consequuntur
                        nostrum possimus voluptatibus suscipit accusantium. Modi libero, aspernatur aliquam porro officia ad
                        dolorem! At mollitia nemo natus ea repellendus dolores quod incidunt eligendi asperiores voluptas.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum saepe voluptas excepturi vel! Nam
                        labore placeat laboriosam, nihil porro vero.
                        Doloremque asperiores soluta blanditiis nemo voluptate reiciendis quas sequi quos inventore.</p>
                </div>
            </div>
        </div>

        {{-- Struktur Yayasan Be Good --}}
        <div id="struktur_yayasan" class="row mb-5 text-center  justify-content-center">
            <div class="col-sm-12">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h2 class="mb-3 fw-bold">@lang('message.struktur_yayasan')</h2>
                </div>
            </div>

            <div class="row justify-content-center mb-4 mt-5">
                <div class="col-md-3 mb-4">
                    <div class="card struktur-yayasan" style="width: 100%;">
                        <img src="{{ asset('assets/image/3.jpeg') }}"
                            class="card-img-top rounded-circle border border-light" alt=""
                            style="width: 100px; height: 100px; object-fit: cover; margin: auto; margin-top: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ketua Yayasan</h5>
                            <p class="card-text">Josephine</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-3 mb-4 position-relative">
                    <div class="card struktur-yayasan" style="width: 100%;">
                        <img src="{{ asset('assets/image/2.jpg') }}" class="card-img-top rounded-circle border border-light"
                            alt=""
                            style="width: 100px; height: 100px; object-fit: cover; margin: auto; margin-top: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bendahara</h5>
                            <p class="card-text">Angeline</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 position-relative">
                    <div class="card struktur-yayasan" style="width: 100%;">
                        <img src="{{ asset('assets/image/2.jpg') }}" class="card-img-top rounded-circle border border-light"
                            alt=""
                            style="width: 100px; height: 100px; object-fit: cover; margin: auto; margin-top: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sekretaris</h5>
                            <p class="card-text">Michael</p>
                        </div>
                    </div>
                    <div class="connecting-line"></div>
                </div>
            </div>
        </div>



        {{-- Pengurus YBG --}}
        <div id="pengurus" class="row mb-5 text-center bg-light rounded shadow-sm justify-content-center">
            <div class="col-sm-12">
                <div class="p-4 ">
                    <h2 class="mb-3 fw-bold">@lang('message.pengurus')</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-2 mb-3">
                    <div class="card pengurus" style="width: 100%;">
                        <img src="{{ asset('assets/image/2.jpg') }}" class="card-img-top rounded-circle" alt=""
                            style="width: 100px; height: 100px; object-fit: cover; margin: auto; margin-top: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ketua Yayasan</h5>
                            <p class="card-text">Josephine</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card pengurus" style="width: 100%;">
                        <img src="{{ asset('assets/image/2.jpg') }}" class="card-img-top rounded-circle" alt=""
                            style="width: 100px; height: 100px; object-fit: cover; margin: auto; margin-top: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ketua Yayasan</h5>
                            <p class="card-text">Josephine</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card pengurus" style="width: 100%;">
                        <img src="{{ asset('assets/image/2.jpg') }}" class="card-img-top rounded-circle" alt=""
                            style="width: 100px; height: 100px; object-fit: cover; margin: auto; margin-top: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ketua Yayasan</h5>
                            <p class="card-text">Josephine</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card pengurus" style="width: 100%;">
                        <img src="{{ asset('assets/image/2.jpg') }}" class="card-img-top rounded-circle" alt=""
                            style="width: 100px; height: 100px; object-fit: cover; margin: auto; margin-top: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ketua Yayasan</h5>
                            <p class="card-text">Josephine</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card pengurus" style="width: 100%;">
                        <img src="{{ asset('assets/image/2.jpg') }}" class="card-img-top rounded-circle" alt=""
                            style="width: 100px; height: 100px; object-fit: cover; margin: auto; margin-top: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ketua Yayasan</h5>
                            <p class="card-text">Josephine</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card pengurus" style="width: 100%;">
                        <img src="{{ asset('assets/image/2.jpg') }}" class="card-img-top rounded-circle" alt=""
                            style="width: 100px; height: 100px; object-fit: cover; margin: auto; margin-top: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ketua Yayasan</h5>
                            <p class="card-text">Josephine</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        {{-- Program Kerja YBG --}}
        <div id="program_kerja" class="row mb-5">
            <div class="col-sm-6">
                <div class="p-4 bg-light rounded shadow-sm">
                    <h2 class="mb-3 fw-bold">@lang('message.program_kerja')</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione id aut eligendi quaerat consequuntur
                        nostrum possimus voluptatibus suscipit accusantium. Modi libero, aspernatur aliquam porro officia ad
                        dolorem! At mollitia nemo natus ea repellendus dolores quod incidunt eligendi asperiores voluptas.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum saepe voluptas excepturi vel! Nam
                        labore placeat laboriosam, nihil porro vero.
                        Doloremque asperiores soluta blanditiis nemo voluptate reiciendis quas sequi quos inventore.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('assets/image/1.jpg') }}" class="img-fluid rounded" alt="Deskripsi Gambar">
            </div>
        </div>



        {{-- Mengapa Kalimantan Barat --}}
        <div id="mengapa_kalimantan_barat" class="row mb-5 text-center p-4">
            <div class="row mb-4  mt-5 text-center">
                <h2 class="fw-bold p-3 bg-light rounded">@lang('message.mengapa_kalimantan_barat')</h2>
            </div>


            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
