@extends('layout')
<title>Předporodní kurzy - Kurzy</title>
@section('content')
    <main class="courses">
        <section>
            <div class="container">
                <h1>Kurzy</h1>
                <h3>Co se u nás dozvíte</h3>
                @foreach($courses as $course)
                    <div class="course-card">
                        <div class="left">
                            <div class="img">
                                <a href="/kurzy/{{$course['id']}}">
                                    <img src="storage/{{$course['img']}}" alt="{{$course['title']}}">
                                </a>
                            </div>
                        </div>
                        <div class="right">
                            <a href="/kurzy/{{$course['id']}}">
                                <h2>{{$course['title']}}</h2>
                                <h3>{{$course['subtitle']}}</h3>
                            </a>
                            <p>{!! $course['perex'] !!}</p>
                            <a href="/kurzy/{{$course['id']}}">
                                <button class="blue">Dozvědět se více</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
