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
                    <div><a href="#">Servicios</a></div>
                    <div><a href="#">Propuesta</a></div>
                    <div><a href="#">Equipo</a></div>
                    <div><a href="#">Tratamientos</a></div>
                    <div><a href="#">Glosario de Sintomas</a></div>
                    <div><a href="#">Contacto</a></div>
                </div>
            </div>
            <div class="w-full md:w-1/4 flex flex-col md:flex-row gap-12">
                <div class="flex flex-col">
                    <div class="font-bold">Síguenos</div>
                    <div><a href="#">Facebook</a></div>
                    <div><a href="#">Instagram</a></div>
                </div>
            </div>
        </div>

        <div class="w-full text-sm text-center my-8">
            © {{ date('Y') }} {{ env('APP_NAME') }}. Reservados todos los derechos.
        </div>
    </div>
</div>