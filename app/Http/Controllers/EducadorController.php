<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Educador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;


class EducadorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        Educador::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
            'password' => Hash::make($request['password']),
            'role' => 'ed',
            'direccion_domicilio' =>  $request-> direccion_domicilio,
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'role' => 'ed',
        ]);



        return redirect('/');
    }


    public function show()
    {
        $educadores = Educador::all();
        return view('educadores.show', compact('educadores'));
    }

    
}
