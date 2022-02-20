@extends('layout')
@section('title')
    <title>Předporodní kurzy - Hradec Králové - {{$article['title']}}</title>
    <meta name="description" content="{{$article['perex']}}">
@endsection
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
        @if(request()->route()->getName() == 'articles' && request()->route()->parameters['id'] == 1)
            <section class="about-detail">
                <div class="container">
                    <div class="row">
                        @foreach($employers as $e)
                            <div class="col-md-6">
                                <div class="lector-card">
                                    <div class="img">
                                        <img src="storage/{{$e['img']}}" alt="{{$e['name']}}">
                                    </div>
                                    <h4>{{$e['name']}}</h4>
                                    <p>{!!$e['introduction']!!}</p>
                                    <strong>Kurzy</strong>
                                    {!! $e['courses']!!}
                                    <strong>Kontakt</strong>
                                    <a href="tel:{{$e['telephone']}}">{{$e['telephone']}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection
