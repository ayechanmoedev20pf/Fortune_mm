@include('nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
             <div class="text-black-500 sm:text-lg">
                    <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-400 dark:text-black">COMMUNICATION SYSTEMS</h2>
                    <p class="mb-4">Fortune is the leading telecommunications equipment provider in Myanmar, the world’s fastest growing telecom market. Fortune has supported the development of the country’s telecoms network, which has been critical to the country’s overall socio-economic development.</p>
                <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-1 lg:py-12 lg:px-6">
                <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-blue-500 dark:text-black">Communication Systems</h2>
                    <p class="mb-4">The company has over 21 years of experience and technical know-how in this field, delivering unparalleled service and quality since 1991, including the installation of rural, main, and remote exchanges in more than 70 cities across the country. Fortune has also been involved in turnkey projects with public and private sectors to create modern telecommunication networks that have connected all of Myanmar’s populations.</p>
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-blue-500 dark:text-black">We are proud to offer the following pharmaceutical products:</h2>
                    <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
                        <li class="mt-1">HHytera (Two Way Radio and Trunking System)</li>
                        <li class="mt-1">LG-Ericsson (IP-PABX)</li>
                        <li class="mt-1">Heng Tong (Fiber Optic Cables and Accessories)</li>
                        <li class="mt-1">Shenou (PABX)</li>
                    </ul>
                    
            </div>

        </div>
            </div>
            <div class="mb-18 mt-4">
                 <img class="w-full h-full rounded-lg" src="{{ asset('images/businesses/overview/comunication.png') }}" alt="office content 1">
             </div>
         </div>
         
    </section>

    <section class="bg-white dark:bg-white-900 mt-1">


    </section>

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">

    </div>
</body>
</html>