<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // app/Models/Role.php
 // Indiquer les attributs pouvant être assignés en masse
 protected $fillable = ['name'];
 
    public function users()
    {
        return $this->belongsToMany(User::class, 'roles_users');
    }

}
