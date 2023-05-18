<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reminder') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[url('/img/img3.svg')] dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <br>
              <br>
              
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex flex-col justify-center items-center">
                <div class="bg-[#d6d3d1] relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[100%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-1">
                        
                          <h3 class="italic ...">
                            
                          
        Asignatura: {{$reminder->subject->nombre}}</h3>
                          <br>

                </div>
                </div>

                
                
                <div class="container mx-auto px-20">

<div class="border bg-pink-900 bg-opacity-25 rounded-lg p-6 text-gray-100 relative z-10" style="cursor: auto;">
                
  <div class="flex flex-wrap items-center">

                    
    <div class="flex w-full h-48 md:h-64 lg:h-72 relative max-w-sm rounded">
                                                
      <div class="w-8/12 psr-4 relative max-w-m rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                            
                            
      <div>
                    <br>
                    <h2 class='text-lg font-bold text-slate-400'>Mensaje:</h2>
                    <br>
                    <p>{{$reminder->mensaje}}</p>
                    <br>
                    </div>
                </div>              
      </div>
                        
      <div class="w-4/12 h-full">
                            
        <div class="flex flex-col ">
                                
          <div class="flex-1 pb-2 ">
                                    
            <div class="w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div>
                    <br>
                    <h2 class='text-lg font-bold text-slate-400'>Categoria:</h2>
                    <br>
                    <p>{{$reminder->categoria}}</p>
                    <br>
                </div>                     
            </div>
                                
          </div>
                                
          <div class="flex-1 pt-2">
                                    
            <div class="w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div class=''>
                    <h2 class='text-lg font-bold text-slate-400'>Importancia:</h2>
                    <br>
                    <p>{{$reminder->importancia}}</p>
                </div>                    
            </div>

            <div class="flex-1 pt-2">
                                    
            <div class="w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div class=''>
                    <h2 class='text-lg font-bold text-slate-400'>Fecha:</h2>
                    <br>
                    <p>{{$reminder->fecha}}</p>
                </div>                    
            </div>

            <div class="flex-1 pt-2">
                                    
            <div class="w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div class=''>
                    <h2 class='text-lg font-bold text-slate-400'>Destacado:</h2>
                    <br>
                    <p>{{$reminder->destacado}}</p>
                </div>                    
            </div>

            <div class="flex-1 pt-2">
                                    
            <div class="w-full h-full relative max-w-sm rounded overflow-hidden shadow-lg bg-[#f4f4f5] text-black">
                                        
            <div class=''>
                    <h2 class='text-lg font-bold text-slate-400'>Completado:</h2>
                    <br>
                    <p>{{$reminder->completado}}</p>
                </div>                    
            </div>
                                
          </div>
                            
        </div>
                        
      </div>
                    
    </div>

                    
    
</div>


               

               
            </div>
        </div>
    </div>

</x-app-layout>