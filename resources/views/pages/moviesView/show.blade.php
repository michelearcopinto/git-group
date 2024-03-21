@extends('layouts.basic')

@section('title', 'Benvenuto | Single Movie')

@section('main_content')

<main>
    <div class="container">

        <div class="singCard-container">
            <img src="" alt="">
            <div class="cardBody">
                <h2>{{$movie->title}}</h2>
                <small>{{$movie->genre}}</small>
                <b>{{$movie->director}}</b>
            </div>

        </div>

    </div>

</main>

@endsection
