<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;


class Part extends Model
{
    use HasFactory;
    
    public function type(){
        return $this->hasMany(Type::class,"id");
    }
}
