<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
        protected $fillable = [
                'name' , 'email',  
    ];

    protected $hidden =[
            'created_at', 'updated_at'
    ];
   
    public function rango()
    {
        return $this->hasOne('App\Models\Rank');
        
    }
   
    public function pags()
    {
        return $this->hasMany('App\Models\Pag');
    }


    public function comentable()
{
    return $this->morphMany('App\Models\Coment' , 'comentable');
}
}
