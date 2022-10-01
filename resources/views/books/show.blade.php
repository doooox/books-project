@extends('layouts.master')

@section('title', $book->title)


@section('content')

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{$book->title}}</h1>
                <small class="card-text">Written by {{$book->author}} </small>
            </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                <div class="card shadow-sm">

                    <div class="card-body">

                    <p class="card-text">{{$book->long_description}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">

                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/">Back</a></button>
                        </div>
                        <small class="text-muted">Updated at: {{$book->updated_at}}</small>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>




@endsection
