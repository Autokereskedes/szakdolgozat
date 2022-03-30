<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rendelt_auto extends Model
{
    use HasFactory;

    protected $table = 'rendelt_autos';
    protected $primaryKey = 'rendazon';
   

    protected $fillable = [
            'rendazon',
            'modell',
            'felszerelesCsomag',
            'FId',
            'fényId',
            'beltérId',
            'összár',
            'hazon',
            'státusz',
            'ajánlatDátum',
            'created_at',
            'updated_at'
    ];
}
