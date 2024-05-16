<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' , 'explane' , 'code' , 'path' , 'part_id'];

    public function Part() {
        return $this->belongsTo(part::class , 'part_id'); 
}


}
