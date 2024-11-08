<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceConstruction extends Model
{
    protected $fillable = ['name', 'description', 'image', 'service_id'];
    use HasFactory;
}
