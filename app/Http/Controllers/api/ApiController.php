<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\lang;
use App\Models\part;
use Illuminate\Http\Request;

class ApiController extends Controller
{

   public function langs (){
    
    $langs = lang::get();

    return response($langs , 200 , ['ok'] ) ;

   } 

   public function parts ($id){
    
    $langs = lang::find($id);
    $parts = $langs->parts;

    return response($parts , 200 , ['ok'] ) ;

   } 

   public function contents ($id){


    $parts = part::find($id);
    $contents = $parts->contents;

    return response($contents , 200 , ['ok'] ) ;

   } 

}
