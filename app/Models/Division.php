<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'abbreviation'];

    public function services()
    {
        return $this->hasMany(Service::class, 'id_division');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'id_division');
    }
}
