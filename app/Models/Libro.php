<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Libro extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
         'titulo'
        ,'autor'
        ,'anho'
        ,'genero'
        ,'descripcion'
    ];

    //
    static $cods_genero = [
         '' => ''
        ,'NV' => 'Novela'
        ,'SP' => 'Suspense'
        ,'CF' => 'Ciencia ficción'
        ,'T'  => 'Terror'
        ,'H'  => 'Historia'
        ,'FN'  => 'Fantasía'
    ];
}
