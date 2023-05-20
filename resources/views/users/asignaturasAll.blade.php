<x-app-layout>

<x-slot name="header">
        <h2 class="titulo1 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-red-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  dark:text-orange-700">
                <table class="table mx-auto">
                             <thead>

                             <tr>
                                <th></th>
                                <th class="titulo1">Nombre</th>
                                <th class="titulo1">Clave</th>
                                <th class="titulo1">Crear nota</th>
                               
                              
            
                            </tr>

                             </thead>

                             <tbody>

                                @foreach ($asignaturas as $asignatura)
                                @if ($loop->even)
                                
                                <tr class="">
                                    
                                    <td class="titulo2">{{$loop->iteration}}</td>
                                   
                                    <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-300">{{$asignatura->nombre}}</td>
                                    <td class="titulo2 px-3 py-2 bg-pink-300">{{$asignatura->clave}}</td>
                                    <td>

                                    <x-create-link :nota='$asignatura'></x-create-link>

                                    </td>

                                 
                                

                                </tr>
                                @else

                                <tr>
                                <td class="titulo2">{{$loop->iteration}}</td>
                                    <td class="titulo2 px-3 py-2 bg-pink-100">{{$asignatura->nombre}}</td>
                                      <td class="titulo2 px-3 py-2 bg-pink-100">{{$asignatura->clave}}</td>
                                    
                                    
                                <td>
                                
                                <x-create-link :nota='$asignatura'></x-create-link>
                                
                                
                                
                                
                                </td>
                                    
                                   
                                    

                                
                                </tr>
                                
                                @endif
                                @endforeach
                        
                             </tbody>


                    </table>
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
