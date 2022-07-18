@if(session('success'))
    <div class="alert alert-success">
        <h3 class='uppercase color-accent text-center wow fadeInUp' style="color: #41a129" data-wow-delay='0.3s'>{{ session('success') }}</h3>
    </div><br>
@endif
@if($errors->any())
    <div class="alert alert-success">
        <h3 class='uppercase color-accent text-center wow fadeInUp' style="color: #41a129" data-wow-delay='0.3s'>@foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach<h3>
    </div><br>
@endif
