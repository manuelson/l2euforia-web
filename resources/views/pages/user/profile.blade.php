@extends('layouts.default', ['title' => 'Profile'])

@section('content')
    <section class="donate">
        <h2 class="sectionTitle">Your characters</h2>
        <h3 class="sectionTitle">Account: {{session()->get('username')}}</h3>
        @include('includes.messages')
        <div class='wrapper wrappFlex'>
            @foreach ($chars['message'] ?? '' as $item)
                <div class="characterProfile">
                        <div class="">
                            Char name: <strong>{{$item['char_name']}}</strong>
                        </div>
                        <div>
                            Char lvl: <strong>{{$item['level']}}</strong>
                        </div>
                        <div>
                            Class: <strong>{{$item['classid']}}</strong>
                        </div>
                        <div>
                            Sp: <strong>{{$item['sp']}}</strong>
                        </div>
                        <div>
                            Nobless: <strong>{{$item['nobless']}}</strong>
                        </div>
                        <div>
                            Pvp: <strong>{{$item['pvpkills']}}</strong>
                        </div>
                        <div>
                            Pk: <strong>{{$item['pkkills']}}</strong>
                        </div>
                        <div>
                            karma: <strong>{{$item['karma']}}</strong>
                        </div>
                </div>
            @endforeach

        </div>

    </section>

@endsection;
