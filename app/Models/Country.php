<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    
    protected $table = 'countries';
    
    protected $hidden = [
        
    ];

    protected $guarded = [];

    protected $dates = ['deleted_at'];
}
