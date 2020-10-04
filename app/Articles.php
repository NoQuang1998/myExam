<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'name', 'description', 'content', 'category_id'
    ];

    public function categories(){
        return $this->belongsTo('App\Categories');
    }
}
