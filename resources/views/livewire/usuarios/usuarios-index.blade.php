<div wire:init="cargando">

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar cliente..."
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>


        </div>

        <div class="col-md-8">
            <div class="float-right mb-2">
                <a href="{{ route('usuarios.create') }}" type="button" class="btn-sm btn btn-success"><i
                        class="fa fa-plus-circle"></i> Agregar un nuevo cliente</a>
            </div>
        </div>
    </div>


    @if (count($usuarios) > 0)
        <table class="table text-center table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Foto</th>
                    <th scope="col">Nombre del cliente</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contraseña</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <th>
                            <img style="width: 40px;height:40px;"
                                src="{{ Storage::disk('public')->url($usuario->foto ? $usuario->foto : 'images/usuarios/default.png') }}"
                                alt="">
                        </th>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->password }}</td>
                        <td>
                            <a href="{{ route('usuarios.mostrar', $usuario) }}" title="Mostrar más"
                                class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('usuarios.edit', $usuario) }}" title="Editar curso"
                                class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('usuarios.delete', $usuario) }}" title="Eliminar curso seleccionado más"
                                class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    @else
        <img class="mx-auto d-block" style="width: 300px;height:300px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
    @endif

    {{ $cargado == true ? $usuarios->links() : null }}
</div>
