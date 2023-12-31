<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    public function IsBlocked()
    {
        $IsBlocked = substr($this->controlstring, 0, 1);
        // return true if not blocked
        return $IsBlocked === '1';
    }
    public function isAdmin()
    {
        $isAdmin = substr($this->controlstring, 19, 1);
        return $isAdmin === '1';
    }

    public function isNotAdmin()
    {
        $isAdmin = substr($this->controlstring, 19, 1);
        return $isAdmin === '0';
    }
    

    public function checkIfUserHasStripeId()
    {
        $hasStripeId = $this->stripe_id;
        dd("hasStripeId", $hasStripeId);
        return $hasStripeId !== null;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'ezepost_addr',
        'controlstring',
        'contacts',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'contacts' => 'array',
    ];

    public function EzepostUser()
    {
        return $this->hasOne(EzepostUser::class, 'id', 'id');
    }
}
