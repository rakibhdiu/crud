<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    protected $table = 'cruds';  // Name of your database table

    protected $fillable = ['name', 'email'];
}
