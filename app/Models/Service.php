<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['heading', 'description', 'image', 'editor1', 'editor2', 'editor3'];
    use HasFactory;

    public function serviceConstruction()
    {
        return $this->hasMany(ServiceConstruction::class, 'service_id');
    }
    public function serviceConstructionTwo()
    {
        return $this->hasMany(ServiceConstructionTwo::class, 'service_id');
    }
}
