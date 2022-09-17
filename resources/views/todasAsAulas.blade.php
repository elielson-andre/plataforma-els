@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
          
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Que aula vai asisstir agora?
                                <br>
                                <small class="text-lowercase" style="color: gray">( Recomendamos que assista na ordem que está sendo exibida. 🙂👇)</small>
                            </h4>
                            
                            @foreach ($aulas as $item)
                                <a href=" {{ url('aulas')}}/{{ $item->slug}}" class="text-decoration-none">
                                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 mt-3">
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
