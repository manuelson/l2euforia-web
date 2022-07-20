@if(session('success'))
    <div class="alert alert-success">
        <h3 class='uppercase color-accent text-center' style="color: #41a129">{{ session('success') }}</h3>
    </div><br>
@endif
@if($errors->any())
    <div class="alert alert-success">
        <h3 class='uppercase color-accent text-center' style="color: #41a129">@foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach<h3>
    </div><br>
@endif
