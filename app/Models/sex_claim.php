<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sex_claim extends Model
{
    use HasFactory;
     //creating relationship
     protected $table = 'sex_claims';

     //public function user_modify()
 // {
 
  //   return $this->belongsTo('App\User', 'user_modified');
 // }
}
