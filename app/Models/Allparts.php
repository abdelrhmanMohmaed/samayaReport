<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allparts extends Model
{
    use HasFactory;
    protected $fillable = ['name','part_number'];
}
