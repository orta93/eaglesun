@extends('layout')

@section('content')
    @include('partials.item_title', ['title' => 'Te ayudamos a dar un paso más cerca al diagnóstico', 'type' => '¿Estás buscando un diagnóstico?', 'helper' => ''])

    <div class="container my-8 flex flex-col gap-12">
        @foreach($symptoms as $symptom)
            <div class="flex flex-col border-b-2 pb-4 border-blue-primary">
                <div class="font-bold text-2xl">{{ $symptom->name }}</div>
                <div class="font-semibold">
                    {!! $symptom->body !!}
                </div>
                <div class="mt-8 font-semibold grid grid-cols-1 md:grid-cols-2 gap-y-2">
                    @foreach ($symptom->diseases as $disease)
                        <div>{{ $disease }}</div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    @include('partials.contact', ['title' => 'Da un paso más y consigue el diagnóstico de un experto.', 'subtitle' => 'Ponte en contacto para que podamos ayudarte.'])
@endsection