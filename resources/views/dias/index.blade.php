<x-app-layout>
    <div class="flex">
        @foreach ($dias as $dia)
            <div class="mx-auto w-full">
                <h1 class="bg-black text-white text-center">{{$dia->nombre}}</h1>
                @foreach ($dia->tramos as $tramo)
                    <p class="text-center">{{$tramo->horario}}</p>
                @endforeach
            </div>
        @endforeach
    </div>
</x-app-layout>