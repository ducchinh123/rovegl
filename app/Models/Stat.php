<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $table = 'stats';

    use HasFactory;
    protected $fillable = [
        'fb_video_asset_id',
        'fb_page_id',
        'date',
        'earnings',
        'status',
    ];
}
