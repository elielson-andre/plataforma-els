<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/access.css') }}">
    <title>ELS-Learn | Cadastro</title>
</head>
<body>
    <video autoplay muted loop id="bgvid">
        <source src="{{ asset('media/bg_acsess.mp4') }}" type="video/mp4">
        Tivemos alguns problemas para carregar o video de fundo :(
    </video>
    <div class="content">
        <div class="content-box">
            <div class="container-typing">
                <p>Programar é <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
            </div>

            <h2>Vamos criar sua conta</h2>

            <form class="access-form" method="POST" action="{{ route('register') }}" >
                @csrf
                <p>
                    <label>Seu nome/apelido</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                </p>

                <p>
                    <label>Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email"  />
                </p>

                <p>
                    <label>Crie uma senha</label>
                    <input type="password" id="password"  placeholder="*********" name="password" required autocomplete="new-password" minlength="5" class="password-error" />
                    <small id="pdwLevel"></small>
                </p>

                <p>
                    <label>Repita a senha</label>
                    <input type="password" id="password-confirm" placeholder="*********" name="password_confirmation" required autocomplete="new-password" minlength="5" />
                </p>

                {{-- Error messages --}}
                @error('email')
                    <div class="error-alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror

                @error('password')
                    <div class="error-alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror

                <p>
                    <button class="btn-access"> Finalizar cadastro </button>
                </p>
                <br>
                <p class="txt-bottom">Já tem conta? <a href="{{ url('/login') }}">Faça login</a></p>
            </form>

        </div>
        <small class="txt-copyright" >&copy; 2022 - Elielson André | contato@elielson.net</small>

    </div>

<script src="{{ asset('js/jquery.js') }}" ></script>
<script src="{{ asset('js/wellcome.js') }}" ></script>
</body>
</html>
