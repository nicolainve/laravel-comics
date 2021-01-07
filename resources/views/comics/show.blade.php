@extends('layouts.main')

@section('content')
    <main class="comic-detail">
        <section class="general-hero">
            <div class="container">
                <img src="{{ asset('images/cover-home.jpg') }}" alt="Teen Titans Go">
            </div>
        </section>

        <section class="comics">
            <div class="container">
                <h1>{{ $comic['title'] }}</h1>
                <div class="price">{{ $comic['price'] }}</div>
                <div class="text">{!! $comic['body'] !!}</div>
            </div>
        </section>
    </main>
@endsection