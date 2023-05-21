<nav x-data="{ open: false }" class="bg-pink-100 dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
        
        
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65" height="82" viewBox="0 0 65 82" fill="none">
<rect width="45" height="73" fill="url(#pattern0)"/>
<defs>
<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
<use xlink:href="#image0_206_3" transform="matrix(0.00560684 0 0 0.00444444 -0.130769 0)"/>
</pattern>
<image id="image0_206_3" width="225" height="225" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEUAAAD///9MTEy5ubl7e3tiYmJnZ2c3Nze3t7eZmZmioqKWlpYhISGoqKg6Ojrz8/NXV1dycnLW1taCgoJcXFxvb2/Pz8/q6uq/v7/19fWrq6tPT0/e3t6MjIwbGxsqKioREREoKCgLCwtrqvFlAAAEiElEQVR4nO2dW5OiQAxGcUQFRQSvg/eZ//8jd+dhdxE0aUiHjlvfeU1h5ZQl2El3iEYyqmSbRVlxXD2PHn+i2yUZPVZPo6tjQUTdiWSXL6M/zD1H53+jS1mKMsM4+seuFS0F0V0tGotyFBleojobMtpMc0Ne+xi9SJKUGO6jR/Zq0bUgS4nhtpFH/hAtGtGPh+hHI1o8RPNGdCvIUmC4ipocatGD1+jzm7ETAsPPVh4JGf10jiZktCMCw2Mrj/p9fU5Gl63onIwe+6cpMGw7pLVo2oouatEFGW1f++yJ6QgMCWAIQxjC0BEYEsAQhvYN6f+WXf1T8lpBJYM3HMen2TPyrJVHlg8QrXOKx2LD9hdlDe7rpQ2rSej8HZjQ9UbasFmJsElBOpCG7V+8Tcg7LWXYLsRYhSrjUIbj0Ik7Q91RKcMd/9FGaNfM3Qyb9VC7UPVUyrBZtbXLB2EBw/cAhjC0DwxhaB8YwtA+MIShfWAIQ/vAEIb2gSEM7QNDGNoHhjC0DwxhaB8YwtA+MIShfWAIQ/vAEIb2gaHM8JpvJ1ps82tww92e+AAf7F328Soaavv90BywMKTh94G42h+H72CGknEVXViHMmwOJNFjw2SiZXj2LfKScxjDmW8PglkQw6lvDYJpEEPR5J+OMD9EJUPZ+KZulHQqSobUx/pGkIrkXioY/NMR7hSdlqFwkFoHuLO6WoaZdByeK1X76PMwhszxVH+wh3X11hbDPBKZh6GqYXQTDOFy5PPGp6G7xr8sk7EWyfLCJ6BuaAEYwtA+MIShfWAIQ/vAUGY4K6Z6FEwZcQDDUrmyX62ZIpS24RCdC7ZroWh4H6YWtboHM0TvyRvoPaH39Ar0nnxrEDAFKSXD0rcGAXpPxKXoPVH8/72n61Bf4orb3ab2r03y+pcusAMc9dYWE98uT+FH/SqunrIBek9ce1TX8PcKajNX7D3NN3eXJFCngaF9YAhD+8AQhvaBIQxpbpNYj4nDli9lw1K7LHwO23u6D1H2Pt/DGWYD9Z7YFSJ6T69A7wm9J4+g90Rcit4TAXpPPgnUexrmnPMP7ZetD2MoeLFkR7gXwKH39AqcexpKkX8Lo+L68DrWPqFXjR2Gf6iu8b/KVLH3lJZfLkmgTgND+8AQhvaBIQztA0MY0nwX3dpJBTubzJZh3KMsfI7fxzDr2blYu7UFwxv2L2Pw7SQbhoLGBdeJsGEoKnq7jfQIbCjqPXElUAuGwt4TX18KbriTGfp8ZNjsPfn8IdrsPb3BdyjsPfFnDIIbynpP3FEmE4ai3tPxHQxFvSefgnr/2k79BX0+DTXXFqeefZnK521G1TD6SvoIJp4XT7pr/Os0TTqRTv2unNQNTQBDGNoHhjC0DwxhaB8YwtA+MIShfWAIQ/vAEIb2gSEM7QNDGNoHhjC0T19Dv51oTahzkJQh/0Y3K1DDDyhDbratHah5v5Sh1w2SqlB7lyhDdmiKFcgxMqThyP+eAg0y0oE2PPjeFqLBjd5fRxuOVi6TtsJSMnvPGMPR6LzIHY6LB+KaL9jN5r8Ar4994RPv5KUAAAAASUVORK5CYII="/>
</defs>
</svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-nav-link>

                
                    <x-nav-link :href="route('asignaturas')" :active="request()->routeIs('asignaturas') ">
                        {{ __('Asignaturas') }}
                    </x-nav-link>
                   
                    <x-nav-link :href="route('notas')" :active="request()->routeIs('notas')">
                        {{ __('Notas') }}
                    </x-nav-link>
                    <x-nav-link :href="route('reminders')" :active="request()->routeIs('reminders')">
                        {{ __('Recordatorios') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('calendario')" :active="request()->routeIs('calendario')">
                        {{ __('Calendario') }}
                    </x-nav-link>
                </div>
            </div>
            

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit') ">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

     

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>

</nav>
