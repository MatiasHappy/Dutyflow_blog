<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'features', 
    ];

    protected $casts = [
        'features' => 'array', 
    ];


   public function users()
    {
        return $this->belongsToMany(User::class, 'subscriptions');
    }
}
