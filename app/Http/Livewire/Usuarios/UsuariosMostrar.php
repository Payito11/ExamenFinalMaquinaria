<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\usuario;
use Livewire\Component;

class UsuariosMostrar extends Component
{
    public Usuario $usuario;
    public function render()
    {
        return view('livewire.usuarios.usuarios-mostrar');
    }
}
