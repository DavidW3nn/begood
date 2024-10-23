 @extends('layouts.main')

 @section('content')
     <div class="container" style="margin-top: 150px;margin-bottom: 100px;">
         {{-- Koordinator Guru Asuh Yayasan Be Good --}}
         <div class="bg-white p-4 rounded shadow-sm mb-4">
             <h1 class="text-center display-7" style="font-weight: bold">@lang('message.koordinator_guru_asuh')</h1>
         </div>
         {{-- Card --}}
         <div class="card-wrapper d-flex justify-content-center">
             <ul class="carousel">
                 {{-- card 1 --}}
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="/profile-coordinator-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="/profile-coordinator-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="/profile-coordinator-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="/profile-coordinator-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="/profile-coordinator-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="/profile-coordinator-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>

             </ul>
         </div>
         <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
             <a href="profile-coordinator-detail" class="btn btn-dark mb-5" style="width: 250px;">
                 @lang('message.detail')
             </a>
         </div>



         {{-- Guru Asuh Yayaan Be Good --}}
         {{-- Card --}}
         <div class="bg-white p-4 rounded shadow-sm mb-4">
             <h1 class="text-center display-7" style="font-weight: bold">@lang('message.guru_asuh')</h1>
         </div>
         {{-- Card --}}
         <div class="card-wrapper d-flex justify-content-center">
             <ul class="carousel">
                 {{-- card 1 --}}
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="profile-teacher-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="profile-teacher-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="profile-teacher-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="profile-teacher-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="profile-teacher-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>
                 <li class="card-profile">
                     <div class="img"> <img src="{{ asset('assets/image/3.jpeg') }}" alt="img"></div>
                     <h2>Philipoyy</h2>
                     <span>Project Manager</span>
                     <a href="profile-teacher-detail" class="btn btn-dark mt-3">@lang('message.detail')</a>
                 </li>

             </ul>
         </div>
         <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
             <a href="profile-teacher-detail" class="btn btn-dark mb-5" style="width: 250px;">
                 @lang('message.detail')
             </a>
         </div>

         <div class="row">
             <div class="col-sm-6">
                 <div class="bg-white p-4 rounded shadow-sm mb-4">
                     <h1 class="text-center display-7" style="font-weight: bold">@lang('message.jumlah_guru_asuh')</h1>
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="bg-white p-4 rounded shadow-sm mb-4">
                     <h1 class="text-center display-7" style="font-weight: bold">@lang('message.jumlah_siswa_asuh')</h1>
                     </h1>
                 </div>
             </div>
         </div>

         {{-- Chart --}}
         {{-- Jumlah Guru Asuh --}}
         {{-- Jumlah Siswa Asuh --}}

         <div class="row">
             <div class="col-lg-6">
                 <!-- Bar chart example-->
                 <div class="card mb-4">
                     <div class="card-header">Bar Chart Example</div>
                     <div class="card-body">
                         <div class="chart-bar"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                     </div>
                     <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <!-- Pie chart example-->
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
