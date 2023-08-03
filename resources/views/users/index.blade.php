@extends('layouts.app')

@section('content')
    <h1>User List</h1>
{{--    <a href="{{ route('categories.create') }}" class="btn btn-info btn-lg" role="button">--}}
{{--        Create new Categories--}}
{{--    </a>--}}
{{--    <a href="{{ route('foods.index') }}" class="btn btn-info btn-lg" role="button">--}}
{{--        Goto foods.index--}}
{{--    </a>--}}
{{--    <a href="{{ route('user.create') }}" class="btn btn-info btn-lg" role="button">--}}
{{--        Create new User--}}
{{--    </a>--}}


    <div class = "col col-md-6 text-end">
        <a href="{{ route('login') }}" class="btn btn-danger" >
            logout
        </a>
        <style>
            .btn-danger{
                margin-left:60px;

            }
        </style>
</div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>User</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('user.create') }}" class="btn btn-success btn-sm float-end" >
                        ADD
                    </a>
                </div>
        <div class="card-body">
           <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
{{--            <th>password</th>--}}
            <th>Created At</th>
            <th>Updated At</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
{{--                <td>{{ $user->password }}</td>--}}
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
{{--                <td><a href="{{ route('user.edit',$category->id) }}">Edit</a></td>--}}
                <td>
                    <form action="{{ route('user.destroy',$user->id) }}" method="post">
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
