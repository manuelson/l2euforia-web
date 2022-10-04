@extends('layouts.default', ['title' => 'Rules'])

@section('content')
    <section class="login">
        <h2 class="sectionTitle">{!! trans('messages.rules') !!}</h2>
        @include('includes.messages')
        <div class='wrapper'>
                <div class='wrapper wrappFlex'>
                    01. Treat members of the administration and players with the utmost respect. Any lack of respect will be punished.
                    <br/><br/>
                    02. No impersonation of any member of the administration is allowed.
                    <br/><br/>
                    03. No outside spamming
                    <br/><br/>
                    04. Prohibited to use programs (bots) on our server. If a player uses automatic macros and a GM talks to him and he is not answered in a time frame, this will be considered as using bots and his character will be banned for life.
                    <br/><br/>
                    05. Never request levels, items, adena, teleportation or any benefit from any member of the administration.
                    <br/><br/>
                    06.  Your account is personal and non-transferable, never give your password to anyone else. Any loss/subtraction of items from your account will not be replaced. You are responsible for the security of your passwords.
                    <br/><br/>
                    07. Any in-game action (exploit, cheats) that the administration considers may be punished.
                    <br/><br/>
                    08. You are allowed to connect up to 4 characters at the same time per person with freedom to use them as you wish except for olympics where you can only play with 1 character at the same time. Having more than 1 PC does not give you the right to connect more accounts, only use main characters.
                    <br/><br/>
                    09. It is forbidden to manipulate the auction process so that the CH goes to a specific person.
                    <br/><br/>
                    10. Possession of a CH/Castle by an inactive or secondary clan is forbidden.
                    <br/><br/>
                    11. Olympics<br>
                    - It is forbidden to fill the inventory or change to a sub to force the system to cancel a fight.<br>
                    - It is forbidden to unblock while in the stadium.<br>
                    - Forbidden to use VPN's or similar.<br>
                    <br><br>
                    12. PVP (Player vs. Player)<br>
                    - No PK in starting cities (including Gludin and Gludio).
                </div>
            </form>
        </div>
        </div>
    </section>

@endsection;
