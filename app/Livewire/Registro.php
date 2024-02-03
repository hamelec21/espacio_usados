<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use Laravel\Jetstream\Jetstream;
use Livewire\Component;

class Registro extends Component
{
    public $rut;
    public $name;
    public $apellidos;
    public $email;
    public $password;
    public function registro()
    {
        $this->validate([
            'rut' => 'required',
            'name' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            
        ]);

        $user = User::create([
            'rut' => $this->rut,
            'name' => $this->name,
            'apellidos' => $this->apellidos,
            'email' => $this->email,
            'estados_usuarios_id' => 1,
            'password' => Hash::make($this->password),
        ]);

        //   $user->assignRole('SOCIO'); // Asignar el rol "publico"
             $user->roles()->sync('2');
        // Puedes redirigir a una página de inicio de sesión u otra después del registro
        return redirect('/login');

        // Redireccionar al dashboard socio
      //  return redirect()->route('socio.home');
       // return redirect()->route('customer.crear-cliente');


    }
    public function render()
    {
        return view('livewire.registro');
    }
}
