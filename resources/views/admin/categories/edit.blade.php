@extends('layouts.admin')

@section('content')


<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Edit Category') }}</h1>
            </div>

            <div class="col-sm-6 text-right">

                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>

            </div>
        </div>
    </div>
</div>

<div class="content">

    <div class="container-fluid">


        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('categories.update',$category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection