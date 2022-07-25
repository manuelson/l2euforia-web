@extends('layouts.default', ['title' => 'Home'])

@section('content')

@include('includes.banner')

<section class="news">
    <div class="section-header">
    <span class="wow headerload" data-wow-delay="1s">
        <img class="wow fadeIn" data-wow-delay='1.5s' src="img/ic_titles1.svg" alt="">
    </span>
        <h2 class="wow fadeInUp" data-wow-delay="0s">{!! trans('messages.news') !!}</h2>
    </div>
    <div class='wrapper' style="height:500px">
        <div class="discord" style="float:left">
            <iframe class="hide-smartphone" src="https://discord.com/widget?id=993161440070479953&theme=dark" width="250" height="400" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>

        <div class="news">
            @foreach ($message['data'] as $new)
                <div class="new">
                    <h2 class="title">{{$new['title']}}</h2>
                    <div class="content">
                        <p class="text">
                            {{!!$new['new']!!}}
                        </p>
                    </div>
                    <div class="credits" style="padding-top:40px">
                        <div class="autor">Author: <span>{{$new['username']}}</span></div>
                        <div class="date">{{$new['created_at']}}</div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

@endsection;
