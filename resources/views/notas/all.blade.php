<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="table mx-auto">
                             <thead>

                             <tr>
                                <th></th>
                                <th class="">Nombre</th>
                                <th>email</th>
                                
                            </tr>

                             </thead>

                             <tbody>

                                @foreach ($notas as $nota)
                                @if ($loop->even)
                                
                                <tr class="bg-slate-500">
                                    
                                    <td>{{$loop->iteration}}</td>
                                    
                                    <td class="px-3 py-2 px-3 py-2 bg-slate-500">{{$nota->resumen}}</td>
                                    <td class="px-3 py-2 bg-slate-500">{{$nota->topic->subject->nombre}}</td>
                                    <td class="px-3 py-2 px-3 py-2 bg-slate-500">{{$nota->topic->tema}}</td>
                                

                                </tr>
                                @else

                                <tr>
                                <td>{{$loop->iteration}}</td>
                                    <td class="px-3 py-2 bg-slate-100">{{$nota->resumen}}</td>
                                    <td class="px-3 py-2 bg-slate-500">{{$nota->topic->subject->nombre}}</td>
                                    <td class="px-3 py-2 px-3 py-2 bg-slate-500">{{$nota->topic->tema}}</td>
                                
                                </tr>
                                
                                @endif
                                @endforeach
                        
                             </tbody>


                    </table>
            </div>
        </div>
    </div>

</x-app-layout>

