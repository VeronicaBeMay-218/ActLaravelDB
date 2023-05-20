<x-app-layout>
    <x-slot name="header">
        <h2 class="titulo1 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Recordatorios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="card">
                  <!-- Aqui empieza lo diferente del dashboard -->
                  <div class="container">
        <div class="row">

        <form action="{{ route('reminders.index') }}" method="GET">
    <div class="form-group">
        <input class="titulo2"type="text" class="form-control" name="search" value="{{ $search ?? '' }}" placeholder="Buscar recordatorios..." autocomplete="off">
        <button type="submit" class="titulo2 bg-transparent hover:bg-pink-500 text-pink-700  hover:text-white font-bold  px-4 border border-pink-500 hover:border-transparent rounded">Buscar</button>
    </div>
   

    <br>
    <br>
<div class=" items-center">
    <a href="{{route('reminders.create')}}" class="titulo2 bg-transparent hover:bg-pink-500 text-pink-700  hover:text-white font-bold py-2 px-4 border border-pink-500 hover:border-transparent rounded">
        Agregar nuevo recordatorio
    </a>
    </div>

    <br>
</form>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                   
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="titulo1">#</th>
                                        <th class="titulo1">Mensaje</th>
                                        <th class="titulo1">Categoria</th>
                                        <th class="titulo1">Importancia</th>
                                        <th class="titulo1">Fecha</th>
                                        <th class="titulo1">Destacado</th>
                                        <th class="titulo1">Completado</th>
                                        <th class="titulo1">Asignatura</th>
                                        <th class="titulo1">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach($reminders as $reminder)
                                @if ($loop->even)

                               
                                <hr>

                                <tr class="text-slate-800">
                                    
                                    <td>{{$loop->iteration}}</td>

                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-200">{{ $reminder->mensaje }}</td>
                                        <td class="titulo2px-3 py-2 px-3 py-2 bg-pink-200">{{ $reminder->categoria }}</td>
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-200" >{{ $reminder->importancia }}</td>
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-200">{{ $reminder->fecha}}</td>
        
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-200">{{ $reminder->destacado}}</td>
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-200">{{ $reminder->completado}}</td>
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-200">{{ $reminder->Subject->nombre}}</td>
 
                                
                                            




                                        <td>
                                    
                                    <x-detalles-reminder-link :reminder='$reminder'></x-detalles-reminder-link>
                                
                                    <x-edit-reminder-link :reminder='$reminder'></x-edit-reminder-link>
                                    <x-eliminar-reminder-link :reminder='$reminder'></x-eliminar-reminder-link>
                                   
                            
                                    </tr>
                                @else


<tr class="text-slate-800">
                                    
                                    <td>{{$loop->iteration}}</td>

                                        <td class="titulo2 px-3 py-2 bg-pink-300">{{ $reminder->mensaje }}</td>
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-300">{{ $reminder->categoria }}</td>
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-300">{{ $reminder->importancia }}</td>
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-300">{{ $reminder->fecha}}</td>
        
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-300">{{ $reminder->destacado}}</td>
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-300">{{ $reminder->completado}}</td>
                                        <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-300">{{ $reminder->Subject->nombre}}</td>
 
                                
                                            




                                        <td>
                                    
                                    <x-detalles-reminder-link :reminder='$reminder'></x-detalles-reminder-link>
                                
                                    <x-edit-reminder-link :reminder='$reminder'></x-edit-reminder-link>
                                    <x-eliminar-reminder-link :reminder='$reminder'></x-eliminar-reminder-link>
                                   
                            


                                    
                                    </form>
                                        </td>


                                    </tr>
                                    </tr>
                                
                                @endif

                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Aqui termina lo diferente del dashboard -->
                </div>
            </div>
        </div>
    </div>


    <style>

@font-face {
    font-family: 'baby asyifa';
    src: url('font/baby asyifa.ttf');
}

@font-face {
    font-family: 'EmilyDisplayRegular';
    src: url('font/EmilyDisplayRegular.ttf');
}

.titulo1{
    font-family: 'baby asyifa';
    font-size:20px;
}

.titulo2{
    font-family: 'EmilyDisplayRegular';
    font-size:30px;
}
</style>
</x-app-layout>