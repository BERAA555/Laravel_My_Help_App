<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class part extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' ,"lang_id" ];
    

    public function Lang() {
        return $this->belongsTo(lang::class , 'lang_id'); 
}
    public function contents() { 
        return $this->hasMany(Content::class , 'part_id' ); 
 
    }
}
