<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programa extends Model
{
    use HasFactory;
    protected $table = 'programa';
    public $timestamps = false;
    
    protected $casts = [
        'id_programa' => 'integer',
        'fecha_inicio' => 'datetime:Y-m-d',
        'fecha_fin' => 'datetime:Y-m-d'
    ];
    protected  $primaryKey = 'id_programa';
    protected $fillable = [
        'id_programa',
        'edicion',
        'fecha_inicio',
        'descripcion',
        'fecha_fin'
    ];


}
