<section id="home">
    <div class='wrapper'>
        @if(session('success'))
        <div class="alert alert-success">
            <h3 class='uppercase color-accent text-center wow fadeInUp' style="color: #41a129" data-wow-delay='0.3s'>{{ session('success') }}</h3>
        </div><br>
        @endif
        @if($errors->any())
        <div class="alert alert-success">
            <h3 class='uppercase color-accent text-center wow fadeInUp' style="color: #41a129" data-wow-delay='0.3s'>@foreach ($errors->all() as $error)
                {{ $error }}
             @endforeach<h3>
        </div><br>
        @endif
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
