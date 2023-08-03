

@extends('layouts.app')

@section('content')
    <h1>Create Categories</h1>
    <form method="POST" action="/categories">
        @csrf
        <div class="form-control">
            <label for="name">name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-control">
            <label for="description">description:</label>
            <input type="text" id="description" name="description">
        </div>
            <button type="submit">Save</button>
    </form>
@endsection


