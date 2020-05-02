<?php

namespace App\Http\Controllers;

use App\Models\Pag;
use App\Models\User;
use Illuminate\Http\Request;

class PagController extends Controller
{
    public function indexpag()
    {
        $user = User::with('pags')->get();
        return $user;
    }
    public function createpag()
    {
        
            $user = new User();
            $user->name = "JUAN CAMILO HERNANDEZ";
            $user->email ="juancamilo@hotmail.com";
            $user->save();
    


          
            $pags = new Pag;
             $pags->url = "www.loslocosadan.com";
            $user->pags()->save($pags);

            $pags = new pag;
            $pags->url ="www.losdeadnetro,com";
            $user->pags()->save($pags);

            

        

         return $user->pags;

    
        
    }


    public function updatepag()
    {
        $user= User::find(38);
        $user->update(['name' =>'juan camilo de la espriella','email' =>'juancapriella@gmail.com']);

        $user->pags()->update(['url' =>'loslocosadan.com']);


            return "datos actualizados correctamente";
    }


    public function destroypag()
    {
        $user = User::find(39);
        $user->pags()->delete();
        $user->destroy(39);
        return "pagina/s y usuario eliminadas";
        
    }


   

    

   
}

