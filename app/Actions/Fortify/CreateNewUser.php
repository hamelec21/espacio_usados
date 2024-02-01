<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */

     public $fer="hola";





    public function create(array $input): User
    {

        

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'rut' => $input['rut'],
            'name' => $input['name'],
            'apaterno' => $input['apaterno'],
            'amaterno' => $input['amaterno'],
            'direccion' => $input['direccion'],
            'regiones_id' => $input['regiones_id'],
            'comunas_id' => $input['comunas_id'],
            'estado_usuarios_id' => $input['estado_usuarios_id'],

            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
