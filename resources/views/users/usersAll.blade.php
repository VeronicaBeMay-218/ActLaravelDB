<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-50">
                <table class="table mx-auto">
                             <thead>

                             <tr>
                                <th></th>
                                <th class="">Nombre</th>
                                <th>email</th>
                                
                            </tr>

                             </thead>

                             <tbody>

                                @foreach ($users as $user)
                                @if ($loop->even)
                                
                                <tr class="bg-slate-500">
                                    
                                    <td>{{$loop->iteration}}</td>
                                    
                                    <td class="px-3 py-2 px-3 py-2 bg-slate-500">{{$user->name}}</td>
                                    <td class="px-3 py-2 bg-slate-500">{{$user->email}}</td>
                                

                                </tr>
                                @else

                                <tr>
                                <td>{{$loop->iteration}}</td>
                                    <td class="px-3 py-2 bg-slate-100">{{$user->name}}</td>
                                    <td class="px-3 py-2 bg-slate-500">{{$user->email}}</td>
                                
                                </tr>
                                
                                @endif
                                @endforeach
                        
                             </tbody>


                    </table>
            </div>
        </div>
    </div>

</x-app-layout>

