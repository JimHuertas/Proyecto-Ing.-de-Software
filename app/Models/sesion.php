<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesion extends Model
{
    use HasFactory;

    protected $table = 'sesion';
    public $timestamps = false;

    protected $casts = [
        'id' => 'integer',
        'id_programa' => 'integer',
    ];
    protected  $primaryKey = 'id';
    protected $fillable = [
        'id',
        'fecha',
        'hora',
        'enlace_meet',
        'id_programa'
    ];
}
