@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Article
                        <a class="btn btn-info btn-sm" href="{{ route('article.create') }}">New</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">

                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>

                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->slug }}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="{{ route('article.edit', ['article' => $article->id]) }}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>

                        {{ $articles->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
