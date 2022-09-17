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
                             
                              <tr>
                                <td>Aula tralala tralala tralala</td>
                                
                                <td>
                                    <a href="#" class="btn btn-inverse-primary btn-fw">Editar</a>
                                    <a href="#" class="btn btn-inverse-danger btn-fw">Excluir</a>
                                </td>
                              </tr>

                             

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
