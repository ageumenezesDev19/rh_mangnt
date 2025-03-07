<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserDetail;

class User extends Model
{
    use HasFactory;

    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
