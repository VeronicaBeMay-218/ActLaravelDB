<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nota') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div>
                          <h2>{{$nota->topic->subtema}}</h2>
                          <h3>{{$nota->topic->subject->nombre}} | {{$nota->topic->subject->nombre}}</h3>

                </div>

                <div>
                    <h2 class='' >Palabras clave</h2>
                    <p>{{$nota->palabrasClave}}</p>
                </div>

                <div>
                    <h2 class=''>Anotaciones</h2>
                    <p>{{$nota->anotaciones}}</p>
                </div>

                <div class=''>
                    <h2>Resumen</h2>
                    <p>{{$nota->resumen}}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>