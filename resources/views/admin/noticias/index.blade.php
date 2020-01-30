@extends('layouts.admin')

@section('titulo','Administración / Titulo')

@section('titulo2','Texto del titulo')

@section('breadcrumbs')
@endsection

@section('contenido')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <h3 class="card-tittle">Lista de noticias</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Noticias</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--Aqui van las noticias-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection

@section('estilos')
@endsection