<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    public function getData(){

        return   variant::get();

    }

}
