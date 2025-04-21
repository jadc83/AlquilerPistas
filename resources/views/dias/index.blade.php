<x-app-layout>
    <div class="flex">
        @foreach ($dias as $dia)
            <div class="mx-auto w-full items-center">
                <h1 class="bg-black text-white text-center">{{$dia->nombre}}</h1>
                @foreach ($dia->tramos as $tramo)
                    <form action="{{ route('reservas.store', [$tramo, $dia]) }}" method="post" class="flex justify-center">
                        @csrf
                        <x-primary-button>{{$tramo->horario}}</x-primary-button>
                    </form>
                @endforeach
            </div>
        @endforeach
    </div>
</x-app-layout>
