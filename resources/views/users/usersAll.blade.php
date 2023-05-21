<x-app-layout>
<x-slot name="header">
        <h2 class="titulo1 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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
                                <th class="titulo1">Nombre</th>
                                <th class="titulo1">email</th>
                                
                            </tr>

                             </thead>

                             <tbody>

                                @foreach ($users as $user)
                                @if ($loop->even)
                                
                                <tr class="bg-slate-500">
                                    
                                    <td class="titulo2">{{$loop->iteration}}</td>
                                    
                                    <td class="titulo2 px-3 py-2 px-3 py-2 bg-slate-500">{{$user->name}}</td>
                                    <td class="titulo2 px-3 py-2 bg-slate-500">{{$user->email}}</td>
                                

                                </tr>
                                @else

                                <tr>
                                <td class="titulo2">{{$loop->iteration}}</td>
                                    <td class="titulo2 px-3 py-2 bg-slate-100">{{$user->name}}</td>
                                    <td class="titulo2 px-3 py-2 bg-slate-500">{{$user->email}}</td>
                                
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

<footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
        <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
            <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">
                <a href="/"
                    class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start">
                    <span class="flex items-start sm:items-center">
                       
                    </span>
                </a>
                <p class="mt-6 mr-4 text-base text-gray-500">© 2023 Derechos reservados Veornica Beatriz Be May
                </p>
            </div>
           
                </div>
            </div>
        </div>
        <div class="pt-4 pt-6 mt-10 text-center text-gray-400 border-t border-gray-100"></div>
    </footer>

    <!-- a little JS for the mobile nav button -->
    <script>
        if (document.getElementById('nav-mobile-btn')) {
            document.getElementById('nav-mobile-btn').addEventListener('click', function () {
                if (this.classList.contains('close')) {
                    document.getElementById('nav').classList.add('hidden');
                    this.classList.remove('close');
                } else {
                    document.getElementById('nav').classList.remove('hidden');
                    this.classList.add('close');
                }
            });
        }
    </script>