@extends('adminlte::page')
@section('title', 'Publicadores')
@section('content_header')
    <h1>Publicadores</h1>
@stop
@section('content')
    {{-- {{dd($publicadores[0])}} --}}



    @php
        
        $btnDelete = function ($id = '', $active = false) {
            return $active ? '<button status-pub class="btn btn-xs btn-default text-success mx-1 shadow" title="Activo (Click para desactivar)" data-idpub="' . $id . '"><i class="fa fa-lg fa-fw fa-check"></i></button>' : '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Desactivado (Click para activar)" data-idpub="' . $id . '"><i class="fa fa-lg fa-fw fa-minus"></i></button>';
            // return '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Borrar" data-idpub="' . $id . '">' . (($active) ? '<i class="fa fa-lg fa-fw fa-check"></i>' : '<i class="fa fa-lg fa-fw fa-check"></i>' ). '</button>';
        };
        $btnEdit = function ($id = '') {
            return '<button edit-pub data-toggle="modal" data-target="#modalPurple" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar" data-idpub="' . $id . '" ><i class="fa fa-lg fa-fw fa-pen"></i></button>';
        };
        
        $heads = ['Nombre', 'Apellido 1', 'Apellido 2', ['label' => 'Acciones', 'no-export' => false]];
        $config = [
            'data' => $publicadores,
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
            'search' => true,
            'paging' => true,
            'lengthMenu' => [10, 50, 100, 500]
        ];
    @endphp
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Apellido 1" required>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Apellido 2">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Telefono">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Correo electronico">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3" style="display: block" id="btn-div-add">
                    <button class="btn btn-success" type="submit">Agregar publicador</button>
                </div>
                <div class="col-3" style="display: none" id="btn-div-mod">
                    <button class="btn btn-warning">Modificar publicador</button>
                </div>
                <div class="col-3" style="display: none" id="btn-div-cancel">
                    <button class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>
        <br>
        <x-adminlte-datatable id="tabla_pubs" :heads="$heads" beautify with-buttons>
            @if (!empty($publicadores))
                @foreach ($config['data'] as $row)
                    <tr>
                        <td>{!! $row['nombre'] !!}</td>
                        <td>{!! $row['apellido1'] !!}</td>
                        <td>{!! $row['apellido2'] !!}</td>
                        <td>{!! '<nobr>' . $btnEdit($row['id']) . $btnDelete($row['id'], $row['activo']) . '</nobr>' !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>No hay datos</td>
                </tr>
            @endif
        </x-adminlte-datatable>
        @include('paginas.administracion.publicadores.modal')
    </div>
@endsection

@push('js')
    <script src="{{ URL::asset('public/comun/js/paginas/Publicadores.js') }}"></script>
@endpush
