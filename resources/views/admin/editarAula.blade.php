@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <form class="forms-sample" method="POST" action="{{ url('/admin/editar') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $aula->id }}">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="inputTitulo"class="form-control" name="title"
                                                required value="{{ $aula->title }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" id="inputSlug" name="slug" class="form-control"
                                                required placeholder="(Preenchido automaticamente)" value="{{ $aula->slug }}">
                                        </div>

                                        <div class="form-group">
                                            <label> Tipo <span class="text-warning">(atual: {{ $aula->type }} )</span></label>
                                            <select class="form-control" name="type">
                                                <option> Front-end </option>
                                                <option> Back-end </option>
                                                <option> Outros </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Link de incorporação </label>
                                            <input type="text" class="form-control" name="link" required
                                                placeholder="<iframe>" value="{{ $aula->link }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Descrição da aula</label>
                                            <textarea name="description">{{ $aula->description }}</textarea>
                                            <script>
                                                tinymce.init({
                                                    selector: 'textarea',
                                                    plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
                                                    toolbar_mode: 'floating',
                                                    skin: 'oxide'
                                                });
                                            </script>
                                        </div>

                                        <hr>

                                        <button type="submit" class="btn btn-primary btn-icon-text float-right">
                                            <i class="mdi mdi-upload btn-icon-prepend"></i> Publicar
                                        </button>

                                    </form>
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
