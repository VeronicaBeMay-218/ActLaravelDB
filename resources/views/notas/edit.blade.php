<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('algo que agregar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @foreach($errors->all() as $message)
                {{$message}}
                @endforeach
                

                <form action="{{route('notas.update', $nota)}}"  method= "POST">

                @csrf
                @method('PATCH')
                <div>
                          <h2></h2>
                          <h3></h3>

                </div>
                <div>
                    <input type="text" name="tema" value="{{$nota->topic->tema}}">
                </div>

                <div class="flex gap-5 py-5">
                    <h2 class='' >Palabras clave</h2>
                    <input type="text" name="palabras" id="palabras" value="{{$nota->palabrasClave}}">
                    
                </div>

                <div>
                    <h2 class=''>Anotaciones</h2>
                    <input type="text" name="palabras" id="palabras" value="{{$nota->palabrasClave}}">
                    <input type="text" name="anotaciones" id="anotaciones ">
                    
                </div>

                <div class=''>
                    <h2>Resumen</h2>
                
                    <input type="text" name="palabras" id="palabras" value="{{$nota->palabrasClave}}">
                    <input type="text" name="resumen" id="resumen ">
                </div>
                <div class=''>
                    <button type="">Guardar</button>
                
                    
                </div>
            </div>
            </form>
        </div>
    </div>

</x-app-layout>
