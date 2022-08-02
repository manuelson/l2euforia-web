<section id="home">
    <div class='wrapper'>
        @if(session('success'))
        <div class="alert alert-success">
            <h3 class='uppercase color-accent text-center wow fadeInUp' style="color: #41a129" data-wow-delay='0.3s'>{{ session('success') }}</h3>
        </div><br>
        @endif
        @if($errors->any())
        <div class="alert alert-success">
            <h3 class='uppercase color-accent text-center' style="color: #41a129" >
                @foreach ($errors->all() as $error)
                {{ $error }}
             @endforeach<h3>
        </div><br>
        @endif
        <div class="wow fadeInUp" style="margin-bottom: 40px" data-wow-delay='1.1s'>
            <div style="width:70px;height:70px;background-image: url('img/bg_titles.svg');float:left;background-size: 70px;margin-right:20px">
                <span style="position:relative;top:28px;text-align: center;left:11px;font-size:10px">
                    <strong>Game:</strong>
                    <span style="color:green">ON</span>
                </span>
            </div>
            <div style="width:70px;height:70px;background-image: url('img/bg_titles.svg');float:left;background-size: 70px;">
                    <span style="position:relative;top:28px;text-align: center;left:11px;font-size:10px">
                        <strong>Login:</strong>
                        <span style="color:green">ON</span>
                    </span>
            </div>
        </div>
        <p class="wow fadeInUp" style="margin-bottom:20px" data-wow-delay='1.1s'>
            <strong>SP:</strong> x8
            <strong>Exp:</strong> x8
            <strong>Drop:</strong> x5
        </p>
        <div class='text'>
            <img class="wow fadeInUp" src="img/img_frames_divider.svg" alt="">
            <h1 class='uppercase color-accent text-center wow fadeInUp' data-wow-delay='0.3s'>
                {!! trans('messages.chronicle') !!}
            </h1>
            <p class='text-center wow fadeInUp' data-wow-delay='0.5s'>
                {!! trans('messages.version_chronicle') !!}
            </p>
        </div>
        <div class="buttons">
            <a href="/register" class='button-alt uppercase wow fadeIn longer' data-wow-delay='2s'>&nbsp;&nbsp;
                {!! trans('messages.register_now') !!}&nbsp;&nbsp;</a>
            <a href="/download" class='button-alt uppercase wow fadeIn longer' data-wow-delay='2s'>{!! trans('messages.download_game') !!}</a>
        </div>
        <div class='timeline'>
            <ul>
                <li class='wow fadeInUp longer' data-wow-delay='0.8s'>
                    <img src='img/ic_timeline1.svg' alt=''>
                    <span>{!! trans('messages.icon_1') !!}</span>
                </li>
                <li class='wow fadeInUp longer' data-wow-delay='1.1s'>
                    <img src='img/ic_timeline2.svg' alt=''>
                    <span>{!! trans('messages.icon_2') !!}</span>
                </li>
                <li class='wow fadeInUp longer' data-wow-delay='1.4s'>
                    <img src='img/ic_timeline3.svg' alt=''>
                    <span>{!! trans('messages.icon_3') !!}</span>
                </li>
                <li class='wow fadeInUp longer' data-wow-delay='1.7s'>
                    <img src='img/ic_timeline4.svg' alt=''>
                    <span>{!! trans('messages.icon_4') !!}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class='video wow fadeIn'>
        <video src='video/main.mp4?v2' style="opacity: 0.4" autoplay="" loop="" muted=""></video>
        <div class='pattern'></div>
    </div>
</section>
