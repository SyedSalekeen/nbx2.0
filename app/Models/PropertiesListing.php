<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiesListing extends Model
{
    use HasFactory;

 
    public function properties_values()
    {
        return $this->hasMany(PropertiesListingValues::class, 'properties_listing_id');
    }
}
