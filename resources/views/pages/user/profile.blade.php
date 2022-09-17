@extends('layouts.default', ['title' => 'Profile'])

@section('content')
    <section class="donate">
        <h2 class="sectionTitle">{!! trans('messages.title_characters') !!}</h2>
        <h3 class="sectionTitle">{!! trans('messages.subtitle_characters') !!} {{session()->get('username')}}</h3>
        @include('includes.messages')
        <div class='wrapper wrappFlex'>
            @foreach ($chars['message'] ?? '' as $item)
                <div class="characterProfile">
                        <div class="" style="font-size:22px">
                            <strong>{{$item['char_name']}}</strong>
                            <hr style="border:1px solid" />
                        </div>
                        <div>
                            {!! trans('messages.char_lvl') !!} <strong>{{$item['level']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_access') !!} <strong>{{$item['lastAccess']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_class') !!} <strong>{{$item['classid']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.sex') !!} <strong>{{$item['sex']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_sp') !!} <strong>{{$item['sp']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_nobless') !!} <strong>{{$item['nobless']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_pvp') !!} <strong>{{$item['pvpkills']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_pk') !!} <strong>{{$item['pkkills']}}</strong>
                        </div>
                        <div>
                            {!! trans('messages.char_karma') !!} <strong>{{$item['karma']}}</strong>
                        </div>
                        <br/>
                        <div>
                            <strong>{!! trans('messages.premium_actions') !!}</strong>
                        </div>
                        <ul>
                            @if($item['online'] == '1')
                               <li>This account are online, and premium actions are not allowed</li>
                            @endif
                            <li>
                                @if($item['nobless'] == 'no' && $item['online'] == '0')
                                    <a href="/premium?type=nobles&userId={{$item['charId']}}"> {!! trans('messages.add_nobless') !!}</a>
                                @else
                                    <span style="color:grey;text-decoration:line-through">{!! trans('messages.add_nobless') !!}</span>
                                @endif
                                <span style="float:right"><strong>10</strong> Euforia tokens</span>
                            </li>
                            <li>
                                @if($item['online'] == '0')
                                    @if($item['sex'] == 'male')
                                        <a href="/premium?type=sex&userId={{$item['charId']}}">{!! trans ('messages.change_sex_female') !!}</a>
                                    @else
                                        <a href="/premium?type=sex&userId={{$item['charId']}}">{!! trans ('messages.change_sex_male') !!}</a>
                                    @endif
                                @else
                                    @if($item['sex'] == 'male')
                                        <span style="color:grey;text-decoration:line-through">{!! trans ('messages.change_sex_female') !!}</span>
                                    @else
                                        <span style="color:grey;text-decoration:line-through">{!! trans ('messages.change_sex_male') !!}</span>
                                    @endif
                                @endif
                                <span style="float:right"><strong>5</strong> Euforia tokens</span>
                            </li>
                            <li>
                                @if($item['online'] == '0')
                                    <a href="/premium?type=name&userId={{$item['charId']}}&original_username={{$item['char_name']}}">{!! trans ('messages.change_name') !!}</a>
                                @else
                                    <span style="color:grey;text-decoration:line-through">{!! trans ('messages.change_name') !!}</span>
                                @endif
                                <span style="float:right"><strong>10</strong> Euforia tokens</span>
                            </li>
                            <!--li>
                                @if($item['online'] == '0')
                                    <a href="/premium?type=class&userId={{$item['charId']}}">Change class</a>
                                @else
                                    <span style="color:grey;text-decoration:line-through">Change class</span>
                                @endif
                                <span style="float:right"><strong>20</strong> Euforia tokens</span>
                            </li-->
                        </ul>
                        <br/><br/>
                        <div>My euforia tokens (<a href="/donate">buy more</a>): <span style="float:right"><strong>{{$item['tokens']}}</strong></span></div>
                </div>
            @endforeach
        </div>
        <div style="text-align :center;margin-top:20px">
            * <strong>No have tokens? Please visit <a href="/donate">this link</a></strong><br/>
            * <strong>Class change does not include armor or weapons</strong><br/>
            * <strong>All changes must be made with the OFFLINE account</strong>
        </div>
    </section>

@endsection;
