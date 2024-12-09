<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'wisata_id',
        'title',
        'slug',
        'content',
        'author',
        'category',
        'published_date',
        'tags',
        'image',
    ];

    public function wisatas()
    {
        return $this->belongsTo(Wisata::class,'wisata_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

