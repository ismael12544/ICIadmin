<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = 'services';
    use HasFactory;
    public function soport()
    {
        return $this->hasMany(Soports::class);
    }
}
