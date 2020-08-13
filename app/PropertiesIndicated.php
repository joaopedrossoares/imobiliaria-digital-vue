<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertiesIndicated extends Model
{
    protected $fillable = ['id', 'status', 'zip_code', 'street', 'number', 'complement', 'roles_id', 'users_id'];
    
}
