@extends('layouts.default')
@section('home')
<section id="home">
<div class='wrapper'>
    <div class='text'>
        <img class="wow fadeInUp" src="img/img_frames_divider.svg" alt="">
        <h1 class='uppercase color-accent text-center wow fadeInUp' data-wow-delay='0.3s'>
            Crónica High Five x8
        </h1>
        <p class='text-center wow fadeInUp' data-wow-delay='0.5s'>
            La versión clásica del juego sin modificaciones. Sin pay2win, puro disfrute.
        </p>
    </div>
    <div class="buttons">
        <a href="#startgame" class='button-alt uppercase wow fadeIn longer' data-wow-delay='2s'>&nbsp;&nbsp; Juega ahora! &nbsp;&nbsp;</a>
        <!--a href="/" class='button-alt uppercase wow fadeIn longer' data-wow-delay='2s'>Читать описание</a-->
    </div><br><br><br><br><br><br>
    <div class='timeline'>
        <ul>
            <li class='wow fadeInUp longer' data-wow-delay='0.8s'>
                <img src='img/ic_timeline1.svg' alt=''>
                <span>Eventos especiales</span>
            </li>
            <li class='wow fadeInUp longer' data-wow-delay='1.1s'>
                <img src='img/ic_timeline2.svg' alt=''>
                <span>Buffers low level</span>
            </li>
            <li class='wow fadeInUp longer' data-wow-delay='1.4s'>
                <img src='img/ic_timeline3.svg' alt=''>
                <span>Asedios semanales</span>
            </li>
            <li class='wow fadeInUp longer' data-wow-delay='1.7s'>
                <img src='img/ic_timeline4.svg' alt=''>
                <span>Olimpiadas semanales</span>
            </li>
        </ul>
    </div>
</div>
<div class='video wow fadeIn'>
    <video src='video/main.mp4?v2' style="opacity: 0.4" autoplay="" loop="" muted="" poster="img/bg_home.jpg"></video>
    <div class='pattern'></div>
</div>
</section>

<section class="section3">
    <div class="cloud-top"></div>
    <div class="cloud-bottom"></div>
    <img class="char wow fadeInRight" src="img/img_knight.png" alt="" data-wow-delay="0.4s">
    <div class="section-header">
<span class="wow headerload" data-wow-delay="1s">
<img class="wow fadeIn" data-wow-delay='1.5s' src="img/ic_titles1.svg" alt="">
</span>
        <h2 class="wow fadeInUp" data-wow-delay="0s">Registrate!</h2>
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
                        <div class="donation_result_mess"></div>
                        <form name="pg_frm" name="form" method="post" action="" >
                            <div class="form-donate">
                                <div class="text-input big">
                                    <input name="l2account" id="Users_login" type="text" class="account_field" data-platform="paygol" type="text" maxlength="16">
                                    <label for="">Nickname</label>
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
                            <div class="forminputgroup formcaptchareg">
                                <div class="g-recaptcha" data-theme="dark" data-sitekey="6Ld8Xb0dAAAAAPWdZbVuDNzbSmQZidHafhVHCNzk"></div>
                                <div class="groupinputerror formcaptchaerror"></div>
                            </div><br>
                            <div>
                                <button name="register" class='button-alt small uppercase'>Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
