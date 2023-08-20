<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\isEmpty;

class EzepostTracking extends Model
{
    use HasFactory;

    protected $table = 'ezepost_tracking';

    protected $fillable = [
        'sender_ezepost_addr',
        'receiver_ezepost_addr',

    ];

    public function getInProgressCount($ezepost_addr)
    {
        return $this->where('receiver_ezepost_addr', $ezepost_addr)
            ->where('status', 'In progress')
            ->count();
    }

    public function yourInProgressCount($ezepost_addr)
    {
        return $this->where('sender_ezepost_addr', $ezepost_addr)
            ->where('status', 'In progress')
            ->count();
    }

    public function getSendingCount($ezepost_addr)
    {
        return $this->where('sender_ezepost_addr', $ezepost_addr)
            ->where('status', 'In progress')
            ->count();
    }

    public function getSuccessful($ezepost_addr)
    {
        return $this->where('sender_ezepost_addr', $ezepost_addr)
            ->where('status', 'Successful')
            ->count();
    }
    public function getFailed($ezepost_addr)
    {
        return $this->where('sender_ezepost_addr', $ezepost_addr)
            ->where('status', 'Failed')
            ->count();
    }
    public function getAllSent($ezepost_addr)
    {
        return $this->where('sender_ezepost_addr', $ezepost_addr)
            ->count();
    }

    public function getAllReceived($ezepost_addr)
    {
        return $this->where('receiver_ezepost_addr', $ezepost_addr)
            ->orderByDesc('created_at')->get();
    }

    public function getHistoryReceived($ezepost_addr)
    {
        return $this->where('receiver_ezepost_addr', $ezepost_addr)
            ->whereDate('created_at', '!=', now()->format('Y-m-d')) // Exclude today's items
            ->orderByDesc('created_at')
            ->get();
    }
    public function getHistoryViewed($ezepost_addr)
    {
        return $this->where('receiver_ezepost_addr', $ezepost_addr)
            ->whereDate('created_at', '!=', now()->format('Y-m-d')) // Exclude today's items
            ->where('time_post_opened', '!=', null)->orderByDesc('created_at')
            ->get();
    }

    public function getLastTransmisions($ezepost_addr)
    {
        return $this->where('receiver_ezepost_addr', $ezepost_addr)
            ->where('status', 'Successful')
            ->count();
    }

    public function getLastThreeFiles($ezepost_addr)
    {

        $lastThreeSentFiles = $this->where('sender_ezepost_addr', $ezepost_addr)
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        $lastThreeReceivedFiles = $this->where('receiver_ezepost_addr', $ezepost_addr)
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        // Combine the sent and received files and sort them based on time_send_start
        $lastThreeFiles = $lastThreeSentFiles->concat($lastThreeReceivedFiles)
            ->sortByDesc('created_at')
            ->take(3);

        return $lastThreeFiles;
    }
}
