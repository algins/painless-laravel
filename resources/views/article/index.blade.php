@extends('layouts.app')
@section('title', __('views.article.index.title'))

@section('content')
    <h1>{{ __('views.article.index.title') }}</h1>

    @foreach ($articles as $article)
        <div class="card my-3">
            <div class="card-body">
                <p @class(['text-danger' => $article->isDraft()])>{{ $article->status }}</p>
                <h2 class="card-title h3">{{ $article->title }}</h2>
                <h3 class="card-subtitle mb-2 text-muted h6">{{ $article->date }}</h3>
                <p class="card-text">{{ $article->content }}</p>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <a href="{{ route('articles.comments.index', $article) }}" class="card-link">{{ __('views.article.index.comments', ['count' => $article->comments_count]) }}</a>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="d-flex justify-content-end gap-2">
                            <a href="#" class="btn btn-primary px-4">{{ __('views.article.index.edit') }}</a>
                            <a href="#" class="btn btn-danger px-3">{{ __('views.article.index.delete') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
