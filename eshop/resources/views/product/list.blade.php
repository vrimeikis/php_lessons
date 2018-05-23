@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Products') }}
                        <a class="btn btn-primary btn-sm" href="{{ route('product.create') }}">New</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <tr>
                                <td>ID</td>
                                <td>Image</td>
                                <td>Title</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>Actions</td>
                            </tr>

                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if($product->image)
                                            <img src="{{ Storage::url($product->image) }}" width="100">
                                        @endif
                                    </td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->price }} EUR</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>
                                        <div class="btn-group-sm">
                                            <a class="btn btn-success btn-sm"
                                               href="{{ route('product.edit', ['product' => $product->id]) }}">Edit</a>
                                            <a class="btn btn-info btn-sm"
                                               href="{{ route('product.view', ['product' => $product->id]) }}">View</a>
                                            <form action="{{ route('product.delete', ['product' => $product->id]) }}"
                                                  method="post" class="btn">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
