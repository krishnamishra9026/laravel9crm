@extends('layouts.admin')

@section('content')


<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Edit Products') }}</h1>
            </div>

            <div class="col-sm-6 text-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

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

        <form action="{{ route('products.update',$product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Slug:</strong>
                        <input type="text" name="slug" value="{{ $product->slug }}" class="form-control" placeholder="Slug">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <textarea class="form-control" style="height:80px" name="description" placeholder="Description">{{ $product->description }}</textarea>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Features:</strong>
                        <textarea class="form-control" style="height:80px" name="features" placeholder="Features">{{ $product->features }}</textarea>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Uploaded By:</strong>
                        <input type="text" name="uploaded_by" value="{{ $product->uploaded_by }}" class="form-control" placeholder="Uploaded By">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Updated On:</strong>
                        <input type="date" name="updated_on" value="{{ $product->updated_on }}" class="form-control" placeholder="Updated On">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Requires Android:</strong>
                        <input type="text" name="requires_android" value="{{ $product->requires_android }}" class="form-control" placeholder="Requires Android">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control" placeholder="Image">
                        <img height="80px" src="{{ asset('storage/uploads/image/' . $product->image) }}">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Meta Title:</strong>
                        <input type="text" name="meta_title" value="{{ $product->meta_title }}" class="form-control" placeholder="Meta Title">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Meta Description:</strong>
                        <input type="text" name="meta_description" value="{{ $product->meta_description }}" class="form-control" placeholder="Meta Description">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Tags:</strong>
                        <input type="text" name="tags" value="{{ $product->tags }}" class="form-control" placeholder="Tags">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Version:</strong>
                        <input type="text" name="version" value="{{ $product->version }}" class="form-control" placeholder="Version">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Size:</strong>
                        <input type="text" name="size" value="{{ $product->size }}" class="form-control" placeholder="Size">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Apk Url:</strong>
                        <input type="text" name="apk_url" value="{{ $product->apk_url }}" class="form-control" placeholder="Apk Url">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Apk File:</strong>
                        <input type="file" name="file" class="form-control" placeholder="Apk File">
                        <img height="80px" src="{{ asset('storage/uploads/file/' . $product->file) }}">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Play Store Url:</strong>
                        <input type="text" name="play_store_url" value="{{ $product->play_store_url }}" class="form-control" placeholder="Play Store Url">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Product:</strong>
                        <select class="selectpicker des form-control" name="category_id" >
                            <option value="">Select category</option>
                            @foreach($categories as $key => $category)
                                <option @if($product->category_id == $key) selected @endif value="{{ $key }}">{{$category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                 <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Status:</strong>
                        <select name="status" class="form-control">
                            <option @if($product->status == 'active') selected @endif value="active">Active</option>
                            <option @if($product->status == 'Inactive') selected @endif value="Inactive">In Active</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-xs-6 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection