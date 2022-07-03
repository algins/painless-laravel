<?php

namespace App\Models;

use App\Enums\ArticleStatus;
use App\Models\Article\Comment;
use App\Models\User;
use App\Presenters\ArticlePresenter;
use App\Repositories\ArticleRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use ArticlePresenter;
    use ArticleRepository;
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function isDraft(): bool
    {
        return $this->status === ArticleStatus::Draft->value;
    }

    public function isPublished(): bool
    {
        return $this->status === ArticleStatus::Published->value;
    }
}
