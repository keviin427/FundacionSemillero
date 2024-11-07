<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminGeneral;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;


class AdminGeneralController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        AdminGeneral::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
            'password' => Hash::make($request['password']),
            'role' => 'sa',
            'direccion_domicilio' =>  $request-> direccion_domicilio,
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'role' => 'sa',
        ]);



        return redirect('/');
    }


    public function show()
    {
        $administradoresgen = AdminGeneral::all();
        return view('administradoresgen.show', compact('administradoresgen'));
    }

    
}
