@extends('layouts.app')
@section('title', __('views.comment.index.title'))

@section('content')
    <h1>{{ __('views.comment.index.title') }}</h1>
    <a href="{{ route('articles.comments.create', $article) }}" class="btn btn-primary px-4">{{ __('views.comment.index.create') }}</a>

    @foreach ($article->comments as $comment)
        <div class="card my-3">
            <div class="card-body">
                <p class="card-text">{{ $comment->content }}</p>

                <div class="row">
                    <div class="col-12 col-sm-6">

                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="d-flex justify-content-end gap-2">
                            <a href="#" class="btn btn-primary px-4">{{ __('views.comment.index.edit') }}</a>
                            <a href="#" class="btn btn-danger px-3">{{ __('views.comment.index.delete') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
