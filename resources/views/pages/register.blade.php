@extends('layouts.default')

@section('content')
<section class="section3">
    <div class="cloud-top"></div>
    <div class="cloud-bottom"></div>
    <img class="char wow fadeInRight" src="img/img_knight.png" alt="" data-wow-delay="0.4s">
    <div class="section-header">
    <span class="wow headerload" data-wow-delay="1s">
        <img class="wow" src="img/ic_titles1.svg" alt="">
    </span>
        <h2>Registrate!</h2>
        <p>Recomendaciones de instalación. Descargue un cliente limpio de Lineage 2 desde el siguiente enlace, luego instale nuestro parche con reemplazo de archivo. ¡No se recomienda utilizar clientes de otros servidores!</p>
    </div>
    <div class='wrapper'>
        <div class="donate">
            <div>
                <ul class="tabs">
                    <a class='button-alt small uppercase'>Juego + parche</a>
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
                                    <label for="">Username</label>
                                </div>
                                <div class="text-input big">
                                    <input name="l2email" class="account_field" data-platform="paygol" type="text" maxlength="60">
                                    <label for="">Email</label>
                                </div>
                            </div>
                            <div class="form-donate">
                                <div class="text-input big">
                                    <input name="l2password1"  id="Users_password"  type="password" class="account_field" data-platform="paygol" type="text" maxlength="16">
                                    <label for="">password</label>
                                </div>
                                <div class="text-input big">
                                    <input name="l2password2" type="password" class="account_field" data-platform="paygol" type="text" maxlength="16">
                                    <label for="">Repetir password</label>
                                </div></div>
                            <br>
                            <div>
                                <button name="register" type="submit" class='button-alt small uppercase'>Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection;
