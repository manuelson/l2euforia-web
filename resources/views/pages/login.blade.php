@extends('layouts.default', ['title' => 'Login'])

@section('content')
    <section class="login">
        <h2 class="sectionTitle">{!! trans('messages.auth') !!}</h2>
        @include('includes.messages')
        <div class='wrapper' style="margin-top:80px;align-items: center;justify-content: center;display: flex;">
            <form name="login" method="POST" action="post-login" >
                <div class="text-input big">
                    <input name="username" class="account_field" data-platform="paygol" type="text" maxlength="60">
                    <label for="">{!! trans('messages.username') !!}</label>
                </div>
                <div class="text-input big" style="width:200px">
                    <input type="password" name="password" class="account_field" data-platform="paygol" maxlength="60">
                    <label for="">{!! trans('messages.password') !!}</label>
                </div>
                @csrf
                <div>
                    <br/><br/>
                    <a href="/forgotpassword">{!! trans('messages.forgot_password') !!}</a>

                    <br/><br/>
                    <button name="register" type="submit" class='button-alt small uppercase'>{!! trans('messages.send') !!}</button>
                </div>
            </form>
        </div>
        </div>
    </section>

@endsection;
