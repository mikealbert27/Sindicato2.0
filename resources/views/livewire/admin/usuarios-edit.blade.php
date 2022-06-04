<div>
    <div class="">
        @include('layouts.sideboot')
    </div>
    <form wire:submit.prevent="editar">

        <div class="container cont-edit">
            <div class="card-header">
                <h2>Editar usuario</h2>
                <p>Para editar la informacion de un usuario simplemente habra que borrar la informacion que venga en el
                    campo el cual queramos modificar y escribir la nueva informacion a guardar.</p>
            </div>
            @include('livewire.admin.formulario')
            <br>
            <div class="card-footer">
                <button class="float-right btn btn-primary"><i class="fa fa-edit"></i> Editar</button>
                <a href="{{ route('admin.usuarios') }}" class="btn btn-secondary"><i class="fa fa-home"></i>
                    Regresar</a>
            </div>

        </div>
    </form>

</div>
