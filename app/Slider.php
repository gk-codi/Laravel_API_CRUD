<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
       /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
       protected $fillable = [
        'name', 'src',
       ];
}
// php artisan make:controller SliderController --resource --model=Slider