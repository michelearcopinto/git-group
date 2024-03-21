@extends('layouts.basic')

@section('title', 'Benvenuto | Movies')

@section('main_content')

<main>
    <h2>Movies:</h2>

    <div class="cards-container">
        {{-- @foreach ($movies as $movie)
            <div class="card">

            </div>
        @endforeach --}}


        <div class="card">
            <img src="" alt="img">
            <h3>title</h3>
            <p>description</p>
        </div>
    </div>
</main>

@endsection
