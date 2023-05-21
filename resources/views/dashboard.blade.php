<x-app-layout>

<x-slot name="header">
        <h2 class="titulo1 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <br>

        </h2>
    </x-slot>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landmark</title>
    <!--
        For more customization options, we would advise
        you to build your TailwindCSS from the source.
        https://tailwindcss.com/docs/installation
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">
    <!-- Small CSS to Hide elements at 1520px size -->
    <style>
        @media(max-width:1520px) {
            .left-svg {
                display: none;
            }
        }

        /* small css for the mobile nav close */
        #nav-mobile-btn.close span:first-child {
            transform: rotate(45deg);
            top: 4px;
            position: relative;
            background: #a0aec0;
        }

        #nav-mobile-btn.close span:nth-child(2) {
            transform: rotate(-45deg);
            margin-top: 0px;
            background: #a0aec0;
        }
    </style>
</head>
<body class="overflow-x-hidden antialiased">
    <!-- Header Section -->
    
    <!-- End Header Section-->

   
    <!-- HERO SECTION END -->

    <!-- BEGIN FEATURES SECTION -->
    <div id="features" class="relative w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <h3
                class="max-w-2xl px-5 mt-2 text-3xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0">
                Podrás hacer lo siguiente</h3>
            <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">

                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center ">
                        
                        <!-- FEATURE Icon 1 -->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 100 100" height="80px" id="Layer_1" version="1.1" viewBox="0 0 100 100" width="80px" xml:space="preserve"><g><g><g><g/></g><g/></g></g><g><rect fill="#231F20" height="2" width="28" x="34" y="41"/><circle cx="28.202" cy="42" fill="#231F20" r="2"/><rect fill="#231F20" height="2" width="28" x="34" y="51"/><circle cx="28.202" cy="52" fill="#231F20" r="2"/><circle cx="28.202" cy="62" fill="#231F20" r="2"/><rect fill="#231F20" height="2" width="16" x="34" y="71"/><circle cx="28.202" cy="72" fill="#231F20" r="2"/><path d="M91.796,36.109l-2.828-2.828L87.2,35.049l-0.707-0.707l-2.755,2.651L74,46.63V30   c0-6.617-5.179-12-11.796-12H61v-1c0-1.1-0.696-2-1.796-2h-11c0-2.209-1.791-4-4-4s-4,1.791-4,4h-11C28.104,15,27,15.9,27,17v1   h-0.796C19.587,18,14,23.383,14,30v50c0,6.617,5.587,12,12.204,12h36C68.821,92,74,86.617,74,80V55.114L87.098,42h0.051   l3.562-3.476l-0.695-0.678L91.796,36.109z M44.204,13c1.104,0,2,0.896,2,2s-0.896,2-2,2s-2-0.896-2-2S43.1,13,44.204,13z M70,80   c0,4.411-3.385,8-7.796,8h-36C21.793,88,18,84.411,18,80V30c0-4.411,3.793-8,8.204-8h1l-1,4c0,1.1,0.9,2,2,2h32c1.1,0,2-0.9,2-2   l-1-4h1C66.615,22,70,25.589,70,30v20.63L59.835,61H34v2h23.835l-2.278,2.278l-1.768,3.889l-0.001,0l-1.768,3.89l7.677-3.537   L70,59.114V80z M58.233,69.369l-2.916,1.326l-0.936-0.935l1.326-2.917l2.324,2.323L58.233,69.369z M87.376,40.528L84.548,37.7   l1.794-1.793l-0.202,0.202l2.827,2.827l0.354-0.354l0.001,0.001L87.376,40.528z" fill="#231F20"/></g></svg>
                        <h4 class="relative mt-6 text-lg font-bold">Escribir tus notas</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Podrás seleccionar la asignatura y el tema</p>
                        <a href="{{ route('notas') }}" class="relative flex mt-2 text-sm font-medium underline self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-black bg-pink-200 ">Ver mis notas</a>
                    </div>

                </div>



                
                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                    <div class="rrelative flex flex-col items-center justify-center ">
                        
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;" xml:space="preserve" width="80" height="80">
<g>
	<circle style="fill:#E8D47B;" cx="40" cy="70" r="7.5"/>
	<path style="fill:#BA9B48;" d="M40,63c3.86,0,7,3.14,7,7s-3.14,7-7,7s-7-3.14-7-7S36.14,63,40,63 M40,62c-4.418,0-8,3.582-8,8   s3.582,8,8,8s8-3.582,8-8S44.418,62,40,62L40,62z"/>
</g>
<g>
	<path style="fill:#FFEEA3;" d="M10.5,69.5v-7.015c4.455-0.26,8-3.966,8-8.485V30c0-9.562,6.43-18.062,15.636-20.669L34.5,9.228V8   c0-3.033,2.467-5.5,5.5-5.5s5.5,2.467,5.5,5.5v1.228l0.364,0.103C55.07,11.938,61.5,20.438,61.5,30v24c0,4.519,3.545,8.226,8,8.485   V69.5H10.5z"/>
	<path style="fill:#BA9B48;" d="M40,3c2.757,0,5,2.243,5,5v0.85v0.756l0.727,0.206C54.72,12.359,61,20.661,61,30v24   c0,4.625,3.506,8.446,8,8.945V69H11v-6.055c4.494-0.499,8-4.32,8-8.945V30c0-9.339,6.28-17.641,15.273-20.188L35,9.606V8.85V8   C35,5.243,37.243,3,40,3 M40,2c-3.314,0-6,2.686-6,6c0,0.199,0,0.506,0,0.85C24.77,11.464,18,19.933,18,30v24c0,4.418-3.582,8-8,8   v8h60v-8c-4.418,0-8-3.582-8-8V30c0-10.067-6.77-18.536-16-21.15c0-0.344,0-0.651,0-0.85C46,4.686,43.314,2,40,2L40,2z"/>
</g>
</svg>



                        <h4 class="relative mt-6 text-lg font-bold">Crear recordatorios</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Podrás crear recordatorios para cada asignatura</p>
                        <a href="{{ route('reminders') }}" class="relative flex mt-2 text-sm font-medium underline self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-black bg-pink-200 ">Ver mis recordatorios</a>
                    </div>
                </div>

                <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
                    <div class="relative flex flex-col items-center justify-center ">
                       
                        <!-- FEATURE Icon 3 -->
                       
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<path d="M160,256H96v-64h64V256z M288,192h-64v64h64V192z M416,192h-64v64h64V192z M160,288H96v64h64V288z M288,288h-64v64h64V288z    M416,288h-64v64h64V288z M160,384H96v64h64V384z M288,384h-64v64h64V384z M128,96c17.672,0,32-14.313,32-32V32   c0-17.688-14.328-32-32-32S96,14.313,96,32v32C96,81.688,110.328,96,128,96z M512,64v448H0V64h80c0,26.469,21.531,48,48,48   c26.469,0,48-21.531,48-48h160c0,26.469,21.531,48,48,48s48-21.531,48-48H512z M480,160H32v320h448V160z M384,96   c17.688,0,32-14.313,32-32V32c0-17.688-14.312-32-32-32s-32,14.313-32,32v32C352,81.688,366.312,96,384,96z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                        <h4 class="relative mt-6 text-lg font-bold">Calendario escolar</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">Para un mejor control en la organización</p>
                        <a href="" class="relative flex mt-2 text-sm font-medium underline self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-black bg-pink-200 ">Ver calendario</a>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END FEATURES SECTION -->

  


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
</body>
</html>
</x-app-layout>
