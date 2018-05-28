@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $article->title }}
                        <br>
                        {{ $article->created_at->format('Y-m-d H') }}
                    </div>

                    <div class="card-body">
                        @if ($article->cover)
                            <img src="{{ Storage::url($article->cover) }}" width="300">
                        @endif
                        {{ $article->content }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
