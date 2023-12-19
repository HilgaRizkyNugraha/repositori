@extends('layouts.app')
@section("content")

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-capitalize">form edit</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('repositori.update', $repositori->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" class="form-control" value="{{ $repositori->title }}">
                        </div>
                        <div class="form-group">
                            <label for="author">Author:</label>
                            <input type="text" name="author" class="form-control" value="{{ $repositori->author }}">
                        </div>
                        <div class="form-group">
                            <label for="year">Year:</label>
                            <input type="text" name="year" class="form-control" value="{{ $repositori->year }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" class="form-control">{{ $repositori->description }}</textarea>
                        </div>
                        <a href="{{ route('repositori.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection