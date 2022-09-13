@extends('layout')

@section('content')
    @include('partials.item_title', ['title' => 'Nuestra Propuesta', 'type' => 'Siéntete seguro de tu decisión', 'helper' => 'Nuestra propuesta'])

    <div class="container my-20 flex flex-col gap-6">
        <div class="w-full">
            <img src="/images/propuesta.jpg" class="rounded-xl shadow-xl"/>
        </div>

        <div class="w-full text-center text-3xl">
            {{ env('APP_NAME') }} no es acudir con un doctor, es acudir a una organización multidisciplinaria <span class="font-bold text-blue-primary">dedicada específicamente a atender padecimientos neurológicos</span>
        </div>

        <div class="flex flex-col gap-2">
            <div class="font-bold text-3xl">Oferta de valor</div>
            <div class="font-semibold text-xl">
                En Neurocenter tenemos la certeza de que sólo desafiando las metodologías tradicionales de atención neurológica que se brindan en los sistemas de salud convencionales, podemos lograr que nuestros pacientes recuperen las sonrisas, los paseos, las charlas, los abrazos, su independencia o su movilidad.
                <br/>
                <br/>
                Estamos plenamente convencidos que con nuestra propuesta alternativa de atención, nuestra constante búsqueda de innovación y nuestra robusta comunidad de profesionales podemos detener las pérdidas y ayudarte a ganar fuerza, a hilar palabras, a dar pasos, a hacer guiños, a pasar bocados, a adquirir firmeza, confianza y todo aquello que, quien nos busca, requiere para tener una vida plena.
                <br/><br/>
                Porque sin importar tus circunstancias, <span class="font-bold">en {{ env('APP_NAME') }} no pierdes, ganas.</span>
            </div>
        </div>

        @php
            $cards = [
                [
                    'title' => 'Fácil acceso',
                    'description' => 'Sin espera de elevadores o la inconveniencia de escaleras.',
                    'icon' => '/icons/silla-ruedas.svg'
                ],
                [
                    'title' => 'Estacionamiento',
                    'description' => 'Sin espera de elevadores o la inconveniencia de escaleras.',
                    'icon' => '/icons/estacionamiento.svg'
                ],
                [
                    'title' => 'Nuestra pasión',
                    'description' => 'Nos mueve la inclusión, contamos con manos listas para sostenerte y guiarte.',
                    'icon' => '/icons/pasion.svg'
                ],
                [
                    'title' => 'Derribar barreras',
                    'description' => 'Buscamos derribar las barreras económicas, sociales o geográficas que impidan la recuperación de nuestros pacientes.',
                    'icon' => '/icons/barreras.svg'
                ],
                [
                    'title' => 'Rehabilitamos vidas',
                    'description' => 'Rehabilitamos vidas, no sólo neuronas. Somos compañía, tranquilidad, comunidad.',
                    'icon' => '/icons/sol.svg'
                ],
                [
                    'title' => 'Sistema integral',
                    'description' => 'Involucramos a nuestros especialistas, al paciente y a su red de apoyo.',
                    'icon' => '/icons/sistema-integral.svg'
                ],
                [
                    'title' => 'Comprension',
                    'description' => 'Entendemos las implicaciones físicas y emocionales de nuestros pacientes.',
                    'icon' => '/icons/comprension.svg'
                ],
                [
                    'title' => 'Tenemos vision',
                    'description' => 'Buscamos que la comunidad adquiera las herramientas que le ayuden a lograr la recuperación.',
                    'icon' => '/icons/vision.svg'
                ],
            ];
        @endphp

        <div class="flex flex-col gap-2">
            <div class="font-bold text-3xl">Por que <span class="font-bold text-4xl text-blue-primary uppercase">Sí</span></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                @foreach($cards as $card)
                    @include('partials.card', ['card' => $card])
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.contact', ['title' => 'Juntos podemos', 'subtitle' => 'Ponte en contacto para que podamos ayudarte.'])
@endsection