@if(session('success'))
    <div class="alert-messages">
        <div class="success">{{ session('success') }}</div>
    </div>
@endif
@if($errors->any())
    <div class="alert-messages">
        <div class="error">@foreach ($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        </div>
    </div>
@endif
