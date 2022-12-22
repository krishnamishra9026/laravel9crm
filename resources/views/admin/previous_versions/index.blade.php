@extends('layouts.admin')

@section('content')

<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Previous Version') }}</h1>
            </div>

            <div class="col-sm-6 text-right">

                <a href="{{ route('previous-versions.create') }}" class="btn btn-danger">
                    <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                </a>

            </div>
        </div>
    </div>
</div>

<div class="content">

    <div class="container-fluid">

       {{--  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif --}}

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Version</th>
                <th>Added On</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($previous_versions as $previous_version)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $previous_version->version }}</td>
                <td>{{ $previous_version->added_on }}</td>
                <td>
                    <form action="{{ route('previous-versions.destroy',$previous_version->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('previous-versions.show',$previous_version->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('previous-versions.edit',$previous_version->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $previous_versions->links() !!}

    </div>

</div>

@endsection