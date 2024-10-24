```html
@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <div class="mx-auto p-4 bg-white shadow-md mt-8" style="max-width: 1200px;">
            <div class="p-4 bg-light d-flex flex-column flex-md-row justify-content-between align-items-center">
                <h1 class="text-center flex-grow-1" style="font-size: 2.5rem; font-weight: bold; color: #4a4a4a;">Judul Video
                    Kegiatan</h1>
                <div class="d-flex align-items-center justify-content-center mt-3 mt-md-0">
                    <div class="d-flex align-items-center mr-3">
                        <i class="fas fa-thumbs-up" style="font-size: 3rem; margin-right:10px"></i>
                        <span class="ml-1" style="font-size: 1.25rem;">67</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-thumbs-down" style="font-size: 3rem; margin-top:15px;margin-left:10px"></i>
                        <span class="ml-1" style="font-size: 1.25rem;">4</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="border border-secondary rounded">
                <iframe class="w-100 rounded" style="height: 28rem;" src="https://www.youtube.com/embed/n1nSMOwe-fw"
                    frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="d-flex mt-3 mb-3">
                <button class="btn btn-outline-secondary me-2" onclick="toggleLikeActive(this)">
                    <i class="fas fa-thumbs-up"></i>
                </button>
                <button class="btn btn-outline-secondary" onclick="toggleLikeActive(this)">
                    <i class="fas fa-thumbs-down"></i>
                </button>
                <a href="https://www.ssyoutube.com/watch?v=n1nSMOwe-fw" class="btn btn-dark border border-secondary ms-auto"
                    style="font-size: 1.25rem;" download>@lang('message.unduh')</a>
            </div>
        </div>
        <div class="mt-8 border-top border-secondary pt-4">
            <h2 class="font-weight-bold" style="font-size: 1.25rem; color: #4a4a4a;">@lang('message.komentar')</h2>
            <textarea class="form-control mt-2" rows="3" placeholder="@lang('message.placeholder_tanggapan_komentar')"></textarea>
            <button class="btn btn-dark border border-secondary mt-2 mb-5"
                style="font-size: 1.25rem;">@lang('message.kirim')</button>
        </div>
        <div class="mt-8">
            <h2 class="font-weight-bold" style="font-size: 1.25rem; color: #4a4a4a;font-weight:bold">@lang('message.daftar_komentar')</h2>
            <div class="mt-4 p-4 border border-secondary rounded">
                <p class="font-weight-bold">Anonimus 1</p>
                <p class="mt-2">Sollicitant homines non sunt nisi quam formae rerum principiis opiniones. Mors enim est
                    terribilis ut Socrati aliud esse apparet. Sed timor mortis est notio terribile. Cum igitur impediantur
                    turben tur aut dolore videamus aliis non tribuunt nisi nobis hoc est, in principiis</p>
                <div class="d-flex mt-5">
                    <button class="btn btn-outline-secondary me-2" onclick="toggleLikeActive(this)">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="btn btn-outline-secondary" onclick="toggleLikeActive(this)">
                        <i class="fas fa-thumbs-down"></i>
                    </button>
                </div>
            </div>
            <div class="mt-4 p-4 mb-5 border border-secondary rounded">
                <p class="font-weight-bold">Anonimus 2</p>
                <p class="mt-2">Sollicitant homines non sunt nisi quam formae rerum principiis opiniones. Mors enim est
                    terribilis ut Socrati aliud esse apparet. Sed timor mortis est notio terribile. Cum igitur impediantur
                    turben tur aut dolore videamus aliis non tribuunt nisi nobis hoc est, in principiis</p>
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
@endsection
```
