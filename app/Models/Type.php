<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Part;

class Type extends Model
{
    use HasFactory;
    
    
    protected $fillable =["type","part","price","type_id"];
    public function part(){
        return $this->belongsTo(Part::class,"type_id");
    }
}

