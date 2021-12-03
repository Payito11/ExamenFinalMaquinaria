<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario
{

    public static function Reglas()
    {
        return
            [
                'usuario.nombre' => 'required|string',
                'usuario.email' => 'required|string',
                'usuario.pwd' => 'required|string',
                'foto'=>'nullable|image'
            ];
    }
}
