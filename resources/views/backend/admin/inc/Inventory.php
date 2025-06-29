<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;


       public function Staff()
    {
        return $this->hasOne(User::class, "id", "revert_id");
    }



   
}
