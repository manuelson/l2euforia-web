@extends('layouts.default', ['title' => 'Recuperar contraseña'])

@section('content')
<section class="forgotpassword">
        <h2 class="sectionTitle">{!! trans('messages.forgotpassword_title') !!}</h2>
    @include('includes.messages')
        <div class='wrapper' style="margin-top:80px;align-items: center;justify-content: center;display: flex;">
            <form name="forgotpassword" method="POST" action="post-forgotpassword" >
                <div class="text-input big">
                    <input name="email" class="account_field" data-platform="paygol" type="text" maxlength="60">
                    <label for="">{!! trans('messages.email') !!}</label>
                </div>
                @csrf
                <div>
                    <br/>
                    <button name="register" type="submit" class='button-alt small uppercase'>{!! trans('messages.send') !!}</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection;
