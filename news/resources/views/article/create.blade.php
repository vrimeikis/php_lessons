@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        New Article
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('article.create') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                            </div>

                            <div class="form-group">
                                <label for="author">Author</label>
                                <input class="form-control" type="text" name="author" value="{{ old('author') }}">
                            </div>

                            <div class="form-group">
                                <label for="conten">Content</label>
                                <textarea name="content" class="form-control">{{ old('content') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="cover">Cover</label>
                                <input class="form-control" type="file" name="cover" value="">
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
