<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edicion extends Model
{
    use HasFactory;
    protected $table = 'edicion';
    public $timestamps = false;
    
    protected $casts = [
        'edicion' => 'integer',
    ];
    protected  $primaryKey = 'edicion';
    protected $fillable = [
        'edicion',
        'nombre',
    ];

}
