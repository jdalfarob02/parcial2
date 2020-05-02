<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
            'name'  
];

protected $hidden =[
        'created_at', 'updated_at'
];

public function comentable()
{
    return $this->morphMany('App\Models\Coment' , 'comentable');
}
}
