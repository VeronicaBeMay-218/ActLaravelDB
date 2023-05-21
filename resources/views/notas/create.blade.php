<x-app-layout>
<x-slot name="header">
        <h2 class="titulo1 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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

                <h2 class='titulo1 text-lg font-bold text-slate-600'>
                Tema:

                </h2>
               
                <select class="titulo1 text-lg font-bold text-slate-800" name="tema">
    @foreach($temas as $tema)
        <option value="{{ $tema->id }}">{{ $tema->tema }}</option>
    @endforeach
</select>
                
                </div>
                <br>
                <div>
                    <h2  class='titulo1 text-lg font-bold text-slate-600' >Palabras clave</h2>
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="palabras" id="palabras">
                    
                </div>

                <div>
                    <h2  class='titulo1 text-lg font-bold text-slate-600'>Anotaciones</h2>
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="anotaciones" id="anotaciones">
                    
                </div>

                <div class=''>
                    <h2  class='titulo1 text-lg font-bold text-slate-600'>Resumen</h2>
                
                    <input class="block rounded-t-lg px-2.5 pb-1.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="resumen" id="resumen">
                </div>

                <div >
                    <br>
                    <button class="titulo1 bg-blue-500 hover:bg-pink-200 text-black font-bold py-2 px-4 rounded bg-pink-100" type="submit" value="Save">Enviar</button>
                
                    
                </div>

                

            
                </div>



            </div>

            </form>
            
          
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