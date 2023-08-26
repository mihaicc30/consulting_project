<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'code',
        'price',
        'currency',
        'slug',
        'stripe_plan',
        'stripe_yearly_plan',
        'description',
        'message',
        'options'
    ];

    protected $casts = [
        'currency' => 'json',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
