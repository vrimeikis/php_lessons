@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Article
                    </div>

                    <div class="card-body">

                        @foreach($articles as $article)

                            <img src="{{ Storage::url($article->cover) }}" width="200">
                            <a href="{{ route('front.article.once', ['slug' => $article->slug]) }}">
                            {{ $article->title }}
                            </a>

                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
