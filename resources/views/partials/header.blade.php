<div class="w-full bg-white border-b border-gray-200 shadow-md z-50">
    <div class="container flex justify-between py-4">
        <div class="logo"><a href="/"><img src="{{ asset('images/logo.png') }}" class="h-12"/></a></div>
        <div class="hidden md:flex gap-6 items-center font-bold">
            <div><a href="{{ route('team') }}">Equipo</a></div>
            <div><a href="{{ route('proposal') }}">Propuesta</a></div>
            <div><a href="#">Servicios</a></div>
            <div><a href="#">Tratamientos</a></div>
            <div><a href="#">Glosario de Sintomas</a></div>
            <div><a href="#">Contacto</a></div>
{{--            <div><a href="{{ route('catalogo') }}">Catálogo de Pruebas</a></div>--}}
        </div>
    </div>
</div>