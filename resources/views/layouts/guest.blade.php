<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65" height="82" viewBox="0 0 65 82" fill="none">
<rect width="45" height="73" fill="url(#pattern0)"/>
<defs>
<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
<use xlink:href="#image0_206_3" transform="matrix(0.00560684 0 0 0.00444444 -0.130769 0)"/>
</pattern>
<image id="image0_206_3" width="225" height="225" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEUAAAD///9MTEy5ubl7e3tiYmJnZ2c3Nze3t7eZmZmioqKWlpYhISGoqKg6Ojrz8/NXV1dycnLW1taCgoJcXFxvb2/Pz8/q6uq/v7/19fWrq6tPT0/e3t6MjIwbGxsqKioREREoKCgLCwtrqvFlAAAEiElEQVR4nO2dW5OiQAxGcUQFRQSvg/eZ//8jd+dhdxE0aUiHjlvfeU1h5ZQl2El3iEYyqmSbRVlxXD2PHn+i2yUZPVZPo6tjQUTdiWSXL6M/zD1H53+jS1mKMsM4+seuFS0F0V0tGotyFBleojobMtpMc0Ne+xi9SJKUGO6jR/Zq0bUgS4nhtpFH/hAtGtGPh+hHI1o8RPNGdCvIUmC4ipocatGD1+jzm7ETAsPPVh4JGf10jiZktCMCw2Mrj/p9fU5Gl63onIwe+6cpMGw7pLVo2oouatEFGW1f++yJ6QgMCWAIQxjC0BEYEsAQhvYN6f+WXf1T8lpBJYM3HMen2TPyrJVHlg8QrXOKx2LD9hdlDe7rpQ2rSej8HZjQ9UbasFmJsElBOpCG7V+8Tcg7LWXYLsRYhSrjUIbj0Ik7Q91RKcMd/9FGaNfM3Qyb9VC7UPVUyrBZtbXLB2EBw/cAhjC0DwxhaB8YwtA+MIShfWAIQ/vAEIb2gSEM7QNDGNoHhjC0DwxhaB8YwtA+MIShfWAIQ/vAEIb2gaHM8JpvJ1ps82tww92e+AAf7F328Soaavv90BywMKTh94G42h+H72CGknEVXViHMmwOJNFjw2SiZXj2LfKScxjDmW8PglkQw6lvDYJpEEPR5J+OMD9EJUPZ+KZulHQqSobUx/pGkIrkXioY/NMR7hSdlqFwkFoHuLO6WoaZdByeK1X76PMwhszxVH+wh3X11hbDPBKZh6GqYXQTDOFy5PPGp6G7xr8sk7EWyfLCJ6BuaAEYwtA+MIShfWAIQ/vAUGY4K6Z6FEwZcQDDUrmyX62ZIpS24RCdC7ZroWh4H6YWtboHM0TvyRvoPaH39Ar0nnxrEDAFKSXD0rcGAXpPxKXoPVH8/72n61Bf4orb3ab2r03y+pcusAMc9dYWE98uT+FH/SqunrIBek9ce1TX8PcKajNX7D3NN3eXJFCngaF9YAhD+8AQhvaBIQxpbpNYj4nDli9lw1K7LHwO23u6D1H2Pt/DGWYD9Z7YFSJ6T69A7wm9J4+g90Rcit4TAXpPPgnUexrmnPMP7ZetD2MoeLFkR7gXwKH39AqcexpKkX8Lo+L68DrWPqFXjR2Gf6iu8b/KVLH3lJZfLkmgTgND+8AQhvaBIQztA0MY0nwX3dpJBTubzJZh3KMsfI7fxzDr2blYu7UFwxv2L2Pw7SQbhoLGBdeJsGEoKnq7jfQIbCjqPXElUAuGwt4TX18KbriTGfp8ZNjsPfn8IdrsPb3BdyjsPfFnDIIbynpP3FEmE4ai3tPxHQxFvSefgnr/2k79BX0+DTXXFqeefZnK521G1TD6SvoIJp4XT7pr/Os0TTqRTv2unNQNTQBDGNoHhjC0DwxhaB8YwtA+MIShfWAIQ/vAEIb2gSEM7QNDGNoHhjC0T19Dv51oTahzkJQh/0Y3K1DDDyhDbratHah5v5Sh1w2SqlB7lyhDdmiKFcgxMqThyP+eAg0y0oE2PPjeFqLBjd5fRxuOVi6TtsJSMnvPGMPR6LzIHY6LB+KaL9jN5r8Ar4994RPv5KUAAAAASUVORK5CYII="/>
</defs>
</svg>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
