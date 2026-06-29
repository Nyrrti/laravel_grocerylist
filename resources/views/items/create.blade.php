@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="col-6 offset-3 bg-color main-container p-4">
        <div class="d-flex justify-between items-center">
            <h1 class="mb-3">Add New Item</h1>
            <a class="btn back" href="{{ route('items.index') }}">
                Back
            </a>
        </div>
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <label for="name">Name:</label>
                <input class="main-field mb-3" type="text" id="name" name="name" required>
                <label for="description">Description:</label>
                <textarea class="mb-3" id="description" name="description"></textarea>
            </div>
            <button class="btn" type="submit">Add</button>
        </form>
    </div>
@endsection