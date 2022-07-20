@extends('layouts.default', ['title' => 'Recuperar contraseña'])

@section('content')
<section class="forgotpassword">
        <h2 class="sectionTitle">Has olvidado la contraseña?</h2>
    @include('includes.messages')
        <div class='wrapper' style="margin-top:80px;align-items: center;justify-content: center;display: flex;">
            <form name="forgotpassword" method="POST" action="post-forgotpassword" >
                <div class="text-input big">
                    <input name="email" class="account_field" data-platform="paygol" type="text" maxlength="60">
                    <label for="">Email</label>
                </div>
                @csrf
                <div>
                    <br/>
                    <button name="register" type="submit" class='button-alt small uppercase'>Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection;
