<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable ;

class User extends Authenticable
{
    use HasFactory;

    public function detail()
    {
        // each user has one user_details
        return $this->hasOne(UserDetail::class);
    }

    public function department()
    {
        // this user belongs to a department
        return $this->belongsTo(Department::class);
    }
}
