<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modificar reminder') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @foreach($errors->all() as $message)
                {{$message}}
                @endforeach
                

                <form action="{{route('reminders.update', $reminder)}}"  method= "POST">

                @csrf
                @method('PATCH')
                <div>
                          <h2></h2>
                          <h3></h3>

                </div>
                <div>
                    Asignatura: 
                    <input class="" type="text" name="asignatura"value="{{ $reminder->Subject->nombre}}">
                </div>

                <div class="flex gap-5 py-5">
                    <h2  class='text-lg font-bold text-slate-400' >Mensaje:</h2>
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="mensaje" id="mensaje" value="{{$reminder->mensaje}}">
                    
                </div>

                <div>
                    <h2  class='text-lg font-bold text-slate-400'>Categoria:</h2>
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="categoria" id="categoria" value="{{$reminder->categoria}}">
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="categoria" id="categoris">
                    
                </div>

                <div class=''>
                    <h2  class='text-lg font-bold text-slate-400'>Importancia:</h2>
                
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="importancia" id="palabras" value="{{$reminder->importancia}}">
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="importancia" id="importancia">
                </div>
                <br>
                <div  class='text-lg font-bold text-slate-400'>
                    <button class="bg-pink-100 hover:bg-pink-200 text-black font-bold py-2 px-4 rounded" type="">Guardar</button>
                
                    
                </div>
            </div>
            </form>
        </div>
    </div>

</x-app-layout>
