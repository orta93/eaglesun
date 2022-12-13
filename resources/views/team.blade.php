@extends('layout')

@section('content')
    @include('partials.item_title', [
        'title' => 'Contamos con un equipo de especialistas para brindarte la mejor atención/ una atención de calidad.',
        'type' => 'Nos enfocamos en mejorar la calidad de vida a través de un enfoque integrador de neurodesarrollo.',
        'helper' => 'Nuestro equipo'
    ])

    @php
    $people = [
        [
            'title' => 'Laura Marchán. Coordinadora terapéutica',
            'image' => '/images/marchan.jpg',
            'specialties' => [
                'Terapeuta ocupacional',
                'Certificada en Neurodesarrollo e Integración Sensorial'
            ],
            'body' => [
                'Hola, mi nombre es Laura Marchán, terapeuta ocupacional de EAGLESUN, soy de la idea de que en equipo descubrimos el potencial nato que tiene cada uno de nuestros hijos. ¡Consolidemos sus habilidades de desempeño y veámoslo brillar!',
//                'Médico especialista en Pediatría, cuenta con alta especialidad en Neurología Pediátrica, así como experiencia en la atención de casos neurológicos y trastornos del sueño. Cursó sus estudios de medicina en la Universidad de Monterrey (UDEM) de donde se graduó con Beca de Excelencia Académica, por su méritos académicos, realizando su especialidad en el Hospital Christus Muguerza. La subespecialidad en Neurología Pediátrica la realizó en el Instituto Tecnológico de Estudios Superiores de Monterrey (ITESM).'
            ],
            'individuals' => [
//                'Neurología pediátrica',
//                'Trastornos del sueño',
//                'Urgencias neurológicas',
//                'Trastorno del lenguaje',
//                'Trastorno por déficit de atención e hiperactividad (TDAH)',
//                'Retraso del desarrollo psicomotor',
//                'Autismo',
//                'Epilepsia',
//                'Migraña',
//                'Parálisis cerebral'
            ]
        ],
        [
            'title' => 'Laura Flores',
            'image' => '/images/flores.jpg',
            'specialties' => [],
            'body' => [
                'Hola, soy Laura Flores, terapeuta de lenguaje de EAGLESUN. Para mi, la comunicación y lenguaje es expresar lo que quiero decir, a quien decírselo, cada vez que pueda decirlo y como quiera decirlo.',
            ],
            'individuals' => []
        ],
        [
            'title' => 'Valeria Venegas',
            'image' => '/images/venegas.jpg',
            'specialties' => [],
            'body' => [
                'Hola, soy Valeria Venegas, terapeuta conductual de EAGLESUN. Mi profesión me ha llevado a entender que los límites no los establece un diagnóstico, el trabajo colaborativo, la sintonía de la familia y el equipo terapéutico puede llevarnos más allá de lo que podemos comprender como diagnóstico.',
            ],
            'individuals' => []
        ]
    ];
    @endphp

    <div class="container flex flex-col gap-24">
        @foreach($people as $person)
            <div class="flex flex-col gap-2">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="w-full md:w-1/4"><img src="{{ $person['image'] }}" class="rounded-xl shadow-xl"/></div>
                    <div class="w-full md:w-3/4 flex flex-col gap-2">
                        <div class="text-3xl text-blue-primary font-bold">{{ $person['title'] }}</div>
                        @foreach($person['specialties'] as $specialty)
                            <div class="border-l-8 border-blue-primary pl-3 h-12 flex items-center text-lg font-semibold">{{ $specialty }}</div>
                        @endforeach
                    </div>
                </div>
                @foreach($person['body'] as $paragraph)
                    <div class="text-lg font-semibold">{{ $paragraph }}</div>
                @endforeach
                @if(count($person['individuals']))
                    <ul class="font-semibold text-lg text-blue-hover">
                        @foreach($person['individuals'] as $individual)
                            <li>{{ $individual }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>

    @include('partials.contact', ['title' => 'Agenda una cita con nuestras manos expertas', 'subtitle' => 'Estamos listos para recibirte.'])
@endsection
