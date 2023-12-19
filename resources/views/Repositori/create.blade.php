@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title text-capitalize">Form Create</h4>
        </div>  
        <div class="card-body">
          <form action="{{route('repositori.store')}}" method="post">
            @csrf

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror" 
              value="{{ old('title') }}">
                
              @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            
            </div>

            <div class="form-group">
              <label for="author" class="text-capitalize">author</label>
              <input type="text" name="author" id="" class="form-control @error('author') is-invalid @enderror" 
              value="{{ old('author') }}">
              @error('author')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="" class="text-capitalize">years</label>
              <input type="string" name="year" id="" class="form-control @error('year') is-invalid @enderror"
              value="{{ old('year') }}">
              @error('year')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="" class="text-capitalize">deskripsi</label>
              <textarea name="description" id="" cols="30" rows="10" 
              class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"></textarea>
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <a href="{{ route('repositori.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary text-capitalize">submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection