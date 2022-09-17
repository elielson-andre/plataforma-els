
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/access.css') }}">
    <title>ELS-Learn | Login</title>
</head>
<body>
    <video autoplay muted loop id="bgvid">
        <source src="{{ asset('media/bg_acsess.mp4') }}" type="video/mp4">
        Tivemos alguns problemas para carregar o video de fundo :(
    </video>
    <div class="content">
        <div class="content-box">


            <h2> Olá Administrador! </h2>

            <form class="access-form" method="POST" action="{{ route('login') }}" >
                @csrf

                <p>
                    <label>Email</label>
                    <input type="email"  name="email" value="{{ old('email') }}" required autocomplete="email"  />
                </p>

                <p>
                    <label>Senha</label>
                    <input type="password"  placeholder="*********" name="password" required autocomplete="new-password" minlength="5" class="password-error" />
                </p>

                @error('email')
                    <div class="error-alert">
                       <strong>Email ou senha incorretos</strong>
                    </div>
                @enderror

                <p>
                    <button class="btn-access"> Entrar </button>
                </p>
                <br>
                <p class="txt-bottom">Esqueceu a senha? <a href="{{ url('/login') }}">Recupere agora</a></p>
            </form>

        </div>
        <small class="txt-copyright" >&copy; 2022 - Elielson André | elielsondeveloper@gmail.com</small>
    </div>

<script src="{{ asset('js/jquery.js') }}" ></script>
<script src="{{ asset('js/wellcome.js') }}" ></script>
</body>
</html>








{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Laravel</title>
</head>

<body>



    <main class="login-form mt-4">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Acesso</div>
                        <div class="card-body">
                            <form class="access-form" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input type="text" id="email_address" class="form-control"
                                            name="email-address" required autofocus placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input type="password" id="password" class="form-control" name="password"
                                            required placeholder="*****">
                                    </div>
                                </div>

                                @error('email')
                                    <div class="alert alert-danger" role="alert">
                                        Dados incorretos!
                                    </div>
                                @enderror


                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Acessar
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>


</body>

</html> --}}
