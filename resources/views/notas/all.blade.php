<x-app-layout>

<x-slot name="header">
        <h2 class="titulo1 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-red-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-orange-700">
                <table class="table mx-auto">
                             <thead>

                             <tr>
                                <th></th>
                                
                                <th class="titulo1">Resumen</th>
                                <th class="titulo1">Asignatura</th>
                                <th class="titulo1">Tema</th>
                                <th class="titulo1">Acciones</th>
                                
                            </tr>

                             </thead>

                             <tbody>

                                @foreach ($notas as $nota)
                                @if ($loop->even)
                                
                                <tr class="text-slate-800">
                                    
                                    <td class="titulo2">{{$loop->iteration}}</td>
                                   
                                    <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-300">{{$nota->resumen}}</td>
                                    <td class="titulo2 px-3 py-2 bg-pink-300 bg-[#fef3c7]">{{$nota->topic->subject->nombre}}</td>
                                    <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-300">{{$nota->topic->tema}}</td>
                                    
                                  
                                <td>
                                    
                                <x-detalles-link :nota='$nota'></x-detalles-link>
                            
                                <x-edit-link :nota='$nota'></x-edit-link>
                                <x-eliminar-link :nota='$nota'></x-eliminar-link>
                                    
                                

                                </tr>
                                @else

                                <tr>
                                <td class="titulo2">{{$loop->iteration}}</td>
                                    <td class="titulo2 px-3 py-2 bg-pink-200">{{$nota->resumen}}</td>
                                      <td class="titulo2 px-3 py-2 bg-pink-200 bg-[#fef3c7]">{{$nota->topic->subject->nombre}}</td>
                                    <td class="titulo2 px-3 py-2 px-3 py-2 bg-pink-200">{{$nota->topic->tema}}</td>

                                    
                                <td>
                                    
                                <x-detalles-link :nota='$nota'></x-detalles-link>
                             
                                <x-edit-link :nota='$nota'></x-edit-link>
                                <x-eliminar-link :nota='$nota'></x-eliminar-link>
                                
                                
                                
                                
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

