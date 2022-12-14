{{--@if(env('WHATSAPP_NUMBER'))
<div style="position: fixed; bottom: 20px; right: 20px; cursor: pointer; z-index: 99999999;">
    <a class="hidden md:flex" href="https://web.whatsapp.com/send?phone={{ env('WHATSAPP_NUMBER') }}&text=" target="_blank">
        <div>
            <div style="display:flex;justify-content: center;align-items: center;background-color:#e4e4e4;color:#222222;padding:0 12px;border-radius:25px;font-size:13px;line-height:32px;">
                <span style="margin:0 8px 0 -12px;;order:0;">
                    <img src="/images/whatsapp.svg"/>
                </span>
                <span>WhatsApp</span>
            </div>
        </div>
    </a>
    <a class="flex md:hidden" href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}" target="_blank">
        <div>
            <div style="display:flex;justify-content: center;align-items: center;background-color:#e4e4e4;color:#222222;padding:0 12px;border-radius:25px;font-size:13px;line-height:32px;">
                <span style="margin:0 8px 0 -12px;;order:0;">
                    <img src="/images/whatsapp.svg"/>
                </span>
                <span>WhatsApp</span>
            </div>
        </div>
    </a>
</div>
@endif--}}

<div class="w-full bg-blue-primary text-gray-600">
    <div class="container pt-16 pb-4">
        <div class="flex flex-col md:flex-row gap-y-4 text-center md:text-left justify-between">
            <div class="w-full md:w-1/2 flex flex-col gap-4">
                <div class="logo"><img src="{{ asset('images/logo.png') }}" class="h-20 mx-auto"/></div>
            </div>
            <div class="w-full md:w-1/4 flex flex-col md:flex-row gap-12">
                <div class="flex flex-col">
                    <div class="font-bold">Menu</div>
                    <div><a href="{{ route('team') }}">Equipo</a></div>
                    <div><a href="{{ route('proposal') }}">Propuesta</a></div>
                    <div><a href="{{ route('services') }}">Servicios</a></div>
                    @if(Route::has('treatments'))
                        <div><a href="{{ route('treatments') }}">Tratamientos</a></div>
                    @endif
                    @if(Route::has('symptoms'))
                        <div><a href="{{ route('symptoms') }}">Glosario de Sintomas</a></div>
                    @endif
                    <div><a href="{{ route('contact') }}">Contacto</a></div>
                </div>
            </div>
            <div class="w-full md:w-1/4 flex flex-col md:flex-row gap-12">
                <div class="flex flex-col">
                    <div class="font-bold">S??guenos</div>
                    @if (env('FACEBOOK_HANDLE', '') != '')
                        <div><a target="_blank" href="https://www.facebook.com/{{ env('FACEBOOK_HANDLE') }}">Facebook</a></div>
                    @endif
                    @if (env('INSTAGRAM_HANDLE', '') != '')
                        <div><a target="_blank" href="https://www.instagram.com/{{ env('INSTAGRAM_HANDLE') }}">Instagram</a></div>
                    @endif
                </div>
            </div>
        </div>

        <div class="w-full text-sm text-center my-8">
            ?? {{ date('Y') }} {{ env('APP_NAME') }}. Reservados todos los derechos.
        </div>
    </div>
</div>
