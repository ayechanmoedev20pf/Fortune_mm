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
                    <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-400 dark:text-black">HOSPITALITY</h2>
                    <p class="mb-4">Fortune is the developer behind the boutique hotel Blue Oceanic Bay, Ngapali Beach, Myanmar’s premier beach destination in Rakhine State on the Bay of Bengal. The resort-style hotel has 22 full-fitted guest rooms and a host of on-site recreational facilities and activities for guests, setting a new standard for Myanmar hospitality.</p>
                    <p class="mb-4">We ensure that our hotel is managed professionally, courteously, and with organizational efficiency, while our guest relations team is committed to providing flawless, upscale guest service experiences, anticipating their needs and exceeding expectations.</p>
                <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-1 lg:py-12 lg:px-6">
                <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-blue-500 dark:text-black">Hospitality</h2>
                    <p class="mb-4">The company developed and constructed Nature Park Residences, a premier residential housing complex in Yangon. With 28 luxury homes in the gated complex, Nature Park provides families with the ultimate suburban living experience, and has become the pinnacle of luxury real estate in Yangon.</p>
                    
            </div>

        </div>
            </div>
            <div class="mb-18 mt-4">
                 <img class="w-full h-full rounded-lg" src="{{ asset('images/businesses/overview/hospitality.jpg') }}" alt="office content 1">
             </div>
         </div>
         
    </section>

    <section class="bg-white dark:bg-white-900 mt-1">


    </section>

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">

    </div>
</body>
</html>