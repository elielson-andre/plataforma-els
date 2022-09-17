@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">


            <div class="row">
                <div class="col-sm-12 grid-margin pb-0">
                    <div class="card">
                        <div class="card-body">
                            <h5> {{ $title }} </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $link !!}
                            </div>


                            <div class="row">
                                <div class="col-md-12 mt-3 d-flex justify-content-end">
                                    <a
                                    @if( Auth::user()->plan == 1)
                                    href="https://api.whatsapp.com/send?phone=5598987150653&text=%5B%20{{ Auth::user()->name }}%20%5D%20-%20Estou%20com%20d%C3%BAvidas%20na%20aula%20{{ $title }} "
                                    @else
                                    href="{{ url('plano-premium') }}"
                                    @endif
                                    type="button" class="btn btn-inverse-danger btn-fw">👋 Estou com dificuldades
                                </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                        <div class="text-md-center text-xl-left">
                                            <h6 class="mb-1">Descrição</h6>
                                            <p class="text-muted mb-0">
                                                {!! $description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Suas aulas</h4>

                            @foreach ($aulas as $item)
                                <a href=" {{ url('aulas')}}/{{ $item->slug }}" class="text-decoration-none">
                                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 mt-3 @if ($item->slug === $slug ) border border-success @endif">
                                        <div class="text-md-center text-xl-left ">
                                            <h6 class="mb-1 text-white"> {{ $item->title }} </h6>
                                            <p class="text-muted mb-0"> {{ $item->type }} </p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
