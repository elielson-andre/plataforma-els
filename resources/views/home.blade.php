@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @if ( Auth::user()->plan == 0 )
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card corona-gradient-card">
                            <div class="card-body py-0 px-0 px-sm-3">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3 col-xl-2">
                                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid"
                                            alt="">
                                    </div>
                                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                                        <h4 class="mb-1 mb-sm-0">Aprenda a programar do absoluto zero. </h4>

                                        <p class="mb-0 font-weight-normal d-none d-sm-block">Nosso material é GRATUITO, mas se
                                            quiser acelerar ainda mais seu aprendizado, tirar dúvidas diretamente com o
                                            instrutor e ter acesso à materiais exclusivos,
                                            recomendamos conhecer o PREMIUM (Vagas limitadas).</p>
                                    
                                    </div>
                                    <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                                        <span>
                                            <a href="{{ route('plano-premium') }}"
                                                class="btn btn-outline-light btn-rounded get-started-btn">Conhecer Premium</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

           

            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Aulas disponíveis</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">14</h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Postadas e atualizadas</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Alunos cadastrados</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">22</h2>
                                        <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal"></h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-account-multiple-outline text-primary ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Últimas aulas acessadas</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <h6 class="text-muted font-weight-normal"> Aula tra la la</h6>
                                    <h6 class="text-muted font-weight-normal"> Outra aula teste</h6>
                                    <h6 class="text-muted font-weight-normal"> Aula teste dfghsfdf</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-history text-danger ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Postadas recentemente</h4>

                            <div
                                class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                <div class="text-md-center text-xl-left">
                                    <h6 class="mb-1">Titulo da aula</h6>
                                    <p class="text-muted mb-0">Backend | PHP</p>
                                </div>
                                <div
                                    class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                    <h6 class="font-weight-bold text-warning mb-0">Nova</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between">
                                <h4 class="card-title mb-1"> <i class="mdi mdi-flash text-warning"></i> Stacks Ministradas
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="preview-list">

                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-warning">
                                                    <i class="mdi mdi-language-html5"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">HTML - Básico</h6>
                                                    <p class="text-muted mb-0"><span class="text-success"> Free</span> |
                                                        Front-end - Linguagem de marcação web</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-primary">
                                                    <i class="mdi mdi-language-css3"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">CSS - Básico</h6>
                                                    <p class="text-muted mb-0"><span class="text-success"> Free</span> |
                                                        Front-end - Estilização </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-warning">
                                                    <i class="mdi mdi-language-javascript"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">JavaScript - Básico</h6>
                                                    <p class="text-muted mb-0"><span class="text-success"> Free</span> |
                                                        Front-end - Linguagem de programação</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-info">
                                                    <i class="mdi mdi-language-php"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">PHP - Básico</h6>
                                                    <p class="text-muted mb-0"><span class="text-success"> Free</span> |
                                                        Front-end - Linguagem de programação Back-end</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-primary">
                                                    <i class="mdi mdi-database"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">MySQL - Básico</h6>
                                                    <p class="text-muted mb-0"><span class="text-success"> Free</span> |
                                                        Banco de dados</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-danger">
                                                    <i class="mdi mdi-movie"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">Laravel Framework</h6>
                                                    <p class="text-muted mb-0"> <span class="text-warning"> <i class="mdi mdi-crown"></i> Premium</span> | Construa
                                                        aplicações de maneira rápida, crie API'S, microsserviços e muito
                                                        mais. </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-danger">
                                                    <i class="mdi mdi-code-braces"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">Pro dev pack</h6>
                                                    <p class="text-muted mb-0"> <span class="text-warning"> <i
                                                                class="mdi mdi-crown"></i> Premium</span> | Configuração de
                                                                servidor remoto, acesso SSH, Apontamento DNS, versionamento
                                                                GIT/GitHub avançado e muito mais. </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-danger">
                                                    <i class="mdi mdi-linux"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">Linux starter pack</h6>
                                                    <p class="text-muted mb-0"> <span class="text-warning"> <i
                                                                class="mdi mdi-crown"></i> Premium</span> | Domine um dos
                                                        melhores sistemas operacionais que já existiu, altamente
                                                        personalizável, útil e abrangente para programadores.</p>
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

        </div>

    </div>
@endsection
