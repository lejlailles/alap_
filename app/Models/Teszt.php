<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategoria;

class Teszt extends Model
{
    protected $table = 'teszt';
    protected $primaryKey = 'id';
    protected $fillable = [

        'id',
        'kerdes',
       'v1',
       'v2',
       'v3',
       'v4',
       'helyes',
       'kategoria_id'

    ];

    public function kategoria(){
        return $this->hasOne(Kategoria::class, 'id', 'kategoria_id');
    }
}
