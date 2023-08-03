
@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>
    <form method="POST" action="/user/{{$user->id}}">
{{--        @csrf--}}
        {{--        mo hoa dai khai giong token --}}
        @method('PUT')
        {{-- // update thi phai dung @method('PUT')--}}
        <div class="form-control">
            <label for="name">name:</label>
            <input type="text" id="name" name="name" value="{{$user ->name}}">

        </div>
        <div class="form-control">
            <label for="description">password:</label>
            <input type="text" id="description" name="description" value="{{$user ->password}}">

        </div>
        <div class="form-control">
            <label for="description">email:</label>
            <input type="text" id="description" name="description" value="{{$user ->email}}">

        </div>
        <button type="submit">Update</button>
    </form>
@endsection

