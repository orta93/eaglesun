@extends('layout')

@section('content')
    @include('partials.item_title', ['title' => $treatment->description, 'type' => 'Tratamiento de', 'helper' => 'Tratamientos'])

    <div class="container my-8">
        <ul class="font-semibold text-lg text-blue-hover">
            @foreach($items as $item)
                <li><a href="{{ route('treatments_detail', $item->slug) }}">{{ $item->title }}</a></li>
            @endforeach
        </ul>
    </div>

    @include('partials.contact', ['title' => 'Agenda una cita con nuestras manos expertas', 'subtitle' => 'Estamos listos para recibirte.'])
@endsection