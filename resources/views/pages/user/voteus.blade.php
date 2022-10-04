
@extends('layouts.default', ['title' => 'Donaciones'])

@section('content')
    <section class="donate">
        <h2 class="sectionTitle">{!! trans('messages.donate_title') !!}</h2>
        @include('includes.messages')
        <div class='wrapper wrappFlex'>
            <p class="donatetext">
                {!! trans('messages.vote_message') !!}
            </p>

        </div>
        <div class='packages wrapper'>
            <a href="https://vgw.hopzone.net/site/vote/105145/1"><img src="https://vgw.hopzone.net/assets/img/banners/vote_banners/simple_banner_3.png" alt="Vote our sever on HopZone.Net - top l2 servers"></a>
        </div>
        <div class='packages wrapper'>
            <a href="https://l2topzone.com/vote/id/18367"  target="_blank" title="l2topzone" ><img src="https://l2topzone.com/vb/l2topzone-Lineage2-vote-banner-small-1.png" alt="l2topzone.com" border="0"></a>
        </div>
        <div class='packages wrapper'>
            <a href="https://l2top.co/vote/server/L2Euforia" target="_blank"><img src="https://l2top.co/img/banners/105x48.png" alt="Vote for L2Euforia in L2Top.CO" border="0"></a>
        </div>
        <div class='packages wrapper'>
            <a href='https://www.top100arena.com/category/lineage2?vote=99374' title='L2 Euforia'><img src='https://www.top100arena.com/rankbadge/99374' alt='Lineage 2 private server'></a>
        </div>
        <div class='packages wrapper'>
        <a href="https://l2.topgameserver.net/lineage/voting/402/L2 euforia" target="_blank" id="edG92q90cLMw0264b6341"><div class="img-vote-server" style="border-radius: 5px; padding: 3px;width:140px;height: 70px;"><img src="https://i.imgur.com/IScfyIw.png" alt="Lineage 2 Servers -l2.topgameserver.net" title="l2.topgameserver.net - lineage 2" width="140" height="70"></div></a>
        </div>
    </section>

@endsection;
