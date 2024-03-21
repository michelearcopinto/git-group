@extends('layouts.basic')

@section('title', 'Benvenuto | Movies')

@section('main_content')

<main>
    <div class="container">
        <h2>Movies:</h2>

        <div class="cards-container">

            @foreach ( $movies as $movie )
            <div class="card">
                <img src="" alt="img">
                <div class="card-body">
                    <h3>{{$movie->title}}</h3>
                    <small>{{$movie->genre}}</small>
                </div>
            </div>
            @endforeach


        </div>
    </div>

</main>

@endsection
