<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'fb_page_id',
        'page_name',
        'status',
    ];
}
