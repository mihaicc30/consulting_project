<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VepostTracking extends Model
{
    use HasFactory;

    protected $table = 'vepost_tracking';

    protected $fillable = [
        'sender_vepost_addr',
        'receiver_vepost_addr'

    ];

    public function getInProgressCount($email)
    {
        return $this->where('receiver_vepost_addr', $email)
            ->where('status', 'in progress')
            ->count();
    }

    public function getSendingCount($email)
    {
        return $this->where('sender_vepost_addr', $email)
            ->where('status', 'in progress')
            ->count();
    }

    public function getSuccessful($email)
    {
        return $this->where('sender_vepost_addr', $email)
            ->where('status', 'success')
            ->count();
    }
    public function getFailed($email)
    {
        return $this->where('sender_vepost_addr', $email)
            ->where('status', 'failed')
            ->count();
    }
    public function getAllSent($email)
    {
        return $this->where('sender_vepost_addr', $email)
            ->count();
    }
    public function getAllReceived($email)
    {
        return $this->where('receiver_vepost_addr', $email)
            ->where('status', 'successful')
            ->count();
    }
    public function getLastTransmisions($email)
    {
        return $this->where('receiver_vepost_addr', $email)
            ->where('status', 'successful')
            ->count();
    }

    public function getLastThreeFiles($email)
    {
        return $this->where(function ($query) use ($email) {
            $query->where('sender_vepost_addr', $email)
                ->orWhere('receiver_vepost_addr', $email);
        })->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
    }

    // Creating relationship between vepost_tracking and users
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'sender_vepost_addr', 'email');
    // }
}
