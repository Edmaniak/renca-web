@extends('layout')
@section('content')
    <div class="top">
        <img id="cloud-1" class="cloud xs" src="img/cloud.svg" alt="">
        <img id="cloud-2" class="cloud sm" src="img/cloud.svg" alt="">
        <img id="cloud-3" class="cloud md" src="img/cloud.svg" alt="">
        <div class="container">
            <div class="title">
                <h1>Předporodní kurzy</h1>
                <h2>Lorem ipsum dolor sit.</h2>
                <button>Dozvědět se více</button>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FFFFFF" fill-opacity="1"
                  d="M0,128L60,112C120,96,240,64,360,74.7C480,85,600,139,720,170.7C840,203,960,213,1080,202.7C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
        <img class="hk" src="img/hk.png" alt="">
    </div>
    <section class="about">
        <div class="container">
            <h2>{{$about['title']}}</h2>
            <h3>{{$about['subtitle']}}</h3>
            <p>{!! $about['perex'] !!}</p>
        </div>
    </section>
    <section class="courses">
        <svg class="line" viewBox="35.754 120.158 731.008 60.503" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <path style="stroke: #dcb8b2; fill: none; stroke-dasharray: 10px;"
                  d="M 35.754 175.698 C 35.754 175.698 82.047 133.582 237.433 133.539 C 392.819 133.496 586.891 213.896 766.762 136.749"></path>
        </svg>
        <svg class="line line-2" viewBox="35.754 120.158 731.008 60.503" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <path style="stroke: #dcb8b2; fill: none; stroke-dasharray: 10px;"
                  d="M 35.754 175.698 C 35.754 175.698 82.047 133.582 237.433 133.539 C 392.819 133.496 586.891 213.896 766.762 136.749"></path>
        </svg>
        <div class="container">
            <h2>Nabídka kurzů</h2>
            <h3>a jejich ceny</h3>
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-md-{{12 / count($courses)}}">
                        <div class="course">
                            <a href="/kurzy/{{$course['id']}}">
                                @if ($course['icon'])
                                    <i class="{{$course['icon']}}"></i>
                                @else
                                    <i class="fas fa-baby"></i>
                                @endif
                            </a>
                            <a href="/kurzy/{{$course['id']}}">
                                <h4>{{$course['title']}}</h4>
                            </a>
                            <p>{!! $course['perex'] !!}</p>
                            <span class="price">{{$course['price']}},- Kč</span>
                            <a href="/kurzy/{{$course['id']}}">
                                <button class="blue">Více</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="coop">
        <div class="container">
            <h2>Spolupracujeme</h2>
            <h3>s dalšími odborníky</h3>
            @foreach($cooperations as $coop)
                <div class="coop-person">
                    <div class="img">
                        <a href="/spoluprace/{{$coop['id']}}">
                            @if(!$coop['img'])
                                <img src="img/img.png" alt="{{$coop['name']}}">
                            @else
                                <img src="{{$coop['img']}}" alt="{{$coop['name']}}">
                            @endif
                        </a>
                    </div>
                    <div>
                        <a href="/spoluprace/{{$coop['id']}}">
                            <h4 class="title">{{$coop['name']}}</h4>
                        </a>
                        <span>{{$coop['position']}}</span>
                        <p>{!! $coop['perex'] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="contact-form"></div>
@endsection
