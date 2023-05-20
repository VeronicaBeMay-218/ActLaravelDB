<x-app-layout>
<x-slot name="header">
        <h2 class="titulo2 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reminder') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[url('/img/img3.svg')] dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              
              
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex flex-col justify-center items-center">
                <div class="bg-opacity-0 bg-[#d6d3d1] relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[100%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-1">
                        
                          <h3 class="">
                            
                          
        Asignatura: {{$reminder->subject->nombre}}</h3>
                          <br>

                </div>
                </div>

                
                
                <div class="container px-60 ">

               
  <div class="flex flex-wrap items-center">

                    
    <div class="flex w-full relative max-w-sm rounded">
                                                
      <div class="bg-opacity-0 w-8/12 psr-4 relative max-w-m rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                            
                            
      <div>
                    <br>
                    <h2 class='titulo2 text-lg font-bold text-slate-600'>Mensaje:</h2>
                    <br>
                    <p>{{$reminder->mensaje}}</p>
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
                    <h2 class='titulo2 text-lg font-bold text-slate-600'>Categoria: {{$reminder->categoria}}</h2>
                    
              
                </div>                     
            </div>
                                
          </div>
                                
          <div class="flex-1 pt-2">
                                    
            <div class="bg-opacity-0 w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div class=''>
                    <h2 class='titulo2 text-lg font-bold text-slate-600'>Importancia: {{$reminder->importancia}}</h2>
                   
                </div>                    
            </div>

            <div class="flex-1 pt-2">
                                    
            <div class="bg-opacity-0 w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div class=''>
                    <h2 class='titulo2 text-lg font-bold text-slate-600'>Fecha: {{$reminder->fecha}}</h2>
                    
                </div>                    
            </div>

            <div class="flex-1 pt-2">
                                    
            <div class="bg-opacity-0 w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div class=''>
                    <h2 class='titulo2 text-lg font-bold text-slate-600'>Destacado: {{$reminder->destacado}}</h2>
                    
                </div>                    
            </div>

            <div class="flex-1 pt-2">
                                    
            <div class="bg-opacity-0 w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div class=''>
                    <h2 class='titulo2 text-lg font-bold text-slate-600'>Completado: {{$reminder->completado}}</h2>
                 
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
    src: url('.font/EmilyDisplayRegular.ttf');
}

.titulo1{
    font-family: 'baby asyifa';
    font-size:20px;
}

.titulo2{
    font-family: 'EmilyDisplayRegular';
    font-size:20px;
}
</style>

</x-app-layout>