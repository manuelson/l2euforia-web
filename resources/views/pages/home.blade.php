@extends('layouts.default')

@section('content')
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



<section class="news">
    <div class="section-header">
    <span class="wow headerload" data-wow-delay="1s">
        <img class="wow fadeIn" data-wow-delay='1.5s' src="img/ic_titles1.svg" alt="">
    </span>
        <h2 class="wow fadeInUp" data-wow-delay="0s">Noticias</h2>
    </div>
    <div class='wrapper'>
        <!-- Start new --->
        <div class="new">
           <h2 class="title">Bienvenidos a L2Euforia!!</h2>
           <div class="content">
               <p class="text">
                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's s
                   tandard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                   <br/><br/>
                   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with des
                   ktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               </p>
           </div>
           <div class="credits" style="padding-top:40px">
               <span class="autor">Author: <span>Manu</span></div>
               <div class="date">15/Julio/2022</div>
           </div>
       </div>
    <!-- end new --->

    </div>
</section>

