<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];

    /**
     * Get the excerpt of the article content.
     *
     * @param int $length
     * @return string
     */
    public function getExcerpt($length = 100)
    {
        return Str::limit($this->content, $length);
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }

    public function getFormattedCreatedDateAttribute()
    {
        return $this->created_at->format('d F Y');
    }
}
