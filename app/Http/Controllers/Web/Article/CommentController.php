<?php

namespace App\Http\Controllers\Web\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Article;
use App\Models\Article\Comment;
use App\Mutators\CommentMutator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function index(Article $article): View
    {
        return view('comment.index', compact('article'));
    }

    public function create(Article $article): View
    {
        $comment = new Comment();

        return view('comment.create', compact('article', 'comment'));
    }

    public function store(StoreCommentRequest $request, Article $article): RedirectResponse
    {
        $attributes = $request->validated();
        CommentMutator::create($attributes, $article);

        return redirect()->route('articles.comments.index', $article);
    }

    public function show(Article $article, Comment $comment)
    {
        //
    }

    public function edit(Article $article, Comment $comment)
    {
        //
    }

    public function update(Request $request, Article $article, Comment $comment)
    {
        //
    }

    public function destroy(Article $article, Comment $comment)
    {
        //
    }
}
