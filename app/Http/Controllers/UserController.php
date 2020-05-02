<?php

namespace App\Http\Controllers;

use App\Models\Pag;
use App\Models\Rank;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('rango')->get();
        return $user;
    }


    public function create()
    {
        //usuario y rango
        $user = new User;
        $user->name = "jesus david alfaro";
        $user->email ="jdalfarob02@gmail.com";
        $user->save();
        


        $rango = new Rank;
        $rango->name = "platino";
        $user->rango()->save($rango);

        return $rango->user()->get();
        

     //--------------------------------------//----------//------------




    }

    





    public function update()
    {
        $user= User::find(18);
        $user->update(['name' =>'jesus david alfaro benitez','email' =>'jesusdalfarob@gmail.com']);
        $user->rango()->update(['name' => 'platino']);

            return "datos actualizados correctamente";
    }

   
    
    //rango y usuario
    public function destroy()
    {
       
        $user = User::find(18);
        $user->rango()->delete();
        $user->destroy(18);
        return "usuario y rango han sido eliminados";
        
        //return "usuario y rango eliminados correctamente";
    }

    

    
    








}
