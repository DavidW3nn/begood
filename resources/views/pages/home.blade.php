@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 150px;">

        {{-- Notifikasi --}}
        <div id="notification"
            style="display: none; position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%); 
           background-color: #f1f1f1; color: #333; padding: 15px 20px; border-radius: 5px; 
           box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); z-index: 9999;">
            @lang('message.notif_rek')
        </div>

        {{-- Carousel --}}
        <div class="gallery">
            <div class="gallery-container">
                <img class="gallery-item gallery-item-1 img-fluid" src="{{ asset('assets/image/1.jpg') }}" alt=""
                    data-index="1">
                <img class="gallery-item gallery-item-2 img-fluid" src="{{ asset('assets/image/1.jpg') }}" alt=""
                    data-index="2">
                <img class="gallery-item gallery-item-3 img-fluid" src="{{ asset('assets/image/1.jpg') }}" alt=""
                    data-index="3">
                <img class="gallery-item gallery-item-4 img-fluid" src="{{ asset('assets/image/1.jpg') }}" alt=""
                    data-index="4">
                <img class="gallery-item gallery-item-5 img-fluid" src="{{ asset('assets/image/1.jpg') }}" alt=""
                    data-index="5">
                <img class="gallery-item gallery-item-6 img-fluid" src="{{ asset('assets/image/1.jpg') }}" alt=""
                    data-index="6">

            </div>
            <div class="gallery-controls">

            </div>
        </div>
        {{-- End Carousel --}}

        {{-- Mengapa Yayasan Be Good --}}
        <div class="row mb-5" style="background-color: rgb(250, 250, 250); padding: 20px; margin-top: 100px;">
            <div class="col-12 col-md-6 mb-4">
                <h2 class="mb-3 fw-bold">Mengapa Yayasan Be Good?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione id aut eligendi quaerat consequuntur
                    nostrum possimus voluptatibus suscipit accusantium. Modi libero, aspernatur aliquam porro officia ad
                    dolorem! At mollitia nemo natus ea repellendus dolores quod incidunt eligendi asperiores voluptas.
                    Doloremque asperiores soluta blanditiis nemo voluptate reiciendis quas sequi quos inventore.</p>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        {{-- End Mengapa Yayasan Be Good --}}

        {{-- Program Kami Berikutnya --}}
        <div class="row mt-5 mb-5" style="background-color: rgb(250, 250, 250); padding: 20px;">
            <div class="col-12 col-md-6 mb-4">
                <h2 class="mb-3 fw-bold">Program Kami Berikutnya</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione id aut eligendi quaerat consequuntur
                    nostrum possimus voluptatibus suscipit accusantium. Modi libero, aspernatur aliquam porro officia ad
                    dolorem! At mollitia nemo natus ea repellendus dolores quod incidunt eligendi asperiores voluptas.
                    Doloremque asperiores soluta blanditiis nemo voluptate reiciendis quas sequi quos inventore.</p>
                <button class="btn btn-dark mt-3">Donasi</button>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/image/1.jpg') }}" class="img-fluid" alt="Deskripsi Gambar">
            </div>
        </div>
        {{-- End Program Kami Berikutnya --}}

        {{-- Rek Yayasan --}}
        <div class="text-center mb-5 mt-5">
            <h3 class="m-3 fw-bold">@lang('message.no_rek_yayasan')</h3>
            <hr style="border: 1px solid #f1f1f1; width: 30%; margin-bottom: 20px;">
            <div class="d-flex flex-wrap justify-content-center" style="overflow-x: auto;">
                <div class="card-rek text-black bg-light mb-3 bg-white mx-2"
                    style="max-width: 16rem; border: 2px solid rgb(243, 243, 243); border-radius: 15px; overflow: hidden;">
                    <div class="card-body text-center p-4">
                        <img src="{{ asset('assets/image/banks/bca.png') }}" alt="Logo BCA" width="150px">
                        <h3 class="fw-bold" id="noRek1" style="font-size: 18px; color: #e96022;">2886076808</h3>
                        <h5 class="fw-bold" style="font-size: 14px; color: rgb(112, 112, 112);">Yay. Dana Paramita Agama
                            Buddha Indonesia</h5>
                        <p class="card-text text-muted" style="font-size: 12px;">ATM Transfer, Internet Banking, Mobile
                            Banking</p>
                        <button class="btn btn-light copy-btn" data-clipboard-target="#noRek1">@lang('message.salin')</button>
                    </div>
                </div>

                <div class="card-rek text-black bg-light mb-3 bg-white mx-2"
                    style="max-width: 16rem; border: 2px solid rgb(243, 243, 243); border-radius: 15px; overflow: hidden;">
                    <div class="card-body text-center p-4">
                        <img src="{{ asset('assets/image/banks/bri.png') }}" alt="Logo BRI" width="150px">
                        <h3 class="fw-bold" id="noRek2" style="font-size: 18px; color: #e96022;">111801000366305</h3>
                        <h5 class="fw-bold" style="font-size: 14px; color: rgb(112, 112, 112);">Yay. Dana Paramita Agama
                            Buddha Indonesia</h5>
                        <p class="card-text text-muted" style="font-size: 12px;">ATM Transfer, Internet Banking, Mobile
                            Banking</p>
                        <button class="btn btn-light copy-btn" data-clipboard-target="#noRek2">@lang('message.salin')</button>
                    </div>
                </div>

                <div class="card-rek text-black bg-light mb-3 bg-white mx-2"
                    style="max-width: 16rem; border: 2px solid rgb(243, 243, 243); border-radius: 15px; overflow: hidden;">
                    <div class="card-body text-center p-4">
                        <img src="{{ asset('assets/image/banks/qris1.png') }}" alt="Logo QRIS" width="150px">
                        <h3 class="fw-bold" id="noRek3" style="font-size: 18px; color: #e96022;">ID201901243478101</h3>
                        <h5 class="fw-bold" style="font-size: 14px; color: rgb(112, 112, 112);">QRIS</h5>
                        <p class="card-text text-muted" style="font-size: 12px;">Transfers Via QR Code BCA, Bank Permata</p>
                        <button class="btn btn-light copy-btn" data-clipboard-target="#noRek3">@lang('message.salin')</button>
                    </div>
                </div>

                <div class="card-rek text-black bg-light mb-3 bg-white mx-2"
                    style="max-width: 16rem; border: 2px solid rgb(243, 243, 243); border-radius: 15px; overflow: hidden;">
                    <div class="card-body text-center p-4">
                        <img src="{{ asset('assets/image/banks/qris2.png') }}" alt="Logo QR E-Payment" width="150px">
                        <h3 class="fw-bold" style="font-size: 18px; color: #e96022;">QR CODE</h3>
                        <h5 class="fw-bold" style="font-size: 14px; color: rgb(112, 112, 112);">QR E-Payment</h5>
                        <p class="card-text text-muted" style="font-size: 12px;">Payment with QR Code - Gopay, Ovo, Dana,
                            Link Aja</p>
                    </div>
                </div>
            </div>
        </div>



        {{-- End Rek Yayasan --}}

    </div>
@endsection
