<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Page extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'route_name',
        'content',
        'excerpt',
        'status',
        'featured_image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'author_id',
        'order',
        'is_homepage',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_homepage' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Automatically generate slug from title if not provided
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            if (empty($page->slug)) {
                $page->slug = Str::slug($page->title);
                
                // Ensure unique slug
                $originalSlug = $page->slug;
                $count = 1;
                while (static::where('slug', $page->slug)->exists()) {
                    $page->slug = $originalSlug . '-' . $count;
                    $count++;
                }
            }
        });

        static::updating(function ($page) {
            if ($page->isDirty('title') && empty($page->slug)) {
                $page->slug = Str::slug($page->title);
            }
        });
    }

    /**
     * Get the author of the page
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Check if page is published
     */
    public function isPublished(): bool
    {
        return $this->status === 'published';
    }

    /**
     * Get the URL for the page
     */
    public function getUrlAttribute(): string
    {
        if ($this->is_homepage) {
            return route('home');
        }
        if ($this->route_name) {
            return route($this->route_name);
        }
        return route('page.show', $this->slug);
    }

    /**
     * Check if this is a frontend page
     */
    public function isFrontendPage(): bool
    {
        return !empty($this->route_name);
    }
}
