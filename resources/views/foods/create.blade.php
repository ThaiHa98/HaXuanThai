
@extends('layouts.app')

@section('content')
    <h1>Create Food</h1>
    <form method="POST" action="/foods">
        @csrf
        <div class="form-control">
            <label for="name">name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-control">
            <label for="description">description:</label>
            <input type="text" id="description" name="description">
        </div>
        <div class="form-control">
            <label for="status">status:</label>
            <input type="text" id="status" name="status">
        </div>
        <div class="form-control">
            <label for="price">price:</label>
            <input id="price" name="price">
        </div>
        <div class="form-control">
            <label for="category_id">category_id:</label>
            <input id="category_id" name="category_id">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection

