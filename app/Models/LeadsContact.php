<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadsContact extends Model
{
    use HasFactory;

    public function services_check()
    {
        return $this->hasMany(LeadService::class, 'leads_contact_id');
    }
}
