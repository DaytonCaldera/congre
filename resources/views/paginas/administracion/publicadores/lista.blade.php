@extends('adminlte::page')
@section('title', 'Publicadores')
@section('content_header')
    <h1>Publicadores</h1>
@stop

@section('content')
{{-- {{dd($publicadores[0])}} --}}



    @php
        $heads = ['ID', 'Nombre', 'Apellido 1','Apellido 2', ['label' => 'Acciones', 'no-export' => false, 'width' => 5]];
        
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
            'data' => $publicadores,
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
        <x-adminlte-datatable id="tabla_pubs" :heads="$heads">
            @if (!empty($publicadores))
                @foreach ($config['data'] as $row)
                {{-- {{dd($row)}} --}}
                    <tr>
                            <td>{!! $row['id'] !!}</td>
                            <td>{!! $row['nombre'] !!}</td>
                            <td>{!! $row['apellido1'] !!}</td>
                            <td>{!! $row['apellido2'] !!}</td>
                            <td>{!! '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>' !!}</td>
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
