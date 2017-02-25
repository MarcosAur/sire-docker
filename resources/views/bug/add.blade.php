@extends('layout.base')

@section('title')
    Reportar bug
@endsection

@section('page_icon')
    <i class="fa fa-bug"></i>
@endsection

@section('description')
    Preencha os campos para informar a ocorrência de um problema.
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-8 col-md-offset-2'>
            <div class="box box-primary-ufop">
                <div class="box-body">
                    <form class="form" action="{{ route('storeBug') }}" accept-charset="UTF-8" method="post">
                        {{ csrf_field() }}

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input type="text" name="title" maxlength="100" class="form-control" placeholder="Título" required>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-th-list"></i></span>
                            <textarea name="description" maxlength="850" rows="6" style="resize: none" class="form-control" placeholder="Informe o máximo de detalhes que conseguir (Ex.: navegador, ação que estava realizando, se era navagação privada ou não, se era em um dispositivo móvel ou desktop, etc.)" required></textarea>
                        </div>

                        <br />

                        <div class="text-center">
                            <button type="button" class="btn btn-danger" onClick="history.back()">Cancelar <i class='fa fa-times'></i></button>
                            <button type="reset" class="btn btn-warning">Limpar <i class='fa fa-eraser'></i></button>
                            <button type="submit" class="btn btn-success">Confirmar <i class='fa fa-check'></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
