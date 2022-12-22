@extends('layouts.admin')

@section('content')

<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Creat Previous Version') }}</h1>
            </div>

            <div class="col-sm-6 text-right">

                <a class="btn btn-primary" href="{{ route('previous-versions.index') }}"> Back</a>

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
        
        <form action="{{ route('previous-versions.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Version:</strong>
                        <input type="text" name="version" class="form-control" placeholder="Version">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Added On:</strong>
                        <input type="date" name="added_on" class="form-control" placeholder="Added On">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control" placeholder="Image">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Size:</strong>
                        <input type="number" name="size" class="form-control" placeholder="Size">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Apk Url:</strong>
                        <input type="text" name="apk_url" class="form-control" placeholder="Apk Url">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Apk File:</strong>
                        <input type="file" name="file" class="form-control" placeholder="Apk File">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Play Store Url:</strong>
                        <input type="text" name="play_store_url" class="form-control" placeholder="Play Store Url">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Product:</strong>
                        <select class="selectpicker des form-control" name="product_id" >
                            <option value="">Select product</option>
                            @foreach($products as $key => $product)
                                <option value="{{ $key }}">{{$product}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            
        </form>
    </div>
</div>
@endsection