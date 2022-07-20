@extends('layouts.default')

@section('content')

<section class="section3">
    <div class="cloud-top"></div>
    <div class="cloud-bottom"></div>
    <img class="char wow fadeInRight" src="img/img_knight.png" alt="" data-wow-delay="0.4s">
    <div class="section-header">
    <span class="wow headerload" data-wow-delay="1s">
        <img class="wow fadeIn" data-wow-delay='1.5s' src="img/ic_titles1.svg" alt="">
    </span>
        <h2 class="wow fadeInUp" data-wow-delay="0s">Login</h2>
        <p class="wow fadeInUp" data-wow-delay="0.2s">Recomendaciones de instalación. Descargue un cliente limpio de Lineage 2 desde el siguiente enlace, luego instale nuestro parche con reemplazo de archivo. ¡No se recomienda utilizar clientes de otros servidores!</p>
    </div>
    <div class='wrapper'>
        <div class="donate wow fadeIn" data-wow-delay="0.8s">
            <div>
                <ul class="tabs">
                    <a class='button-alt small uppercase'>Juego + parche</a>
                </ul>
                <div class="tabs-content">
                    <div>
                        @include('includes.messages')
                        <div class="donation_result_mess"></div>
                        <form name="pg_frm" name="form" method="post" action="/" >
                            <div class="form-donate">
                                <div class="text-input big">
                                    <input name="l2account" id="Users_login" type="text" class="account_field" data-platform="paygol" type="text" maxlength="16">
                                    <label for="">Usuario</label>
                                </div>
                                <div class="text-input big">
                                    <input name="l2email" class="account_field" data-platform="paygol" type="text" maxlength="60">
                                    <label for="">Contraseña</label>
                                </div>
                            </div>
                            <div>Has olvidado la contraseña?</div>
                            <div>
                                <button name="register" class='button-alt small uppercase'>Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection;
