<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YBG Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .bg-custom {
            background-color: #f8f9fa;
        }

        .login-section {
            min-height: 100vh;
        }

        .image-section {
            background: url({{ asset('assets/image/login_admin_bg.jpg') }}) no-repeat center center;
            background-size: cover;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(50, 50, 57, 0.5);
        }

        .image-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .image-content h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .image-content p {
            font-size: 1.25rem;
        }

        .image-content .btn-play {
            background-color: #ff0000;
            border-radius: 50%;
            padding: 1rem;
        }
    </style>
</head>

<body class="bg-custom">
    <div class="container-fluid">
        <div class="row login-section">
            <!-- Left Section -->
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white p-4">
                <div class="w-100" style="max-width: 400px;">
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/image/icon.png') }}" alt="Logo" class="img-fluid"
                            style="height: 50px;">
                    </div>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Your login or e-mail" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-primary">Register</a>
                            <a href="#" class="text-primary">Forgot Password?</a>
                        </div>
                        <a href="/admin/index" class="btn btn-primary btn-block mt-4" type="submit">Sign In</a>
                    </form>
                </div>
            </div>
            <!-- Right Section -->
            <div class="col-lg-6 d-none d-lg-block image-section">
                <div class="overlay"></div>
                <div class="image-content">
                    <div class="d-flex align-items-center justify-content-center mt-4">
                        <div class="ml-3 text-left">
                            <h1>YBG</h1>
                            <p>Yayasan Be Good</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
