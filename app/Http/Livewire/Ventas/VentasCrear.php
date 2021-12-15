<?php

namespace App\Http\Livewire\Ventas;
use App\Models\Curso;
use App\Models\Usuario;
use App\Models\Venta;


use Livewire\Component;

class VentasCrear extends Component
{
    public Venta $venta;
    public function mount()
    {
    $this->venta = new Venta();
    }
    public function render()
    {
        $cursos = Curso::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.ventas-crear', compact('cursos', 'usuarios'));
    }

    public function crear()
    {
        $this->validate();

        $this->venta->save();

    }

    public function rules()
    {
        return RulesVentas::Reglas();
    }
}
