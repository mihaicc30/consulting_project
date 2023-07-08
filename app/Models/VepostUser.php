<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VepostUser extends Model
{
    use HasFactory;

    protected $table = 'vepost_user';

    protected $fillable = [
        'username',
        'vepost_addr',
        'password',
        'displayname',
        'controlstring',
        'balance',
        'vepost_counter',
        'status',
        'free_send_left'
    ];

    protected $hidden = [
        'password'
    ];
}
