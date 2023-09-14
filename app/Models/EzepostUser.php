<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class EzepostUser extends Model
{
    use HasFactory, Billable;
    protected $table = 'ezepost_user';

    protected $fillable = [
        'username',
        'ezepost_addr',
        'password',
        'displayname',
        'controlstring',
        'balance',
        'ezepost_counter',
        'status',
        'free_send_left'
    ];

    protected $hidden = [
        'password'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ezepost_addr', 'ezepost_addr'); // ezepost_addr is the foreign key in ezepost_user table
    }
}
