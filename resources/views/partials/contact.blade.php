<div class="container flex flex-col gap-8 text-center my-20">
    <div class="text-blue-primary font-bold text-3xl">{{ $title }}</div>
    <div class="text-xl">{{ $subtitle }}</div>
    <div class="flex flex-col md:flex-row justify-center gap-x-36 gap-y-6">
        <div class="flex flex-col gap-4">
            <div class="h-16 font-semibold">
                Teléfono<br/>{{ env('PHONE') }}
            </div>
            <div>
                <a href="tel:{{ env('PHONE') }}" class="rounded-full bg-blue-primary hover:bg-blue-hover text-white font-bold p-4">Llamar ahora</a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <div class="h-16 font-semibold">También puedes enviarnos un mensaje<br/>por WhatsApp para agender tu cita</div>
            <div>
                <a href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}" class="rounded-full bg-blue-primary hover:bg-blue-hover text-white font-bold p-4">Enviar WhatsApp</a>
            </div>
        </div>
    </div>
</div>