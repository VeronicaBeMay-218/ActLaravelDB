<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registra una nuevo recordatorio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @foreach($errors->all() as $message)
                {{$message}}
                @endforeach

                <form action="{{route('reminders.store')}}"  method="post">
                

                @csrf
                <div>
                    

                <div>

                

                </div>

                
                <div>
                Asignatura:
        

                <select class="text-lg font-bold text-slate-800" id="nombre" name="nombre"  required autofocus autocomplete="nombre">
    @foreach($asignaturas as $asig)
        <option value="{{ $asig->id }}">{{ $asig->nombre }}</option>
    @endforeach
</select>

                
                </div>
                <br>
                <div>
                    <h2  class='text-lg font-bold text-slate-400' >Mensaje</h2>
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="mensaje" id="mensaje">
                    
                </div>

                <div>
                    <h2  class='text-lg font-bold text-slate-400'>Categoria</h2>
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text"  name="categoria" id="categoria">
                    
                </div>

                <div class=''>
                    <h2  class='text-lg font-bold text-slate-400'>Importancia</h2>
                
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="importancia" id="importancia">
                </div>

                <div class="">
                <h2  class='text-lg font-bold text-slate-400'>Fecha</h2>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="date" name="fecha" id="fecha">
    </div>


    <div class=''>
                    <h2  class='text-lg font-bold text-slate-400'>Destacado</h2>
                
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="destacado" id="destacado">
                </div>

                <div class=''>
                    <h2  class='text-lg font-bold text-slate-400'>Completado</h2>
                
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="completado" id="completado">
                </div>



                <div >
                    <br>
                    <button class="bg-blue-500 hover:bg-pink-200 text-black font-bold py-2 px-4 rounded bg-pink-100" type="submit" value="Save">Enviar</button>
                
                    
                </div>


                


                

            
                </div>



            </div>

            </form>
            
          
        </div>
    </div>

</x-app-layout>

