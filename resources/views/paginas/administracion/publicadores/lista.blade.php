@extends('adminlte::page')
@section('title', 'Publicadores')
@section('content_header')
    <h1>Publicadores</h1>
@stop
@section('content')



    @php
        $heads = ['ID', 'Nombre', 'Apellidos', ['label' => 'Acciones', 'no-export' => false, 'width' => 5]];
        
        $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
        $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Borrar">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
        $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Ver detalles">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';
        
        $config = [
            'data' => (array) $publicadores,
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
            'search' => true,
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
        <x-adminlte-datatable id="table1" :heads="$heads">
            @if (!empty($publicadores) && is_array($publicadores))
                @foreach ($config['data'] as $row)
                    <tr>
                        @foreach ($row as $cell)
                            <td>{!! $cell !!}</td>
                        @endforeach
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>No hay datos</td>
                </tr>
            @endif
        </x-adminlte-datatable>

    </div>
@endsection
