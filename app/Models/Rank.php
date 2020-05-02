<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $table = 'ranks';
        protected $fillable = [
                'name' , 'user_id'
    ];

    protected $hidden =[
            'created_at', 'updated_at'
    ];

    

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function comentable()
{
    return $this->morphMany('App\Models\Coment' , 'comentable');
}
}
