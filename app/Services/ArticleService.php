<?php

namespace App\Services;

use App\Mail\CommentCreated;
use App\Models\Article;
use App\Models\Article\Comment;
use App\Mutators\ArticleMutator;
use Illuminate\Support\Facades\Mail;

class ArticleService
{
    public static function createComment(Article $article, array $attributes): void
    {
        $comment = new Comment($attributes);
        ArticleMutator::addComment($article, $comment);
        Mail::to($article->user->email)->send(new CommentCreated($comment));
    }
}
