<?php

namespace Portalium\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    //	id	name	email	email_verified_at	password	remember_token	created_at	updated_at
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    



}
