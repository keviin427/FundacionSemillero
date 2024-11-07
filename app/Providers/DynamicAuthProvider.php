<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class DynamicAuthProvider extends ServiceProvider
{
    public function boot()
    {
        // Configurar dinámicamente guardias y proveedores
        Config::set('auth.providers', [
            'users' => [
                'driver' => 'eloquent',
                'model' => \App\Models\User::class,
            ],
            'psicologo_' => [
                'driver' => 'eloquent',
                'model' => \App\Models\Psicologo::class,
            ],
            'educador_' => [
                'driver' => 'eloquent',
                'model' => \App\Models\Educador::class,
            ],
            
            'admingeneral_' => [
                'driver' => 'eloquent',
                'model' => \App\Models\AdminGeneral::class,
            ],
        ]);

        Config::set('auth.guards', [
            'web' => [
                'driver' => 'session',
                'provider' => 'users',
            ],
            'educador' => [
                'driver' => 'session',
                'provider' => 'educador_',
            ],
            'psicologo' => [
                'driver' => 'session',
                'provider' => 'psicologo_',
            ],
            'adminGeneral' => [
                'driver' => 'session',
                'provider' => 'admingeneral_',
            ],
            'api' => [
                'driver' => 'sanctum',
                'provider' => 'users',
                'hash' => false,
            ],
            'sanctum' => [
            'driver' => 'sanctum',
            'provider' => 'users',
        ],
        
        ]);
    }
}
