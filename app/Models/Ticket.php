<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function Category()
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }


       public function User()
    {
        return $this->hasOne(User::class, "id", "user_id");
    }



   
}
