<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dawati_claim extends Model
{
    use HasFactory;
    protected $table = 'dawati_claims';

    public function user_modify()
 {
    return $this->belongsTo('App\User', 'user_modified');
 }
}
