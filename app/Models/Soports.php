<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soports extends Model
{
  
    protected $table = 'soports';
    use HasFactory;
    public function Services()
    {
        return $this->belongsToMany(Services::class, 'services_id','id');
    }
}
