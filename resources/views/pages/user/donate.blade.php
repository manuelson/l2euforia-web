@extends('layouts.default', ['title' => 'Donaciones'])

@section('content')
    <section class="donate">
        <h2 class="sectionTitle">{!! trans('messages.donate_title') !!}</h2>
        @include('includes.messages')
        <div class='wrapper wrappFlex'>
            <p class="donatetext">
                {!! trans('messages.donate_text') !!}
            </p>

        </div>
        <div class='packages'>

            <div class="package">
                {!! trans('messages.donate_1') !!} <br/><br/>
                <strong>5 €</strong>
            </div>

            <div class="package">
                {!! trans('messages.donate_2') !!}  <br/><br/>
                <strong>5 €</strong>
            </div>
            <div class="package">
                {!! trans('messages.donate_3') !!} <br/><br/>
                <strong>5 €</strong>
            </div>
            <div class="package">
                {!! trans('messages.donate_4') !!} <br/><br/>
                <strong>10 €</strong>
            </div>
        </div>
        <div class='packages wrapper'>
            <p>
                {!! trans('messages.donate_notfound') !!}
            </p>
        </div>
    </section>

@endsection;
