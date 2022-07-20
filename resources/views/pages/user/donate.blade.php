@extends('layouts.default')

@section('content')
    <section class="donate">
        <h2 class="sectionTitle">Ayuda al servidor</h2>
        @include('includes.messages')
        <div class='wrapper wrappFlex'>
            <p class="donatetext">
                Puedes ayudarnos a cubrir los costes de mantener el servidor en funcionamiento.
                <br/><br/>
                Al hacerlo ganaras cosmeticos en el servidor :)
                <br/><br/>
                Recuerda aseugrarte de poner correctamente el nombre de tu <strong>personaje</strong> y recibiras regalo automaticamente. Si cometes un error al realizar tu donación, tendremos que procesarlo manualmente y puede demorar hasta 7 días.
                <br/><br/>
                Por favor, ten paciencia y crea un ticket de soporte si no has recibido tu recompensa 30 minutos después de donar.
                <br/><br/>
                Ten en cuenta que las donaciones realizadas <strong>NO SERAN REMBOLSABLES</strong> bajo ningun cocepto.
                <br/><br/>
                Puedes elegir entre cualquiera de los siguientes paquetes:
            </p>

        </div>
        <div class='packages'>

            <div class="package">
                Cambiar sexo personaje  <br/><br/>
                <strong>5 €</strong>
            </div>

            <div class="package">
                Cambiar lider de clan  <br/><br/>
                <strong>5 €</strong>
            </div>
            <div class="package">
                Gorrito aleatorio <br/><br/>
                <strong>5 €</strong>
            </div>
            <div class="package">
                Cambiar apariencia personaje <br/><br/>
                <strong>15 €</strong>
            </div>
        </div>
    </section>

@endsection;
