<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN_ID = 1;
    const MANAGER_ID = 2;

    protected $fillable = [
        'name'
    ];
}
