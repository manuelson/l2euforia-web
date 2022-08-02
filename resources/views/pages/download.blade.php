@extends('layouts.default', ['title' => 'Donaciones'])

@section('content')
    <section class="donate">
        <h2 class="sectionTitle">{!! trans('messages.download_now') !!}</h2>
        @include('includes.messages')
        <div class='wrapper wrappFlex'>
            <p class="donatetext">
                {!! trans('messages.download_head') !!}
            </p>

        </div>
        <div class='packages'>
            <a href="https://drive.google.com/file/d/1jLTCrfsxZyECEojccV60Iya4L_s_UGwk/view?usp=sharing" class='button-alt uppercase'>{!! trans('messages.download_game') !!}</a>
            <span style="width:20px"></span>
            <a href="https://drive.google.com/file/d/1JxSf87GppUVswehRf4SewxNZrFqokUVf/view?usp=sharing" class='button-alt uppercase'>{!! trans('messages.download_patch') !!}</a>
        </div>
        <br><br/>
        <div style="text-align: center;font-size:26px"><strong>Zip password: euforia</strong></div>


    </section>

@endsection;
