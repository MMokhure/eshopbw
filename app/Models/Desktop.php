<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desktop extends Model
{
    use HasFactory;

    protected $fillable = [
        'model','mserial','gserial','ram','rom','operating_system','status','others'
    ];
}
