@extends('layouts.app')

@section('content')
    <form name="form_filter" id="form_filter" method="post" action="#">
        <div class="form-group">
            <label for="filter">Filtrar</label>
            <input type="text" class="form-control" id="filter" placeholder="Filtrar...">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@stop