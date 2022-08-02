@extends('layouts.default', ['title' => 'Donaciones'])

@section('content')
    <section class="donate">
        <h2 class="sectionTitle">{!! trans('messages.download_now') !!}</h2>
        @include('includes.messages')
        <div class='wrapper wrappFlex'>
            <p class="donatetext">
                {!! trans('messages.download_head') !!}
            </p>

        </div>
        <div class='packages'>
            <a href="/files/game.rar" class='button-alt uppercase'>{!! trans('messages.download_game') !!}</a>
            <span style="width:20px"></span>
            <a href="https://drive.google.com/file/d/1fhAArGt5aJ3g3VqNG-lkhFcWk8k1jrCh/view?usp=sharing" class='button-alt uppercase'>{!! trans('messages.download_patch') !!}</a>
        </div>

    </section>

@endsection;
