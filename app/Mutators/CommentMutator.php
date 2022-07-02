<?php

namespace App\Mutators;

use App\Models\Article;
use App\Models\Article\Comment;

class CommentMutator
{
    public static function create(array $attributes, Article $article): Comment
    {
        $article->increment('comments_count');

        $comment = new Comment($attributes);
        $comment->article()->associate($article);
        $comment->save();

        return $comment;
    }
}
