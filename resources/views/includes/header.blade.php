<div class="wrapper">
    <div>
        <a href="/"><span style="font-size:22px"><strong>L2EUFORIA</strong></span></a>
        <nav>
            <ul>
                <li><a class="menu" href='/'>{!! trans('messages.home') !!}</a></li>
                <li><a href='/donate'>{!! trans('messages.donations') !!}</a></li>
                <li><a href="/download">{!! trans('messages.downloads') !!}</a></li>
                <li><a href="/vote-us">{!! trans('messages.vote') !!}</a></li>
                <li><a href="/">{!! trans('messages.contact') !!}</a></li>
            @if(! session()->get('authenticated'))
                <li class="show-smartphone"><a href="/login">{!! trans('messages.login') !!}</a></li>
                <li class="show-smartphone"><a href="/register">{!! trans('messages.register') !!}</a></li>
                @else
                    <li class="show-smartphone"><a href="/profile">{!! trans('messages.my_profile') !!}</a></li>
                    <li class="show-smartphone"><a href="/logout">{!! trans('messages.logout') !!}</a></li>
                @endif
                @if (config('locale.status') && count(config('locale.languages')) > 1)
                    @foreach (array_keys(config('locale.languages')) as $lang)
                        @if ($lang != App::getLocale())
                            <li class="show-smartphone">
                                <a href="{!! route('lang.swap', $lang) !!}">
                                    <img src="<?= 'img/'.$lang.'.png' ?>" class="lang" />
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </nav>
    </div>
    <div class='hide-smartphone'>

        <div>
            @if(! session()->get('authenticated'))
                <ul class="topmenu">
                    <li><a href="/login">{!! trans('messages.login') !!}</a> | <a href="/register">{!! trans('messages.register') !!}</a> |
                    @if (config('locale.status') && count(config('locale.languages')) > 1)
                            @foreach (array_keys(config('locale.languages')) as $lang)
                                @if ($lang != App::getLocale())
                                    <a href="{!! route('lang.swap', $lang) !!}">
                                        <img src="<?= 'img/'.$lang.'.png' ?>" class="lang" />
                                    </a>
                                @endif
                            @endforeach
                    @endif
                </ul>
            @else
                <ul class="topmenu">
                    <li><a href="/profile">{!! trans('messages.my_profile') !!}</a> |  <a href="/logout">{!! trans('messages.logout') !!}</a></li>
                    @if (config('locale.status') && count(config('locale.languages')) > 1)
                        @foreach (array_keys(config('locale.languages')) as $lang)
                            @if ($lang != App::getLocale())
                                <a href="{!! route('lang.swap', $lang) !!}">
                                    <img src="<?= 'img/'.$lang.'.png' ?>" class="lang" />
                                </a>
                            @endif
                        @endforeach
                    @endif
                </ul>
            @endif
        </div>
    </div>
    <div class="menu-mobile">
        <span></span>
    </div>
</div>
