@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Article
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('article.edit', ['article' => $article->id]) }}" method="post"
                              enctype="multipart/form-data">

                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title"
                                       value="{{ old('title', $article->title) }}">
                                @if ($errors->first('title'))
                                    <span class="alert-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="author">Author</label>
                                <input class="form-control" type="text" name="author"
                                       value="{{ old('author', $article->author) }}">
                                @if ($errors->first('author'))
                                    <span class="alert-danger">{{ $errors->first('author') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="conten">Content</label>
                                <textarea name="content"
                                          class="form-control">{{ old('content', $article->content) }}</textarea>
                                @if ($errors->first('content'))
                                    <span class="alert-danger">{{ $errors->first('content') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="cover">
                                    Cover
                                    @if ($article->cover)
                                        <img src="{{ Storage::url($article->cover) }}" width="100">
                                    @endif
                                </label>
                                <input class="form-control" type="file" name="cover" value="">
                                @if ($errors->first('cover'))
                                    <span class="alert-danger">{{ $errors->first('cover') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input class="btn btn-info" type="submit" name="submit_article" value="Save">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
