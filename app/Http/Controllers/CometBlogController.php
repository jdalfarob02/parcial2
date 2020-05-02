<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Coment;
use App\Models\Rank;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CometBlogController extends Controller
{
    public function indexcomenblog()
    {
        $blog = Blog::with('comentable')->get();
        return $blog;
    }



    public function createusercoment()
    {
        $user = new User;
        $user->name = "maria camila dorado ";
        $user->email = "mariacamila@hotmail.com";
        $user->save();
        


        $comentable = new Coment;
        $comentable->descripcion = "esta muchacha no sabe sumar";
        $user->comentable()->save($comentable);

        return $user->comentable()->get();

    }

    public function updateusercoment()
    {
        $user= User::find(42);
        $user->update(['name' =>'maria camila salazar', 'email' => 'camicami@gmail.com']);
        $user->comentable()->update(['descripcion' => 'no saber restar']);

            return  "datos actualizados correctamente";
    }

    public function destroyusercoment()
    {
       
        $user = User::find(44);
        $user->comentable()->delete();
        $user->destroy(44);
        return "usuario y comentario han sido eliminados";
        
        //return "usuario y rango eliminados correctamente";
    }
    //-------------------------------------------//----------------



    

    public function createblogcoment()
    {
        
        $blog = new Blog;
        $blog->name = "www.elrincondejorgo.com ";
        $blog->save();
        


        $comentable = new Coment;
        $comentable->descripcion = "este blog trata de lenguas extrangeras";
        $blog->comentable()->save($comentable);

        return $blog->comentable()->get();

  

    }
    public function updateblogcoment()
    {
        $blog= Blog::find(4);
        $blog->update(['name' =>'www.losdeadentro.com']);
        $blog->comentable()->update(['descripcion' => 'pagina de la banda']);

            return  "datos actualizados correctamente";
    }



     //eliminar blog
     public function destroyblogcoment()
     {
         
          $blog = Blog::find(5);
             $blog->delete();
         return "blog eliminado exitosamente";
         
         //return "usuario y rango eliminados correctamente";
     }
     //eliminar comnetario
     public function destroyblogcoment2()
     {
        
        $comentable = Coment::find(12);
        $comentable->delete();
         return "comentario  del blog  eliminado";
         
         //return "usuario y rango eliminados correctamente";
     }




}
