@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 150px;margin-bottom: 100px;">

        <div class="bg-white p-4 mb-5 rounded-lg shadow-lg d-flex flex-column flex-md-row flex-column-responsive">
            <div class="d-flex align-items-center justify-content-center" style="width: 200px; height: 200px;">
                <img src="{{ asset('assets/image/3.jpeg') }}" alt="Placeholder image" class="img-fluid"
                    style="width: 138px; height: 190px; border-radius: 10px; margin-right: 20px;">
            </div>
            <div class="ml-5 d-flex flex-column justify-content-between ml-4-responsive">
                <div>
                    <h2 class="font-weight-bold text-dark">@lang('message.instagram_ybg')</h2>
                    <a href="https://www.instagram.com/yayasanbegood/" class="text-primary"
                        target="_blank">@lang('message.link_ybg')</a>
                    <p class="text-secondary mt-2">Quae tibi placent quicunq prosunt aut diligebat multum, quod memor sis ad
                        communia sunt ab initio minima. Quod si, exempli gratia, cupidum rerum in propria sunt ceramic</p>
                </div>
                <a href="https://www.instagram.com/yayasanbegood/" target="_blank"
                    class="btn btn-dark mt-3 align-self-start align-self-start-responsive">
                    @lang('message.kunjungi')</a>
            </div>
        </div>




        {{-- Chart --}}
        <div class="row">
            <div class="col-sm-6">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <h1 class="text-center display-7" style="font-weight: bold">@lang('message.jumlah_smb')</h1>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Bar Chart Example</div>
                    <div class="card-body">
                        <div class="chart-bar"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>

            <div class="col-sm-6 ">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <h1 class="text-center display-7" style="font-weight: bold">@lang('message.jumlah_anak_smb')</h1>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Pie Chart Example</div>
                    <div class="card-body">
                        <div class="chart-pie"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>


        {{-- Button Donasi --}}
        <div class="d-flex justify-content-center align-items-center mt-5" style="height: 10vh;">
            <a href="#" class="btn btn-dark d-flex justify-content-center align-items-center"
                style="width: 200px; height: 50px;">
                @lang('message.donasi')
            </a>
        </div>

    </div>
@endsection
