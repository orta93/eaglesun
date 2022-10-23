@extends('layout')

@section('content')
    <div class="font-bold rounded-xl my-8 container text-center font-sans text-5xl py-16 bg-gradient-to-r from-orange-es to-blue-es">¡BIENVENIDOS A LA FAMILIA EAGLE SUN!</div>

    <div class="container flex flex-col md:flex-row gap-y-10 items-center my-20">
        <div class="w-full flex flex-col gap-2">
            <div class="text-xl">
                No importan tus circunstancias geográficas, sociales o económicas, si requieres un servicio neurológico,
            </div>
            <div class="text-4xl font-bold">
                En {{ env('APP_NAME') }}, juntos decimos SÍ.
            </div>
        </div>
        <div class="w-full">
            <img src="/images/home.jpg" class="rounded-2xl w-full shadow-2xl"/>
        </div>
    </div>

    <div class="container flex flex-col md:flex-row gap-y-10 items-center my-20">
        <div class="w-full flex flex-col gap-2">
            <div class="text-xl">
                ¿Tienes síntomas?
            </div>
            <div class="text-4xl font-bold">
                Úsalos para encontrar padecimientos relacionados
            </div>

            <div class="mt-4">
                <a href="{{ route('symptoms') }}" class="rounded-full bg-blue-primary hover:bg-blue-hover text-white font-bold p-4">Ver glosario de síntomas</a>
            </div>
        </div>
        <div class="w-full">
            <img src="/images/sintomas.jpg" class="rounded-2xl w-full shadow-2xl"/>
        </div>
    </div>

    @include('partials.contact', ['title' => 'Juntos podemos', 'subtitle' => 'Ponte en contacto para que podamos ayudarte'])
    @include('partials.contact_map', ['title' => 'Juntos podemos', 'subtitle' => 'Ponte en contacto para que podamos ayudarte'])
@endsection
