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
                <br/><br/>
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
                <strong>{!! trans('messages.donate_6') !!}</strong> <br/><br/>
                <strong>10 €</strong>
            </div>
            <div class="package">
                <strong>{!! trans('messages.donate_3') !!}</strong> <br/><br/>
                {!! trans('messages.token_gk') !!}
                <br/><br/>
            </div>
        </div>
        <div class='packages wrapper'>
            <p>
                {!! trans('messages.donate_5') !!}
            </p>
            <form action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="business" value="8AWX4UMAZ9T4E" />
                <input type="hidden" name="no_recurring" value="0" />
                <input type="hidden" name="no_recurring" value="0" />
                <input type="hidden" name="currency_code" value="EUR" />
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/en_ES/i/scr/pixel.gif" width="1" height="1" />
            </form>
        </div>
    </section>

@endsection;
