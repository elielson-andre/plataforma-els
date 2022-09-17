@extends('layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if( Auth::user()->plan == 1 )
                            <h4 class="card-title mb-0">{{ Auth::user()->name }} <span class="text-primary"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span></h4>
                        @else
                            <h4 class="card-title mb-0">{{ Auth::user()->name }} </h4>
                        @endif
                        <p class="mb-0">{{ Auth::user()->email }}</p>
                        <small class="text-warning"> </small>
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <a href="{{ url('excluir-conta') }}/{{ Auth::user()->email }}" class="btn btn-inverse-danger btn-fw" onclick="return confirm('Deseja realmente excluir sua conta? TODOS os dados de possíveis pagamentos também serão DELETADOS.');" >Excluir Minha conta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
</div>

@endsection
