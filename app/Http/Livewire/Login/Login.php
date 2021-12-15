<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login.login');
    }

    public function login()
    {

        $datos = $this->validate();


        if(Auth::attempt($datos))
        {
            return redirect(route('cursos.index'));
        }else
        {
            dd('Hubo un error vea su correo u contraseña');
        }
    }

    public function rules()
    {
        return[
            'email'=> 'required|email',
            'password'=> 'string|required'

        ];
    }
}
