<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Define the $guarded property to allow mass assignment for the fields you want to be fillable
    protected $guarded = [];

    // Define the $fillable property correctly
    protected $fillable = ['name', 'email', 'phone', 'content'];
}
