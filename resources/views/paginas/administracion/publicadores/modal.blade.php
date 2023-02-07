<x-adminlte-modal id="modalPurple" title="Theme Purple" theme="purple" icon="fas fa-bolt" size='lg' disable-animations>
    <div class="row">
        <div class="col-4"> <input type="text" placeholder="Nombre" class="form-control" id="nombre"></div>
        <div class="col-4"> <input type="text" placeholder="Apellido 1" class="form-control" id="apellido1"></div>
        <div class="col-4"> <input type="text" placeholder="Apellido 2" class="form-control" id="apellido2"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-4"> <input type="text" placeholder="Telefono" class="form-control" id="telefono"></div>
        <div class="col-4"> <input type="text" placeholder="Email" class="form-control" id="email"></div>
        <div class="col-4"> <input type="text" placeholder="Grupo" class="form-control" id="grupo"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-4"> <input type="text" placeholder="Privilegios" class="form-control" id="Privilegios">
        </div>
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto" theme="success" label="Guardar" />
        <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
    </x-slot>
</x-adminlte-modal>
