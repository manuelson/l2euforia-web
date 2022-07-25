@extends('layouts.default', ['title' => 'Home'])

@section('content')

@include('includes.banner')

<section class="news">
    <div class="section-header">
    <span class="wow headerload" data-wow-delay="1s">
        <img class="wow fadeIn" data-wow-delay='1.5s' src="img/ic_titles1.svg" alt="">
    </span>
        <h2 class="wow fadeInUp" data-wow-delay="0s">{!! trans('messages.news') !!}</h2>
    </div>
    <div class='wrapper' style="height:500px">
        <div class="discord" style="float:left">
            <iframe class="hide-smartphone" src="https://discord.com/widget?id=993161440070479953&theme=dark" width="250" height="400" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
        <div class="news">
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
                   <div class="autor">Author: <span>Manu</span></div>
                   <div class="date">15/Julio/2022</div>
               </div>
           </div>
            <!-- end new --->

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
                    <div class="autor">Author: <span>Manu</span></div>
                    <div class="date">15/Julio/2022</div>
                </div>
            </div>
            <!-- end new --->

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
                    <div class="autor">Author: <span>Manu</span></div>
                    <div class="date">15/Julio/2022</div>
                </div>
            </div>
            <!-- end new --->

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
                    <div class="autor">Author: <span>Manu</span></div>
                    <div class="date">15/Julio/2022</div>
                </div>
            </div>
            <!-- end new --->

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
                    <div class="autor">Author: <span>Manu</span></div>
                    <div class="date">15/Julio/2022</div>
                </div>
            </div>
            <!-- end new --->


        </div>

    </div>
</section>

@endsection;
