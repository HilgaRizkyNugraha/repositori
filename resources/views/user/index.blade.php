@extends('layouts.App')
@section('content')
    <div class="container">
        <h1>Halo {{ $myName }}</h1>


        @if ($usia > 25)
        <h1>Sudah Dewasa</h1>
        @else 
        <h1>belum Dewasa</h1>
        @endif

        @foreach ($titles as $title)
        <h1>{{ $title }}</h1>
        @endforeach


    </div>
@endsection