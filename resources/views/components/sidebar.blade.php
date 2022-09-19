<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="#"><img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="">
            <h3 class="text-warning">ELS</h3>
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{ asset('assets/images/user_default.png') }}"
                            alt="Els-learn">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <p class="mb-0 font-weight-normal"> {{ Auth::user()->name }} </p>

                        <span>
                            @if (  Auth::user()->type == 'admin')
                                <span> Administrador </span>
                            @else
                                <span> Aluno </span>
                            @endif
                        </span>

                    </div>
                </div>

            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Meu Painel</span>
        </li>

        @if (  Auth::user()->type == 'user')
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('home') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-home"></i>
                    </span>
                    <span class="menu-title">Home</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('aulas') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Minhas Aulas</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('dicas') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-lightbulb"></i>
                    </span>
                    <span class="menu-title">Dicas de aprendizado</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('meu-perfil') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-account"></i>
                    </span>
                    <span class="menu-title">Meu perfil</span>
                </a>
            </li>
        @elseif( Auth::user()->type == 'admin')
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('admin/home') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-home"></i>
                    </span>
                    <span class="menu-title">Home</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('admin/publicar-aula') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-home"></i>
                    </span>
                    <span class="menu-title">Publicar Nova aula</span>
                </a>
            </li>

        @endif

        <hr>

        <li class="nav-item menu-items">
            <a class="nav-link " href="{{ route('logout') }}" class="dropdown-item preview-item"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="menu-icon">
                    <i class="mdi mdi-login text-danger"></i>
                </span>
                <span class="menu-title">Finalizar sessão</span>
            </a>

        </li>


    </ul>
</nav>
