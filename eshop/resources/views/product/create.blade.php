@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('New product') }}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}:</label>
                                <input class="form-control" type="text" name="title" max="50" value="" placeholder="{{ __('Title') }}">
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('Description') }}:</label>
                                <textarea class="form-control" name="description" placeholder="{{ __('Decription') }}"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">{{ __('Price') }}:</label>
                                <input class="form-control" type="number" name="price" min="0" step="0.01" value="" placeholder="{{ __('Price') }}">
                            </div>

                            <div class="form-group">
                                <label for="quantity">{{ __('Quantity') }}:</label>
                                <input class="form-control" type="number" name="quantity" min="0" value="" placeholder="{{ __('Quantity') }}">
                            </div>

                            <div class="form-group">
                                <label for="image">{{ __('Cover') }}:</label>
                                <input class="form-control" type="file" name="image" value="">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="save_product" value="Save">
                                <a class="btn btn-secondary" href="javascript:history.back()">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
