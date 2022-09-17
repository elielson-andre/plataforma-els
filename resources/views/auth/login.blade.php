



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


            <h2>👋 Olá novamente! </h2>

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
        <small class="txt-copyright" >&copy; 2022 - Elielson André | contato@elielson.net</small>
    </div>

<script src="{{ asset('js/jquery.js') }}" ></script>
<script src="{{ asset('js/wellcome.js') }}" ></script>
</body>
</html>




