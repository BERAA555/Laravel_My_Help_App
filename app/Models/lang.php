<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use database\migrations\parts ;

class lang extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' ];

    public function parts() { 
        return $this->hasMany(part::class , 'lang_id' ); 
 
    }
}
