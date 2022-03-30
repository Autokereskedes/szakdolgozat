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
            'userId',
            'fenyezes',
            'belter',
            'összár',
            'hazon',
            'státusz',
            'created_at',
            'updated_at'
    ];
}
