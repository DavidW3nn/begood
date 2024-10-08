<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan Dana Paramita Agama Buddha Indonesia | {{ $title }}</title>
    <link rel="icon" href="assets/image/icon.png" type="image/x-icon">

    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- My Css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    {{-- Modal Loading --}}
    @include('item.modal-loading')
    {{-- End Modal Loading --}}

    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- End Navbar --}}

    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')
    {{-- End Footer --}}

    <!-- JS Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>


    {{-- My Js --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
