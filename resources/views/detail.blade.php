@extends('layout')
@section('content')
    <main class="detail">
        <section>
            <div class="container">
                <h1>{{$article['title']}}</h1>
                <h3>{{$article['subtitle']}}</h3>
                <div class="article">
                    {!! $article['text'] !!}
                </div>
            </div>
        </section>
    </main>
@endsection
