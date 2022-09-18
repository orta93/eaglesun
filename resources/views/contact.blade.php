@extends('layout')

@section('content')
    @include('partials.item_title', ['title' => 'Aquí puedes hacer tu cita, o resolver tus dudas sin costo.', 'type' => 'Contacto', 'helper' => ''])

    <div class="container flex flex-col gap-12">
        Sí, te estamos esperando con la certeza de que podemos ayudarte. Con la convicción de que sólo desafiando las metodologías tradicionales de atención neurológica, podremos derribar todas las barreras que limitan tu recuperación.
        <br/>
        <br/>
        Nuestro equipo de profesionales y nuestra comunidad están listos para detener tus pérdidas y trabajar contigo para que empieces a ganar fuerza, sonrisas, firmeza, confianza, tu independencia, tu movilidad, en fin, todo aquello que necesites para tener una vida plena.
        <br/>
        <br/>
        {{-- Agenda tu cita haciendo click en el icono de whatsapp ubicado en la esquina inferior derecha. Estamos aquí para ti.
        <br/>
        <br/> --}}
        Porque sin importar tus circunstancias, en Eagle Sun no pierdes, ganas.
    </div>

    @include('partials.contact', ['title' => 'Agenda una cita con nuestras manos expertas', 'subtitle' => 'Estamos listos para recibirte.'])
    @include('partials.contact_map', ['title' => 'Ubicanos sin problemas', 'subtitle' => 'No te pierdas al visitarnos, nos encantará conocerte'])
@endsection