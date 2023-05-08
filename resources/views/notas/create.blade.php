<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registra una nueva nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @foreach($errors->all() as $message)
                {{$message}}
                @endforeach

                <form action="{{route('notas.store')}}"  method="post">
                

                @csrf
                <div>
                    

                <div>

                

                </div>

                
                <div>
                Tema:
                <select  class='text-lg font-bold text-slate-400' name="tema">
                @foreach($temas as $tema)
                <option value="">{{$tema->tema}}</option>
                @endforeach
                </select>
                
                </div>
                <br>
                <div>
                    <h2  class='text-lg font-bold text-slate-400' >Palabras clave</h2>
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="palabras" id="palabras">
                    
                </div>

                <div>
                    <h2  class='text-lg font-bold text-slate-400'>Anotaciones</h2>
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text  name="anotaciones" id="anotaciones">
                    
                </div>

                <div class=''>
                    <h2  class='text-lg font-bold text-slate-400'>Resumen</h2>
                
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="resumen" id="resumen">
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

