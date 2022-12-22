@extends('layouts.admin')

@section('content')

<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Show Category') }}</h1>
            </div>

            <div class="col-sm-6 text-right">

                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>

            </div>
        </div>
    </div>
</div>

<div class="content">

    <div class="container-fluid">
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $category->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection