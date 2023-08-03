@extends('layouts.app')

@section('content')
    <h1>Foods List</h1>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Food</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('user.create') }}" class="btn btn-success btn-sm float-end" >
                        ADD
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>ID</th>
                            <th>description</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>category_id</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($foods as $food)
                        <tr>
                            <td>{{ $food->id }}</td>
                            <td>{{ $food->name }}</td>
                            <td>{{ $food->description }}</td>
                            <td>{{ $food->status }}</td>
                            <td>{{ $food->price }}</td>
                            <td>{{ $food->created_at }}</td>
                            <td>{{ $food->updated_at }}</td>
                            <td>{{ $food->category_id }}</td>
                            <td><a href="{{ route('foods.edit', $food->id) }}">Edit</a></td>
                            <td>
                                <form action="{{ route('foods.destroy', $food->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
