@extends('layouts.default', ['title' => 'Registro'])

@section('content')
<section class="section3">
    <div class="cloud-top"></div>
    <div class="cloud-bottom"></div>
    <img class="char wow fadeInRight" src="img/img_knight.png" alt="" data-wow-delay="0.4s">
    <div class="section-header">
    <span class="wow headerload" data-wow-delay="1s">
        <img class="wow" src="img/ic_titles1.svg" alt="">
    </span>
        <h2>{!! trans('messages.register_now') !!} </h2>
        <p>{!! trans('messages.register_head') !!}</p>
    </div>
    <div class='wrapper'>
        <div class="donate">
            <div>
                <ul class="tabs">
                    <a class='button-alt small uppercase' href="/download">{!! trans('messages.game_patch') !!}</a>
                </ul>
                <div class="tabs-content">
                    <div>
                        @include('includes.messages')
                        <div class="donation_result_mess"></div>
                        <form name="pg_frm" name="form" method="POST" action="post-registration" >
                            {{ csrf_field() }}
                            <div class="form-donate">
                                <div class="text-input big">
                                    <input name="l2account" id="Users_login" type="text" class="account_field" data-platform="paygol" type="text" maxlength="16">
                                    <label for="">{!! trans('messages.username') !!}</label>
                                </div>
                                <div class="text-input big">
                                    <input name="l2email" class="account_field" data-platform="paygol" type="text" maxlength="60">
                                    <label for="">{!! trans('messages.email') !!}</label>
                                </div>
                            </div>
                            <div class="form-donate">
                                <div class="text-input big">
                                    <input name="l2password1"  id="Users_password"  type="password" class="account_field" data-platform="paygol" type="text" maxlength="16">
                                    <label for="">{!! trans('messages.password') !!}</label>
                                </div>
                                <div class="text-input big">
                                    <input name="l2password2" type="password" class="account_field" data-platform="paygol" type="text" maxlength="16">
                                    <label for="">{!! trans('messages.repeat_password') !!}</label>
                                </div></div>
                            <br>
                            <div>
                                <button name="register" type="submit" class='button-alt small uppercase'>{!! trans('messages.send') !!}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection;
