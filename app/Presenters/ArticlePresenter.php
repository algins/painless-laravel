<?php

namespace App\Presenters;

use Carbon\Carbon;

trait ArticlePresenter
{
    public function getDateAttribute(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d.m.Y.');
    }
}
