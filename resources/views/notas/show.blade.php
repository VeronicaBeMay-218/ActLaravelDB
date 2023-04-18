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
                <div class="flex flex-col justify-center items-center">
                <div class="bg-[#d6d3d1] relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[100%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-1">
                          <h2 class='text-xl font-bold'>{{$nota->topic->subtema}}</h2>
                          <h3 class="italic ...">{{$nota->topic->subject->nombre}} | {{$nota->topic->subject->nombre}}</h3>
                          <br>

                </div>
                </div>

                
                <div>
                    <br>
                    <h2 class='text-lg font-bold text-slate-400'>Palabras clave:</h2>
                    <br>
                    <p>{{$nota->palabrasClave}}</p>
                    <br>
                    </div>
                </div>



                <div>
                    <br>
                    <h2 class='text-lg font-bold text-slate-400'>Anotaciones:</h2>
                    <br>
                    <p>{{$nota->anotaciones}}</p>
                    <br>
                </div>

                <div class=''>
                    <h2 class='text-lg font-bold text-slate-400'>Resumen:</h2>
                    <br>
                    <p>{{$nota->resumen}}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>