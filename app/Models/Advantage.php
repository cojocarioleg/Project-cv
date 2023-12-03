<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    use HasFactory;
    protected $fillable = ['title','advantage_1', 'advantage_2','advantage_3','advantage_4','icon'];
}
