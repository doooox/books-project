@extends('layouts.master')

@section('title', 'Books')


@section('content')

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Books</h1>
      </div>
    </div>
  </section>

    @foreach ($books as $book )
        <div class="album py-5 bg-light">
            <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$book->title}}</text></svg>

                    <div class="card-body">
                    <p class="card-text">{{$book->short_description}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href=" {{route('single-book', ['id' => $book->id])}}">View</a></button>
                        </div>
                        <small class="text-muted">Updated at: {{$book->updated_at}}</small>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    @endforeach


@endsection
