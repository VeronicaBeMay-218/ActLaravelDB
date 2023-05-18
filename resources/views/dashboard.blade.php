<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[url('/img/img4.svg')] dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" md:text-center p-6 text-gray-900 dark:text-gray-100">
                    {{ __("¡Bienvenido al portal de conocimiento académico!") }}
<br>
                    {{ __("Aquí encontrarás el material que te ayudará a alcanzar tus metas académicas.") }}
                    
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Podra hacer lo siguiente:</h1>
                    <h1>1. Registrar una nueva nota seleccionando la asignatura y el tema</h1>
                    <h1>2. Crear recordatorios</h1>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
