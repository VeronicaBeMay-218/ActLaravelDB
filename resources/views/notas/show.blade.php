<x-app-layout>
<x-slot name="header">
        <h2 class="titulo2 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nota') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[url('/img/img3.svg')] dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <br>
                  

                <div class="p-6 text-gray-900 dark:text-gray-100">

                <div class="flex flex-col justify-center items-center">
                <div class=" bg-opacity-0 bg-[#d6d3d1] relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[100%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-1">
                  
                          <h2 class='text-xl font-bold'>Subtema: {{$nota->topic->subtema}}</h2>
                          <h3 class="">Nombre de la asignatura: {{$nota->topic->subject->nombre}} | Carrera: {{$nota->topic->subject->carrera}}</h3>
                          <br>

                </div>
                </div>

                
                
                <div class="container px-60 ">

  <div class="flex flex-wrap ">

                    
    <div class=" flex w-full relative max-w-sm rounded">
                                                
      <div class=" bg-opacity-0 w-8/12 psr-4 relative max-w-m rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                            
                            
      <div>
                    <br>
                    <h2 class='titulo2 text-lg font-bold text-slate-600 '>Palabras clave:</h2>
                    <br>
                    <p>{{$nota->palabrasClave}}</p>
                    <br>
                    </div>
                </div>              
      </div>
                        
      <div class="w-4/12 h-full">
                            
        <div class="flex flex-col ">
                                
          <div class="flex-1 pb-2 ">
                                    
            <div class="bg-opacity-0 w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div>
                    <br>
                    <h2 class='titulo2 text-lg font-bold text-slate-600'>Anotaciones:</h2>
                    <br>
                    <p>{{$nota->anotaciones}}</p>
                    <br>
                </div>                     
            </div>
                                
          </div>
                                
          <div class="flex-1 pt-2">
                                    
            <div class="bg-opacity-0 relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div class=''>
                    <h2 class='titulo2 text-lg font-bold text-slate-600'>Resumen:</h2>
                    <br>
                    <p>{{$nota->resumen}}</p>
                </div>                    
            </div>
                                
          </div>
                            
        </div>
                        
      </div>
                    
 

                    
    
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
