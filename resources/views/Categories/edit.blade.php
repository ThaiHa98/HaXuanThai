
@extends('layouts.app')

@section('content')
    <h1>Edit Categories</h1>
    <form method="POST" action="/categories/{{$categories->id}}">
        @csrf
        {{--        mo hoa dai khai giong token --}}
        @method('PUT')
        {{-- // update thi phai dung @method('PUT')--}}
        <div class="form-control">
            <label for="name">status:</label>
            <input type="text" id="name" name="name" value="{{$categories ->name}}">

        </div>
        <div class="form-control">
            <label for="description">status:</label>
            <input type="text" id="description" name="description" value="{{$categories ->description}}">

        </div>
        <button type="submit">Update</button>
    </form>
@endsection

