<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;
    protected $fillable = [
        'model','mserial','gserial','tray','cartridge','oprinter_type','inktype','type','opt','others','status'
    ];
}
