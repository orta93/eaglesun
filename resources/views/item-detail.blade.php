@extends('layout')

@section('title'){{ $item->title }}@endsection

@section('inline-styles')
    <style>
        .item-container h3, .item-container h2 {
            font-weight: bold;
            font-size: 1.25rem;
        }

        .item-container img {
            border-radius: 25px;
            max-height: 30rem;
            object-fit: cover;
            /* object-position: top; */
        }
    </style>
@endsection

@section('content')
    @include('partials.item_title', ['title' => $item->title, 'helper' => $item->title, 'type' => $item->category->type == 'servicio' ? 'Conoce sobre' : 'Tratamiento'])

    <div class="container flex flex-col gap-3">
        <div class="font-bold text-2xl">¿Aún no estás seguro de tu diagnóstico?</div>
        <div>Recuerda que siempre puedes encuentra padecimientos por sus síntomas.</div>
        <div class="mt-6">
            <a href="{{ route('symptoms') }}" class="rounded-full bg-blue-primary hover:bg-blue-hover text-white font-bold p-4">Encontrar padecimiento en base a síntomas</a> 
        </div>
    </div>

    <div class="item-container container mt-14 mb-12 pt-4 border-t-2 border-blue-primary">
        {!! $item->body !!}
    </div>

    @include('partials.contact', ['title' => $item->contact_title, 'subtitle' => $item->contact_subtitle])
@endsection