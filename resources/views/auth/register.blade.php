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
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">
</head>
<body>
    <main class="main-content">
        <div class="admin" style="background-image:url({{ asset('assets/img/admin-bg-light.png') }});">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-8 col-md-8 col-sm-8">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                <img class="dark" src="{{ asset('assets/img/mls/logotype3-dark.svg') }}" alt="">
                                <img class="light" src="{{ asset('assets/img/mls/logotype3-white.png') }}" alt="">
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Registrar cuenta para Localshop</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('signup') }}" method="POST">
                                        @csrf
                                        <div class="edit-profile__body">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group mb-20">
                                                        <label for="name">Usuario</label>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Usuario completo">
                                                        @if($errors->has('name'))
                                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group mb-20">
                                                        <label for="email">Correo electrónico</label></label>
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email address">
                                                        @if($errors->has('email'))
                                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                            <div class="form-group mb-15">
                                                <label for="password-field">Contraseña</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                                                    <span toggle="#password-field" class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2"></span>
                                                </div>
                                                @if($errors->has('password'))
                                                  <p class="text-danger">{{ $errors->first('password') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-15">

                                                <label for="tipo_usuario_id">Tipo de cuenta</label>
                                                
                                                <select class="js-example-basic-single js-states form-control" name="tipo_usuario_id" id="tipo_usuario_id" required>
                                                <option value="" selected>Seleccione tipo de cuenta</option>

                                                    <option value="1">Cliente</option>
                                                    <option value="2">Franquisia</option>

                                                </select>
                                            </div>
                                        </div>



                                    </div>
                                    
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-20">
                                                        <label for="nombre">Nombre</label></label>
                                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre..." required>
        
                                                    </div>
                                                </div>   
                                                <div class="col-md-6">
                                                    <div class="form-group mb-20">
                                                        <label for="apellido">Apellido</label></label>
                                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido..." required>
        
                                                    </div>
                                                </div>         
             
                                            </div>
                       
                                            <div class="row">
                                                <div class="col-md-6">

                                                <div class="form-group mb-10">
                                                    <label for="calle">Calle</label></label>
                                                    <input type="text" class="form-control" id="calle" name="calle" placeholder="calle..." required>
    
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group mb-10">
                                                    <label for="colonia">Colonia</label></label>
                                                    <input type="text" class="form-control" id="colonia" name="colonia" placeholder="colonia..." required>
    
                                                </div>
                                            </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-10">
                                                        <label for="cp">Codigo Postal</label></label>
                                                        <input type="text" class="form-control" id="cp" name="cp" placeholder="codigo postal..." required>
        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-10">
                                                        <label for="ciudad">Ciudad</label></label>
                                                        <select class="js-example-basic-single js-states form-control" name="ciudad" id="ciudad" required>
                                                            <option value="" selected>Seleccione Ciudad</option>
            
                                                                <option value="1">Tijuana</option>
                                                                <option value="2">Ensenada</option>
                                                                <option value="3">Rosarito</option>
                                                                <option value="4">Tecate</option>
                                                                <option value="5">Mexicali</option>
                                                                <option value="6">San Quintin</option>
            
                                                            </select>
        
                                                    </div>
                                                </div>
          
             
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-20">
                                                        <label for="telefono">Telefono</label></label>
                                                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono..." required>
        
                                                    </div>
                                                </div>          
             
                                            </div>
 
                                            
                                            {{-- <div class="admin-condition">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-1">
                                                    <label for="check-1">
                                                        <span class="checkbox-text">Al crear una cuentas estas aceptando  los<a href="#" class="color-primary">Terminos de servicio</a> y <a href="#" class="color-primary">Privacy
                                                                politicas</a>
                                                            mis prefencias</span>
                                                    </label>
                                                </div>
                                            </div> --}}
                                            <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                    Crear cuenta
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="admin-topbar">
                                    <p class="mb-0">
                                    ¿Tienes una cuenta?
                                        <a href="{{ route('login') }}" class="color-primary">
                                            Iniciase sesión
                                        </a>
                                    </p>
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
