@extends('layouts.admin')

@section('content')

<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Create Review') }}</h1>
            </div>

            <div class="col-sm-6 text-right">

                <a class="btn btn-primary" href="{{ route('reviews.index') }}"> Back</a>

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
        
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Comment:</strong>
                        <textarea class="form-control" style="height:150px" name="comment" placeholder="Comment"></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="rate form-group">
                        <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" class="rate" name="rating" value="2">
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                        <label for="star1" title="text">1 star</label>
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

                 <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Status:</strong>
                        <select name="status" class="form-control">
                            <option value="active">Active</option>
                            <option value="Inactive">In Active</option>
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