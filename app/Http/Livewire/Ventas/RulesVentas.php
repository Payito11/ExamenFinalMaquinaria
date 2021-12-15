<?php

namespace App\Http\Livewire\Ventas;

class RulesVentas
{

    public static function Reglas()
    {
        return[
            'venta.id_cliente'=> 'required',
            'venta.id_maquinaria'=> 'required',
    
        ];
    }
}
