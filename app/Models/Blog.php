<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected static function booted(): void
    {
        static::creating(function (Blog $blog) {
            $blog->author_id = auth()->id();
            $blog->slug = Str::slug($blog->title);
            $blog->excerpt = substr(strip_tags($blog->content), 0, 150);
        });

        static::created(function (Blog $blog) {
            $blog->slug = $blog->id . '-' . $blog->slug;
            $blog->save();
        });
    }
}
