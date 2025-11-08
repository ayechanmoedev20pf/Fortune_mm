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
                    <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-400 dark:text-black">ENERGY</h2>
                    <p class="mb-4">Fortune International Limited has consistently been looking for new opportunities to support Myanmar economic development and has now expanded our business into energy sector as Han Yoma Energy</p>
                <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-1 lg:py-12 lg:px-6">
                <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-blue-500 dark:text-black">Energy</h2>
                    <p class="mb-4">HanYoma Energy is a Power Operation & Maintenance service provider in myanmar since January 2018. We monitor and control power 24/7 for tower sites of mobile operators We offer full power supply management services to ensure sustainability and reliability for our clients</p>
                    
            </div>

        </div>
            </div>
            <div class="mb-18 mt-4">
                 <img class="w-full h-full rounded-lg" src="{{ asset('images/businesses/overview/energy.jpg') }}" alt="office content 1">
             </div>
         </div>
         
    </section>

    <section class="bg-white dark:bg-white-900 mt-1">


    </section>

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">

    </div>
</body>
</html>