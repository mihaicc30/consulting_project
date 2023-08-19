<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EzepostTracking extends Model
{
    use HasFactory;

    protected $table = 'ezepost_tracking';

    protected $fillable = [
        'sender_ezepost_addr',
        'receiver_ezepost_addr'

    ];

    public function getInProgressCount($email)
    {
        return $this->where('receiver_ezepost_addr', $email)
            ->where('status', 'In progress')
            ->count();
    }

    public function yourInProgressCount($email)
    {
        return $this->where('sender_ezepost_addr', $email)
            ->where('status', 'In progress')
            ->count();
    }

    public function getSendingCount($email)
    {
        return $this->where('sender_ezepost_addr', $email)
            ->where('status', 'In progress')
            ->count();
    }

    public function getSuccessful($email)
    {
        return $this->where('sender_ezepost_addr', $email)
            ->where('status', 'Successful')
            ->count();
    }
    public function getFailed($email)
    {
        return $this->where('sender_ezepost_addr', $email)
            ->where('status', 'Failed')
            ->count();
    }
    public function getAllSent($email)
    {
        return $this->where('sender_ezepost_addr', $email)
            ->count();
    }
    public function getAllReceived($email)
    {
        return $this->where('receiver_ezepost_addr', $email)
            ->where('status', 'Successful')
            ->count();
    }
    public function getLastTransmisions($email)
    {
        return $this->where('receiver_ezepost_addr', $email)
            ->where('status', 'Successful')
            ->count();
    }

    // public function getLastThreeFiles($email)
    // {
    //     return $this->where(function ($query) use ($email) {
    //         $query->where('sender_ezepost_addr', $email)
    //             ->orWhere('receiver_ezepost_addr', $email);
    //     })->orderBy('created_at', 'desc')
    //         ->take(3)
    //         ->get();
    // }

    public function getLastThreeFiles($email)
    {

        $lastThreeSentFiles = $this->where('sender_ezepost_addr', $email)
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        $lastThreeReceivedFiles = $this->where('receiver_ezepost_addr', $email)
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        // Combine the sent and received files and sort them based on time_send_start
        $lastThreeFiles = $lastThreeSentFiles->concat($lastThreeReceivedFiles)
            ->sortByDesc('created_at')
            ->take(3);

        return $lastThreeFiles;
    }

    // Creating relationship between ezepost_tracking and users
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'sender_ezepost_addr', 'email');
    // }
}
