@extends('layouts.main')
@include('item.modal-info-numberAccount')

@section('content')
    <div class="container" style="margin-top: 150px; margin-bottom: 60px">

        {{-- Content --}}
        <div class="max-w-4xl mx-auto bg-white p-4">
            <div class="text-center border-b-2 pb-4 p-3 bg-light rounded">
                <h1 class="text-2xl fw-bold ">
                    Judul Kegiatan
                </h1>
                <div class="text-gray-600 mt-2">
                    <span>
                        Waktu Kegiatan
                    </span>
                    <span class="mx-2">
                        |
                    </span>
                    <span>
                        Penulis Berita
                    </span>
                </div>
                <div class="flex justify-center items-center mt-2">
                    <i class="fas fa-thumbs-up text-gray-600"></i>
                    <span class="mr-1 text-gray-600">700</span>
                    <i class="fas fa-thumbs-down text-gray-600 ml-4"></i>
                    <span class="ml-1 text-gray-600">100</span>
                </div>
            </div>

            {{-- Header image --}}
            <div class="mt-4">
                <img alt="Main event image" class="w-full h-96 bg-gray-200" width="100%" height="500"
                    src="https://storage.googleapis.com/a1aa/image/AccX09MNnoJMD9owOvzpYjihLHJpLJcQSHXbUfIfOrPaq2nTA.jpg"
                    width="800" />
            </div>
            <div class="mt-4">
                <p class="mb-4">
                    Oportet uti solum de actibus prosequtionem et fugam, haec leniter et blandus et reservato.
                </p>
                <p class="mb-4">
                    Quae tibi placent quicung prosunt aut diligebat multum, quod memor sis ad communia sunt ab initio
                    minima. Quod si, exempli gratia, cupidum rerum in propria sunt ceramic calicem, admonere te solum
                    Ceramic, quod sit generalis poculis, in cuius es tu cupidum. Deinde, si erumpit, non turbaretur.
                </p>
                <p class="mb-4">
                    Si osculantur puer tuus aut uxorem tuam, osculum, non dico quod omnia quae sunt hominis, et sic non
                    tangetur, si aut ex eis moriatur.
                </p>
                <p class="mb-4">
                    Quando ambulabat agendis admonere te qualis actio. Si ad corpus, quae
                </p>
            </div>
            <div class="flex flex-wrap mt-4">
                <div class="w-full md:w-1/2 pr-2 mb-4 md:mb-0">
                    <img alt="Secondary image" class="w-full h-32 bg-gray-200" height="200"
                        src="https://storage.googleapis.com/a1aa/image/bGX9lGnx6HKABJ6Ze5oIVIVmDagfxNlT9xfBegZ4OWDtpafcC.jpg"
                        width="400" />
                </div>

            </div>
            <div class="mt-4">
                <p class="mb-4">
                    Oportet uti solum de actibus prosequtionem et fugam, haec leniter et blandus et reservato.
                </p>
                <p class="mb-4">
                    Quae tibi placent quicung prosunt aut diligebat multum, quod memor sis ad communia sunt ab initio
                    minima. Quod si, exempli gratia, cupidum rerum in propria sunt ceramic calicem, admonere te solum
                    Ceramic, quod sit generalis poculis, in cuius es tu cupidum. Deinde, si erumpit, non turbaretur.
                </p>
                <p class="mb-4">
                    Si osculantur puer tuus aut uxorem tuam, osculum, non dico quod omnia quae sunt hominis, et sic non
                    tangetur, si aut ex eis moriatur.
                </p>
                <p class="mb-4">
                    Quando ambulabat agendis admonere te qualis actio. Si ad corpus, quae
                </p>
            </div>

            <div class="mt-4 mb-5">
                <p class="mb-4">
                    Oportet uti solum de actibus prosequtionem et fugam, haec leniter et blandus et reservato.
                </p>
                <p class="mb-4">
                    Quae tibi placent quicung prosunt aut diligebat multum, quod memor sis ad communia sunt ab initio
                    minima. Quod si, exempli gratia, cupidum rerum in propria sunt ceramic calicem, admonere te solum
                    Ceramic, quod sit generalis poculis, in cuius es tu cupidum. Deinde, si erumpit, non turbaretur.
                </p>
                <p class="mb-4">
                    Si osculantur puer tuus aut uxorem tuam, osculum, non dico quod omnia quae sunt hominis, et sic non
                    tangetur, si aut ex eis moriatur.
                </p>
                <p class="mb-4">
                    Quando ambulabat agendis admonere te qualis actio. Si ad corpus, quae plerumque Imaginare tecum in
                    balineo quidam aquam fundes aliquod discrimen vituperiis usum alii furantur.
                </p>
                <p class="mb-4">
                    Sic de isto et titius perducit ad actum ipsum, ut si dico “Ego autem vadam lavari, ut mens mea in statu
                    naturae conformior.” Et similiter circa alias res. Et sic, si contigit ex per se lavantem, et erit hoc
                    paratus ut diceret, “Hoc non
                </p>
                {{-- donasi button line --}}
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-auto mb-3 mb-md-0">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary me-1">Tag</button>
                            <button type="button" class="btn btn-secondary me-1">Tag</button>
                            <button type="button" class="btn btn-secondary me-1">Tag</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto mb-3 mb-md-0">
                        <button type="button" class="btn btn-dark" data-toggle="modal"
                            data-target="#bankInfoModal">@lang('message.donasi')</button>
                    </div>
                    <div class="col-12 col-md-auto">
                        <div class="flex justify-center items-center mt-2">
                            <i class="fas fa-thumbs-up text-gray-600"></i>
                            <span class="mr-1 text-gray-600">700</span>
                            <i class="fas fa-thumbs-down text-gray-600 ml-4"></i>
                            <span class="ml-1 text-gray-600">100</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        {{-- Komentar --}}
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
