@extends('layouts.default', ['title' => 'Profile'])

@section('content')
    <section class="donate">
        <h2 class="sectionTitle">{!! trans('messages.title_characters') !!}</h2>
        <h3 class="sectionTitle">{!! trans('messages.subtitle_characters') !!} {{session()->get('username')}}</h3>
        @include('includes.messages')
        <div class='wrapper wrappFlex'>
            @foreach ($chars['message'] ?? '' as $item)
                <div class="characterProfile">
                        <div class="">
                            {!! trans('messages.char_name') !!} <strong>{{$item['char_name']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_lvl') !!} <strong>{{$item['level']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_class') !!} <strong>{{$item['classid']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_sp') !!} <strong>{{$item['sp']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_nobless') !!} <strong>{{$item['nobless']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_pvp') !!} <strong>{{$item['pvpkills']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_pk') !!} <strong>{{$item['pkkills']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_karma') !!} <strong>{{$item['karma']}}</strong>
                        </div>
                </div>
            @endforeach

        </div>

    </section>

@endsection;
