@extends('layouts.default', ['title' => 'Profile'])

@section('content')
    <section class="donate">
        @include('includes.messages')

        <div class='wrapper' style="text-align: center">
            <h2>Change name</h2>
            <form name="changeNickname" method="GET" action="changeNickname" >
            <div>
                <div class="text-input big" style="width:200px; margin: 0 auto">
                    <input name="nickname" id="nickname" type="text" class="account_field" data-platform="paygol" maxlength="16">
                    <label for="">New name</label>
                    <input type="hidden" name="original_username" value="{{ app('request')->input('original_username') }}" />
                </div>
                 <br/>
                <button type="submit" class="button-alt uppercase wow fadeIn longer animated">Change</button>
            </div>
            </form>
        </div>
    </section>
@endsection;
