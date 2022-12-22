    @extends('layouts.admin')

    @section('content')

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Show Previous Version') }}</h1>
                </div>

                <div class="col-sm-6 text-right">

                    <a class="btn btn-primary" href="{{ route('previous-versions.index') }}"> Back</a>

                </div>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Version:</strong>
                        {{ $previous_version->version }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <img height="120px" src="{{ asset('storage/uploads/image/' . $previous_version->image) }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>File:</strong>
                        <img height="120px" src="{{ asset('storage/uploads/file/' . $previous_version->file) }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Id :</strong>
                        {{ $previous_version->product_id }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Size:</strong>
                        {{ $previous_version->size }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Apk Url :</strong>
                        {{ $previous_version->apk_url }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Paly Store Url :</strong>
                        {{ $previous_version->paly_store_url }}
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Added On :</strong>
                        {{ $previous_version->added_on }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection