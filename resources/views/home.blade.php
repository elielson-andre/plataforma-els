@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
           
            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Aulas disponíveis</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">{{ $qtdAulas }}</h2>
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
                                        <h2 class="mb-0">{{ $qtdUsers }}</h2>
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
                            <h5>Postadas recentemente</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    @foreach ($ultimasPostadas as $aula )
                                        <h6 class="text-muted font-weight-normal"> {{ $aula->title }} </h6>
                                    @endforeach


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
                            <p> <i class="mdi mdi-pin"></i> Fixado pelo instrutor</p>
                            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                               <p>Novas aulas estão sendo adicionadas semanalmente. Enviaremos uma notificação para <i>{{ Auth::user()->email }}</i>
                                assim que elas estiverem disponíveis.
                                </p>
                            </div>

                            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                <p>Ainda estamos fazendo algumas correções na plataforma, mas você já pode assistir as <b>{{ $qtdAulas }}</b>
                                aulas disponíveis clicando no menu lateral <i>" <i class="mdi mdi-laptop"></i> Minhas aulas" </i>.
                                </p>
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
