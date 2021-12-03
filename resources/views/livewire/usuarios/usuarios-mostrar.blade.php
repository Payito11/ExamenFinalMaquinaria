<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width: 150px;height:150px;" class="mx-auto mt-3 card-img-top"
            src="{{ Storage::disk('public')->url($usuario->foto) }}" alt="Card image cap">
        <div class="text-center card-body">
            <h5 class="card-title">{{ $usuario->nombre }}</h5>
            <span class="card-text">Email: {{ $usuario->email }}</span><br>
            <small class="card-text">Password: {{ $usuario->pwd }}</small>
            <a href="{{route('usuarios.index')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>
