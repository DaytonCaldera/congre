@extends('adminlte::page')
@section('title', 'Publicadores')
@section('content_header')
    <h1>Privilegios</h1>
@stop
@section('content')
    {{-- {{dd($publicadores[0])}} --}}



    @php
        // dd($privilegios);
        $btnDelete = function ($id = '', $active = false) {
            return $active ? '<button status-pub class="btn btn-xs btn-default text-success mx-1 shadow" title="Activo (Click para desactivar)" data-idpub="' . $id . '"><i class="fa fa-lg fa-fw fa-check"></i></button>' : '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Desactivado (Click para activar)" data-idpub="' . $id . '"><i class="fa fa-lg fa-fw fa-minus"></i></button>';
            // return '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Borrar" data-idpub="' . $id . '">' . (($active) ? '<i class="fa fa-lg fa-fw fa-check"></i>' : '<i class="fa fa-lg fa-fw fa-check"></i>' ). '</button>';
        };
        $btnEdit = function ($dataset = '') {
            return '<button edit-priv data-toggle="modal" data-target="#modal-edit-priv" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar" data-pname="' . $dataset->privilegio . '" data-cat="' . $dataset->categoria . '" data-id="' . $dataset->id . '" ><i class="fa fa-lg fa-fw fa-pen"></i></button>';
        };
        
        $heads = ['ID', 'Privilegio', 'Categoria', ['label' => 'Acciones', 'no-export' => false]];
        $config = [
            'data' => $privilegios,
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
            'search' => true,
        ];
    @endphp
    <div class="container">
        {{-- <form action="">
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
        </form> --}}
        <br>
        <x-adminlte-datatable id="tabla_pubs" :heads="$heads">
            @if (!empty($privilegios))
                @foreach ($config['data'] as $row)
                    <tr>
                        <td>{!! $row['id'] !!}</td>
                        <td>{!! $row['privilegio'] !!}</td>
                        <td>{!! $row['categoria'] !!}</td>
                        <td>{!! '<nobr>' . $btnEdit((object) $row) . '</nobr>' !!}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>No hay datos</td>
                </tr>
            @endif
        </x-adminlte-datatable>
        <x-adminlte-modal id="modal-edit-priv" title="Editar privilegio" theme="lightblue" icon="fas fa-bolt" size='lg'>
            <div class="row">
                <div class="col-6">
                    <input type="hidden" id="priv-id">
                    <input type="hidden" id="priv-cat">
                    <input type="text" class="form-control" id="priv-name" placeholder="">
                </div>
            </div>

            <x-slot name="footerSlot">
                <x-adminlte-button class="mr-auto" theme="success" label="Guardar" id="save-priv" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </div>
@endsection

@push('js')
    <script src="{{ URL::asset('public/comun/js/paginas/Privilegios.js') }}"></script>
@endpush
