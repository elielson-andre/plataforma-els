@extends('layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Todas as aulas</h4>

                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Aula</th>
                                <th>Ação</th>

                              </tr>
                            </thead>
                            <tbody>

                              @foreach ( $aulas as $aula )
                                <tr>
                                    <td> {{ $aula->title}} </td>

                                    <td>
                                        <a href="{{ url('admin/editar') }}/{{ $aula->slug }}" class="btn btn-inverse-primary btn-fw">Editar</a>

                                        <a href="{{ url('admin/excluir') }}/{{ $aula->slug }}" class="btn btn-inverse-danger btn-fw" onclick="return confirm('Deseja realmente excluir esta aula ?');" >Excluir</a>
                                    </td>
                                </tr>
                              @endforeach


                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
