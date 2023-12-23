@extends('layouts.app') 
@section('content')

<div class="container">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    
@endif

    <div class="row justify-content-center my-3 mx-3 p-3 bg-body rounded shadow-sm ">
        <div class="col-md-12">
            <div class="card p-3 bg-secondary rounded shadow-sm my-3 mx-3">
                <div class="table-responsive p-3 bg-body rounded shadow-sm my-3 mx-3 p-3 bg-body rounded shadow-sm">
    
    <div class="card p-3 bg-secondary rounded shadow-sm">
    <h6 class="display-4 text-right">Data Repositori</h6> 
    <td><a href="{{ route('repositori.create') }}" class="btn btn-primary float-right btn-sm my-3">Create</a></td>
    </div>

    <table class="table table-striped table-bordered table-hover" id="table">
        <thead class="thead-dark text-center">
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">Title</th>
                <th class="col-md-3">Author</th>
                <th class="col-md-2">Year</th>
                <th class="col-md-4">Description</th>
                <th class="col-md-2">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($repositories as $index => $repositori)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $repositori->title }}</td>
                <td>{{ $repositori->author }}</td>
                <td>{{ $repositori->year }}</td>
                <td>{{ $repositori->description }}</td>
                <td>
                    <a href="{{ route('repositori.edit', $repositori->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('repositori.destroy', $repositori->id) }}" method="POST">
                        @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
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
</div>

@endsection