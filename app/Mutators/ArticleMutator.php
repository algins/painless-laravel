<?php

namespace App\Mutators;

use App\Models\Article;
use App\Models\Article\Comment;
use Illuminate\Support\Facades\DB;

class ArticleMutator
{
    public static function addComment(Article $article, Comment $comment): Article
    {
        DB::transaction(function () use ($comment, $article) {
            $article->comments()->save($comment);
            $article->increment('comments_count');
        });

        return $article;
    }
}
