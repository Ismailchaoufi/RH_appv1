<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nomFr', 'nomAr', 'prenomFr', 'prenomAr', 'email', 'password', 'photo', 'role',
        'nomPereFr', 'nomPereAr', 'nomMereFr', 'nomMereAr', 'lieu_naissance', 'date_naissance', 'CINE', 'filiere',
        'id_matricule', 'id_role', 'id_grade', 'id_division', 'id_service', 'id_status'
    ];

    public function matricule()
    {
        return $this->belongsTo(Matricule::class, 'id_matricule');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'id_grade');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'id_division');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }

    public function statusFonctionnaire()
    {
        return $this->belongsTo(StatusFonctionnaire::class, 'id_status');
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class, 'id_user');
    }

    public function maries()
    {
        return $this->hasMany(Marie::class, 'id_user');
    }

    public function enfants()
    {
        return $this->hasMany(Enfant::class, 'id_user');
    }

    public function fichierNotes()
    {
        return $this->hasMany(FichierNote::class, 'id_user');
    }
}
