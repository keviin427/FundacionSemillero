<?php

namespace App\Actions\Fortify;

use App\Models\AdminGeneral;
use App\Models\Educador;
use App\Models\Psicologo;
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
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // Crear el usuario según el rol
        if ($input['role'] === 'sa') {
            return AdminGeneral::create([
                'name' => $input['name'],
                'surname' => $input['surname'],
                'fecha_nacimiento' => $input['fecha_nacimiento'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role' => $input['role'],
                'direccion_domicilio' => $input['direccion_domicilio'],
            ]);
            
        } elseif ($input['role'] === 'ed') {
            return Educador::create([
            'name' => $input['name'],
                'surname' => $input['surname'],
                'fecha_nacimiento' => $input['fecha_nacimiento'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role' => $input['role'],
                'direccion_domicilio' => $input['direccion_domicilio'],
            ]);
            
        } elseif ($input['role'] === 'ps') {
            return Psicologo::create([
            'name' => $input['name'],
                'surname' => $input['surname'],
                'fecha_nacimiento' => $input['fecha_nacimiento'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role' => $input['role'],
                'direccion_domicilio' => $input['direccion_domicilio'],
            ]);
        }

        // Opción predeterminada en caso de que el rol no coincida
        throw new \Exception('Rol no válido');
    }
}
