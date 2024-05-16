<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\lang;
use App\Models\part;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class LangsController extends Controller
{

    public function dashboard(){
    
        $langs = lang::get();
        $parts = [

        ] ;
        $contents = "";
        $data =[
            'name'    => '' , 
            'explane' => '' , 
            'code'    => '' , 
            'path'    => '' , 
        
        ];
      
        return view ('components.navication' , compact('langs','parts' ,'data' ,'contents'));
    }
  
    public function dashboard2($id){

        $langs = lang::get();
        $lang  = lang::find($id); 
        $parts = $lang->parts ;
        $contents = "";
        $data =[
            'name'    => '' , 
            'explane' => '' , 
            'code'    => '' , 
            'path'    => '' , 
    
        ];  
        session()->put('key', $lang);
        return view ('components.navication' , compact('langs' ,'parts' , 'data' ,'contents'));
    }

    public function footer($id){
        
        $langs = lang::get();
        $lang = session('key');  
    
                
        $data = Content::find($id); 
        $fileName =  $data->code ;
        $contents = Storage::disk('public')->get($fileName);

        
        if ($lang){
            $parts = $lang->parts  ;

        }else {
            $parts  = [];   
            $contents = "" ;
            $data =[
                'name'    => '' , 
                'explane' => '' , 
                'code'    => '' , 
                'path'    => '' , 
        
            ]; 
        }
        return view ('components.navication ' , compact('data' ,'parts' ,'langs', 'contents'));

    }   

    public function langadd(){
        $langs = lang::get();
        return view ('pages.langAdd' , compact('langs') );

    }

    public function AddPart(){

        
        $langs = lang::get();
        $parts = part::get();

        return view ('pages.partAdd', compact('langs', 'parts'));
    }

    public function insertpart(Request $request){

        $request->validate([
            'lang'    => 'required'  ,
            'name'    => 'required|unique:parts'  ,
            
        ]);

        part::create([
            'name'    => $request->name,
            'lang_id' => $request->lang ,

        ]);
        
        return  redirect()->back();

    }
    public function insertlang(Request $request ){

        $request->validate([
            'name'    => 'required|unique:langs'  ,
        ]);

        lang::create([
            'name' => $request->name,
        ]);

        return redirect()->route('dashboard');
    }



// lessons

    public function AddLesson($id){

        $contents = Content::get();

        // $id = $id ;
        return view ('pages.AddLesson', compact( 'id', 'contents'));
    }


    public function AddLesson2(Request $request , $id ){

        $request->validate([
            'name'    => 'required|unique:contents'  ,
            'explane' => 'required' ,
            'code'    => 'required|unique:contents' ,
            'path'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        Storage::disk('public')->put($request->name.$id , $request->code);

        $filePath = $request->name.$id ;
        $photoPath =$request->file('path')->store("",'beraa');    

        
        Content::create([
            'name'    => $request->name,
            'explane' => $request->explane ,
            'code'    => $filePath ,
            'path'    => $photoPath ,
            'part_id' => $id ,

        ]);
        
        return  redirect()->back();
    }

    public function DeleteLang ($id){
        lang::destroy($id); 
        return redirect()->back();
    }


    public function DeleteMenu ($id){
        part::destroy($id); 
        return redirect()->back();
    }


    public function DeleteLesson ($id){
        $content = Content::find($id); 
        Storage::disk('public')->delete($content->code);
        Storage::disk('beraa')->delete($content->path);
        Content::destroy($id); 
        
        return redirect()->back();
    }


    public function UpdateLesson2 ($id){

        $contents = Content::find($id);
        return view ('pages.UpdateLesson' , compact('contents') );
    }

    public function UpdateLesson (Request $request , $id){

        $content = Content::find($id);
        Storage::disk('public')->delete($content->code);
        Storage::disk('beraa')->delete($content->path);
   
        $request->validate([
            'name'    => 'required|unique:contents'  ,
            'explane' => 'required' ,
            'code'    => 'required|unique:contents' ,
            'path'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        Storage::disk('public')->put($request->name.$id , $request->code);

        $filePath = $request->name.$id ;
        $photoPath =$request->file('path')->store("",'beraa');    

        Content::whereId($id)->update([
            'name'    => $request->name,
            'explane' => $request->explane ,
            'code'    => $filePath ,
            'path'    => $photoPath ,
            'part_id' => $content->part->id ,

        ]);
        
        return  redirect()->back();
    }



}


