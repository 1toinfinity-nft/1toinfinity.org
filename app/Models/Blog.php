<?php

namespace App\Models;

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Builder;
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

    protected $casts = [
        'published_at' => 'datetime:d/m/Y'
    ];

    protected static function booted(): void
    {
        static::creating(function (Blog $blog) {
            $blog->author_id = $blog->author_id ?? auth()->id();
            $blog->slug = $blog->title;
            $blog->excerpt = $blog->generateExcerpt();
        });

        static::created(function (Blog $blog) {
            $blog->slug = $blog->generateSlug(true);
            $blog->save();
        });
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at');
    }

    public static function findBySlug(string $slug): ?static
    {
        return static::firstWhere('slug', $slug);
    }

    public function isPublished(): bool
    {
        return !is_null($this->published_at);
    }

    public function generateSlug(bool $generateSlugForUrl = false): string
    {
        $slugPrefix = '';

        if ($generateSlugForUrl) {
            $slugPrefix .=  $this->id . '-';
        }

        return $slugPrefix . Str::slug($this->title);
    }

    public function generateExcerpt(int $length = 150, int $offset = 0): string
    {
        return trim(
            substr(
                preg_replace(
                    '/\s+/',
                    ' ',
                    strip_tags(
                        Markdown::convert($this->content)->getContent()
                    ),
                ),
                $offset,
                $length
            )
        );
    }
}
