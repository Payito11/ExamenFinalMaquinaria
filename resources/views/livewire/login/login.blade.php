<div>
<div class="row">

    <div class="mx-auto col-md-4">
     <img class ="mx-auto d-block" style="width: 170px;height:190px;"  src="{{ Storage::disk('public')->url('images/usuarios/JonhDeer.png') }}" alt="">
    <form wire:submit.prevent="login">
  <div class="mb-3">
    <label class="form-label">Inserte su correo electronico</label>
    <input wire:model="email" type="email" class="form-control"  aria-describedby="emailHelp">
    @error('email') <span class="text-danger">{{ $message }}</span>@enderror

    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Ingrese su contraseña</label>
    <input wire:model="password" type="password" class="form-control" id="exampleInputPassword1">
    @error('password') <span class="text-danger">{{ $message }}</span>@enderror

  </div>
 
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
    </div>

</div>
 
</div>

 