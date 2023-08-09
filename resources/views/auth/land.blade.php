<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Localshop</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/variables.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/mls/logotype1-dark.png') }}">
</head>
<body>
    <main class="main-content">
        <div class="admin" style="background-image:url({{ asset('assets/img/admin-bg-light.png') }});">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                <img class="dark" src="{{ asset('assets/img/mls/logotype3-dark.svg') }}" alt="">
                                <img class="light" src="{{ asset('assets/img/mls/logotype3-white.png') }}" alt="">
                            </div>
                            <div class="container">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <div class="edit-profile__title">
                                            <h1>Bienvenidos a Localshop</h1>
                                        </div>
                                    </div>
                                    <div class="mb-6" style="display: flex; align-items: center;">
                                        <img src="{{ asset('assets/img/land.png') }}" alt="Imagen de Bienvenida" style="margin-right: 10px;">
                                        <h4 style="font-size: 24px; color: #333; margin: 0; padding: 10px 0;">
                                            Aquí en nuestro sitio web, te ofrecemos una experiencia única que te permitirá llevar el control de tu tienda de una manera sencilla y eficiente. Con tan solo un clic, podrás gestionar y administrar tus productos de manera rápida y conveniente.
                                            <br>
                                            Nuestro objetivo es brindarte todas las herramientas que necesitas para tener el control total de tu tienda en línea.
                                        </h4>
                                    </div>
                                    

                                        <div class="admin-topbar">
                                            <div class="mb-6" style="margin-right: 10px;">
                                                <p>¿Ya tienes cuenta?</p>
                                                <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                                            </div>
                                            <div class="mb-6">
                                                <p>¿No tienes una cuenta?</p>
                                                <a href="{{ route('register') }}" class="btn btn-primary">Crear una cuenta</a>
                                            </div>
                                        </div>
                                        
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>
    <div class="enable-dark-mode dark-trigger">
        <ul>
            <li>
                <a href="#">
                    <i class="uil uil-moon"></i>
                </a>
            </li>
        </ul>
    </div>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
</body>
</html>
