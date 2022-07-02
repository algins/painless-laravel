<?php

namespace App\Repositories;

use App\Enums\ArticleStatus;
use Illuminate\Database\Eloquent\Builder;

trait ArticleRepository
{
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', ArticleStatus::Published->value);
    }
}
