<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Se importa esta case necesaria para poder hacer uso de los mutadores
// y modificar el valor que entra en las tablas
// use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // El método se debe hacer referencia al atributo que se quiere manipular
    public function setNameAttribute ($value) // $value recupera el valor para poder manipularlo
    {
        // Convierte en minúsculas el valor
        /* Usa la propiedad atributtes del objeto para acceder al campo, primero 
        realiza la modificación y luego la asigna */
        $this->attributes['name'] = strtolower($value);
    }

    // MÉTODO ACCESOR
    // El valor se modifica cuando se va a acceder a él
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
