@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Show product') }}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <tr>
                                <td>{{ __('ID') }}:</td>
                                <td>{{ $product->id }}</td>
                            </tr>

                            <tr>
                                <td>{{ __('Title') }}:</td>
                                <td>{{ $product->title }}</td>
                            </tr>

                            <tr>
                                <td>{{ __('Cover') }}:</td>
                                <td>
                                    @if ($product->image)
                                        <img src="{{ Storage::url($product->image) }}" width="100">
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td>{{ __('Description') }}:</td>
                                <td>{{ $product->description }}</td>
                            </tr>

                            <tr>
                                <td>{{ __('Price') }}:</td>
                                <td>{{ $product->price }} EUR</td>
                            </tr>

                            <tr>
                                <td>{{ __('Quantity') }}:</td>
                                <td>{{ $product->quantity }}</td>
                            </tr>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-success" href="javascript:history.back()">Done</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
