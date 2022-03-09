<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalenderEvent extends Model
{
    use HasFactory;
    protected $table = 'calenderevent';
    protected $fillable = ['title','begin', "finish"];
}
