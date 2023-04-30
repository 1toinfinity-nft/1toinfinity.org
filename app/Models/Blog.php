<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public static function findBySlug(string $slug): ?static
    {
        return static::firstWhere('slug', $slug);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}