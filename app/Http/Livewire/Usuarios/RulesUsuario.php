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
                'usuario.password' => 'string',
                'foto'=>'nullable|image'
            ];
    }
}
