<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function eixo(){
        return $this->belongsTo('App\Models\Eixo');
    }
}
