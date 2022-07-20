@extends('layouts.default')

@section('content')
<section class="forgotpassword">
        <h2 class="sectionTitle">Recupera tu contraseña</h2>
    @include('includes.messages')
        <div class='wrapper' style="margin-top:80px;align-items: center;justify-content: center;display: flex;">
            <form name="forgotpassword" method="POST" action="post-recoverypassword" >
                <div class="text-input big" style="width:200px">
                    <input name="password" class="account_field" data-platform="paygol" type="password" maxlength="60">
                    <label for="">Nueva contraseña</label>
                </div>
                <input type="hidden" name="tokenId" value="{{ app('request')->input('tokenId') }}" />
                <div class="text-input big" style="width:200px">
                    <input type="password" name="repeatpassword" class="account_field" data-platform="paygol" maxlength="60">
                    <label for="">Repetir Contraseña</label>
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
