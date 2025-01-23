<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    public $timestamps = false;
    public $table= 'ingatlans';
    protected $guarded =[];

    public function category(){
        return $this->belongsTo(Category::class, 'category');
    }
}
