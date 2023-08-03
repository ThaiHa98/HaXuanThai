
@extends('layouts.app')

@section('content')
    <h1>Edit Food</h1>
    <form method="POST" action="/foods/{{$foods->id}}">
        @csrf
{{--        mo hoa dai khai giong token --}}
        @method('PUT')
{{-- // update thi phai dung @method('PUT')--}}
        <div class="form-control">
            <label for="name">status:</label>
            <input type="text" id="name" name="name" value="{{$foods ->name}}">

        </div>
        <div class="form-control">
            <label for="description">status:</label>
            <input type="text" id="description" name="description" value="{{$foods ->description}}">

        </div>
        <div class="form-control">
            <label for="status">status:</label>
            <input type="text" id="status" name="status" value="{{$foods ->status}}">

        </div>
        <div class="form-control">
            <label for="price">price:</label>
            <input type="text" id="price" name="price" value="{{$foods ->price}}">
        </div>
        <div class="form-control">
            <label for="category_id">category_id:</label>
            <input type="text" id="category_id" name="category_id" value="{{$foods ->category_id}}">
        </div>

        <button type="submit">Update</button>
    </form>
@endsection

