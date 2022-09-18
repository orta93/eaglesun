@extends('layout')

@section('content')
    @include('partials.item_title', ['title' => 'Tratamientos', 'type' => 'Ofrecemos', 'helper' => 'Tratamientos'])

    <div class="container my-8">
        <ul class="font-semibold text-lg text-blue-hover">
            @foreach($treatments as $treatment)
                <li><a href="{{ route('treatments_detail', $treatment->slug) }}">{{ $treatment->description }}</a></li>
            @endforeach
        </ul>
    </div>

    @include('partials.contact', ['title' => 'Agenda una cita con nuestras manos expertas', 'subtitle' => 'Estamos listos para recibirte.'])
@endsection