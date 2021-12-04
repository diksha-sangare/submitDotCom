<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'url',
        'directLink',
        'twitterUsername',
        'email',
        'twitterFollower',
        'alexaRanking',
        'websiteCategories',
        'regions',
        'platforms'
    ];

}
