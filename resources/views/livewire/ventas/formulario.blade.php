
    <div class="mb-3">
      <label class="form-label">Cliente</label>
      <select wire:model="venta.id_cliente" class="form-control">
        <option value=""></option>

      @foreach ($usuarios as $usuario)
      <option value = "{{ $usuario->id }}">{{$usuario->nombre}}</option>
      @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label">Maquinaria</label>
      <select wire:model="venta.id_maquinaria" class="form-control">
          <option value=""></option>
      @foreach ($cursos as $curso)
      <option value = "{{ $curso->id }}">{{$curso->curso}}</option>
      @endforeach
      </select>
    </div>
