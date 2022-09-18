@extends('layout')

@section('content')
    @include('partials.item_title', ['title' => 'Servicios', 'type' => 'Ofrecemos', 'helper' => 'Servicios'])

    <div class="container my-8">
        <ul class="font-semibold text-lg text-blue-hover">
            @foreach($services as $service)
                <li><a href="{{ route('services_detail', $service->slug) }}">{{ $service->description }}</a></li>
            @endforeach
        </ul>
    </div>

    @include('partials.contact', ['title' => 'Agenda una cita con nuestras manos expertas', 'subtitle' => 'Estamos listos para recibirte.'])
@endsection