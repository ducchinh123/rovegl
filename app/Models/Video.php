<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    use HasFactory;
    protected $fillable = [
        'page_id',
        'fb_video_id',
        'user_id',
        'title',
        'status',
    ];
}
