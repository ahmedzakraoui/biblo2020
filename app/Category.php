<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

        public function livres(){
            return $this->hasMany(Livre::class);
        }
}
