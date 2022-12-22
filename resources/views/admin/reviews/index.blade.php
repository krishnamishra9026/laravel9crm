@extends('layouts.admin')

@section('content')

<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Reviews') }}</h1>
            </div>

            <div class="col-sm-6 text-right">

                <a href="{{ route('reviews.create') }}" class="btn btn-danger">
                    <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                </a>

            </div>
        </div>
    </div>
</div>

<div class="content">

    <div class="container-fluid">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Rating</th>
                <th>Comment</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($reviews as $review)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $review->rating }}</td>
                <td>{{ $review->comment }}</td>
                <td>
                    <form action="{{ route('reviews.destroy',$review->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('reviews.show',$review->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('reviews.edit',$review->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $reviews->links() !!}

    </div>

</div>

@endsection