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

                <form action="{{route('notas.store')}}"  methods: {
                    POST
                },>
                

                @csrf
                <div>
                    

               

                <div>

                

                </div>

                
                <div>
                <select  class='text-lg font-bold text-slate-400' name="tema">
                <option value=" @foreach($temas as $tema)  @endforeach">{{$tema->tema}}</option>
               
                </select>

                </div>

                <div>
                    <h2  class='text-lg font-bold text-slate-400' >Palabras clave</h2>
                    <input type="text" name="palabras" id="palabras">
                    
                </div>

                <div>
                    <h2  class='text-lg font-bold text-slate-400'>Anotaciones</h2>
                    <input type="text" name="anotaciones" id="anotaciones">
                    
                </div>

                <div class=''>
                    <h2  class='text-lg font-bold text-slate-400'>Resumen</h2>
                
                    <input type="text" name="resumen" id="resumen">
                </div>

                <div >
                    <br>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="">Enviar</button>
                
                    
                </div>

                

            
                </div>



            </div>

            </form>
            
          
        </div>
    </div>

</x-app-layout>

