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
                <strong>{!! trans('messages.donate_1') !!}</strong> <br/><br/>
                {!! trans('messages.donate_sex') !!}<br/><br/>
                <strong>5 €</strong>
            </div>

            <div class="package">
                <strong>{!! trans('messages.donate_2') !!}</strong>  <br/><br/>
                <strong>5 €</strong>
            </div>
            <div class="package">
                <strong>{!! trans('messages.donate_4') !!}</strong> <br/><br/>
                <strong>10 €</strong>
            </div>
            <div class="package">
                <strong>{!! trans('messages.donate_3') !!}</strong> <br/><br/>
                {!! trans('messages.token_gk') !!}
                <br/><br/>
                <strong><input type="text" name="qty" class="qtyToken"/> €</strong>
            </div>
        </div>
        <div class='packages wrapper'>
            <p>
                {!! trans('messages.donate_notfound') !!}
            </p>
        </div>
    </section>

@endsection;
