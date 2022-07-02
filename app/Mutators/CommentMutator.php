<?php

namespace App\Mutators;

use App\Models\Article;
use App\Models\Article\Comment;
use Illuminate\Support\Facades\DB;

class CommentMutator
{
    public static function create(array $attributes, Article $article): Comment
    {
        $comment = new Comment($attributes);

        DB::transaction(function () use ($comment, $article) {
            $article->increment('comments_count');
            $comment->article()->associate($article);
            $comment->save();
        });

        return $comment;
    }
}
