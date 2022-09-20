@php
    $categories = \App\Models\Category::with('items:id,category_id,slug,title')->get();
    $services = $categories->where('type', 'servicio');
    $treatments = $categories->where('type', 'tratamiento');
    //dd($services->all());
@endphp

<div class="w-full bg-white border-b border-gray-200 shadow-md z-50">
    <div class="container flex justify-between py-4">
        <div class="logo"><a href="/"><img src="{{ asset('images/logo.png') }}" class="h-12"/></a></div>
        <div class="hidden md:flex gap-6 items-center font-bold">
            <div><a href="{{ route('team') }}">Equipo</a></div>
            <div><a href="{{ route('proposal') }}">Propuesta</a></div>
            <div class="dropdown">
                <a href="{{ route('services') }}" class="dropbtn">Servicios</a>
                <div class="dropdown-content">
                    @foreach ($services as $service)
                        <div class="submenu-container relative">
                            <a href="{{ route('services_detail', $service->slug) }}">{{ $service->description }}</a>
                              <ul class="dropdown-submenu flex flex-col flex flex-col">
                                @foreach ($service->items as $item)
                                    <div class="submenu-option px-2 py-1">
                                        <a href="{{ route('item', $item->slug) }}">{{ $item->title }}</a>
                                    </div>
                                @endforeach
                                </ul>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="dropdown">
                <a href="{{ route('treatments') }}" class="dropbtn">Tratamientos</a>
                <div class="dropdown-content">
                    @foreach ($treatments as $treatment)
                        <div class="submenu-container relative">
                            <a href="{{ route('services_detail', $treatment->slug) }}">{{ $treatment->description }}</a>
                              <ul class="dropdown-submenu flex flex-col flex flex-col">
                                @foreach ($treatment->items as $item)
                                    <div class="submenu-option px-2 py-1">
                                        <a href="{{ route('item', $item->slug) }}">{{ $item->title }}</a>
                                    </div>
                                @endforeach
                                </ul>
                        </div>
                    @endforeach
                </div>
            </div>
            <div><a href="{{ route('symptoms') }}">Glosario de Sintomas</a></div>
            <div><a href="{{ route('contact') }}">Contacto</a></div>
        </div>
    </div>
</div>