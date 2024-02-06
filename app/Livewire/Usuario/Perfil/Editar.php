<?php

namespace App\Livewire\Usuario\Perfil;

use App\Models\Comuna;
use App\Models\Region;
use App\Models\User;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use Livewire\Component;

class Editar extends Component
{

    public $userId;
    public $name;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $direccion;
    public $regiones;
    public $comunas = [];
    public $regiones_id;
    public $comunas_id;
    public $comuna;

    // Agrega más propiedades según sea necesario para los campos de la base de datos


    public function updatedRegionesId($value)
    {
        $this->comunas = Comuna::where('regiones_id', $value)->get();
        // dd($this->comunas);
        $this->comuna = $this->comunas->first()->id ?? null;
    }


    public function mount()
    {
        $this->regiones = Region::all();
        $this->comunas = collect();

        $id = auth()->user()->id;


        $user = User::find($id);
        if ($user) {
            $this->userId = $user->id;
            $this->name = $user->name;
            $this->apellidoPaterno = $user->apaterno;
            $this->apellidoMaterno = $user->amaterno;
            $this->direccion = $user->direccion;
            $this->regiones_id = $user->regiones_id;
            $this->comunas_id = $user->comunas_id;
            // Carga más datos según sea necesario
        }
    }


    public function actualizarUsuario()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'apellidoPaterno' => 'required|string|max:255',
            'apellidoMaterno' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'regiones_id' => 'required|string|max:255',
            'comunas_id' => 'required|string|max:255',
            // Agrega más validaciones según sea necesario
        ]);

        $user = User::find($this->userId);
        if ($user) {
            $user->update([
                'name' => $this->name,
                'apaterno' => $this->apellidoPaterno,
                'amaterno' => $this->apellidoMaterno,
                'direccion' =>$this->direccion,
                'regiones_id' =>$this->regiones_id,
                'comunas_id' =>$this->comunas_id,
                // Actualiza más campos según sea necesario
            ]);
        }

        $this->dispatch('editar');

        return redirect()->to('/dashboard-usuario');
    }


    public function render()
    {

        return view('livewire.usuario.perfil.editar',);
    }
}
