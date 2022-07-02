@extends('layouts.app')
@section('title', __('views.comment.create.title'))

@section('content')
    <h1>{{ __('views.comment.create.title') }}</h1>

    {{ Form::model($comment, ['url' => route('articles.comments.store', $article)]) }}
        @include('comment.form')
        {{ Form::submit(__('views.comment.create.create'), ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endsection
