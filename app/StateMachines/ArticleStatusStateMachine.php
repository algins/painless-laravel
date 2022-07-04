<?php

namespace App\StateMachines;

use App\Enums\ArticleStatus;
use Asantibanez\LaravelEloquentStateMachines\StateMachines\StateMachine;

class ArticleStatusStateMachine extends StateMachine
{
    public function recordHistory(): bool
    {
        return false;
    }

    public function transitions(): array
    {
        return [
            ArticleStatus::Draft->value => [
                ArticleStatus::Published,
            ],
        ];
    }

    public function defaultState(): ?string
    {
        return ArticleStatus::Draft->value;
    }
}
