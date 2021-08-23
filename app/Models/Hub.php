<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hub extends Model
{
    use HasFactory;
    protected $fillable = [
        'model','mserial','gserial','port','data_rate','status','others'
    ];
}
