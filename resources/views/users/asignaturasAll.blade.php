<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Asignaturas') }}
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
                                <th class="">Nombre</th>
                                <th>Clave</th>
                                <th>Temas</th>
                                <th>Acciones</th>
                                
                            </tr>

                             </thead>

                             <tbody>

                                @foreach ($asignaturas as $asignatura)
                                @if ($loop->even)
                                
                                <tr class="bg-slate-500">
                                    
                                    <td>{{$loop->iteration}}</td>
                                   
                                    <td class="px-3 py-2 px-3 py-2 bg-slate-500">{{$asignatura->nombre}}</td>
                                    <td class="px-3 py-2 bg-slate-500">{{$asignatura->clave}}</td>
                                    <td class="px-3 py-2 px-3 py-2 bg-slate-500">{{$asignatura->topics}}</td>
                                    <td>

                                  
                                    
                                

                                </tr>
                                @else

                                <tr>
                                <td>{{$loop->iteration}}</td>
                                    <td class="px-3 py-2 bg-slate-100">{{$asignatura->nombre}}</td>
                                      <td class="px-3 py-2 bg-slate-500">{{$asignatura->clave}}</td>
                                    <td class="px-3 py-2 px-3 py-2 bg-slate-500">{{$asignatura->topics}}</td>

                                    <td class='px-3'></td>
                                <td>
                                
                             
                                
                                
                                
                                
                                </td>
                                    
                                   
                                    

                                
                                </tr>
                                
                                @endif
                                @endforeach
                        
                             </tbody>


                    </table>
            </div>
        </div>
    </div>

</x-app-layout>
