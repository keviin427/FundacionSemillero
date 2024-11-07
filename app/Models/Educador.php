<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;



class Educador extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;



    protected $table = 'educador';

    protected $fillable = [
        'name',
        'surname',
        'fecha_nacimiento',
        'direccion_domicilio',
        'phone',
        'email',
        'password',
        'role',
    ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function adminlte_image()
    {
        return 'https://picsum.photos/300/300';
    }

    public function adminlte_profile_url()
    {
        return '/user/profile';
    }

    public function adminlte_desc()
    {
        // Verificar si el usuario está autenticado
        if (Auth::check()) {
            // Obtener el usuario autenticado
            $user = Auth::user();

            // Mapear el valor del campo 'role' a las descripciones correspondientes
            switch ($user->role) {
                case 'ps':
                    return 'Psicologo';
                case 'ed':
                    return 'Educador';
                case 'sa':
                    return 'Admin General';
                default:
                    return 'Rol desconocido';
            }
        }

        // En caso de que el usuario no esté autenticado, puedes retornar un valor por defecto o manejarlo según tus necesidades
        return 'Usuario no autenticado';
    }

    
}
