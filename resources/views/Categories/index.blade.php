@extends('layouts.app')

@section('content')
    <h1>Categories List</h1>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Categories</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm float-end" >
                        ADD
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td><a href="{{ route('categories.edit',$category->id) }}">Edit</a></td>
                <td>
                    <form action="{{ route('categories.destroy',$category->id) }}" method="post">
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
