@extends('layout.app')

@section('content')
        <h1 class="mb-0">Detail Book</h1>
    <hr/>
    <div class="row mb-3">
        <div class="col mb-3">
          <label class="form-label">Book Name</label>
          <input type="text" name="name" class="form-control" placeholder="Book Name"  value="{{ $book->name }}" readonly >
        </div>
        <div class="col mb-3">
          <label class="form-label">Author</label>
          <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $book->author }}" readonly >
        </div>
      </div>
      <div class="row mb-3">
        <div class="col mb-3">
          <label class="form-label">Year</label>
          <input type="text" name="year" class="form-control" placeholder="Year" value="{{ $book->year }}" readonly >
        </div>
        <div class="col mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" name="description" placeholder="Description"  readonly>{{ $book->description }}</textarea>
        </div>
        <div class="row mb-3">
          <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created at" value="{{ $book->created_at }}" readonly >
          </div>
          <div class="col mb-3">
          <label class="form-label"> Updated At</label>
              <input type="text" name="updated_at" class="form-control" placeholder="Update at" value="{{ $book->updated_at }}" readonly >
          </div>
        </div> 
    @endsection