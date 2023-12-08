@extends('layouts.app') 
@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr class="th">No</tr>
            <tr class="th">title</tr>
            <tr class="th">author</tr>
            <tr class="th">year</tr>
            <tr class="th">description</tr>
            <tr class="th">option</tr>
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
                    <a href="" class="nav-link text-success">edit</a>
                    <a href="" class="nav-link text-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection