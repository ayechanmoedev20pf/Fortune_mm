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
                    <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-400 dark:text-black">ELEVATORS & ESCALATORS</h2>
                    <p class="mb-4">The elevator and escalator business has been the bread and butter of Fortune since its inception in 1991. With over 900 clients and over 1,995 units installed and serviced, the company is an established market leader, and Fortune’s name is synonymous with escalators and elevators in Myanmar.</p>
                <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-1 lg:py-12 lg:px-6">
                <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-blue-500 dark:text-black">
Elevators & Escalators</h2>
                    <p class="mb-4">The company is the sole agent and distributor of Sigma Elevators Company (formerly LG Industrial Systems Co. Ltd.), Suzhou Fuji Lift Co., Ltd. and Hyundai Elevator Co., Ltd. Fortune’s product range in this area includes passenger elevators, observation elevators, stretcher elevators, service elevators, dumb waiters, escalators, and moving walkways.</p>
            </div>

        </div>
            </div>
            <div class="mb-18 mt-4">
                 <img class="w-full h-full rounded-lg" src="{{ asset('images/businesses/overview/elevators.jpg') }}" alt="office content 1">
             </div>
         </div>
         
    </section>

    <section class="bg-white dark:bg-white-900 mt-1">


    </section>

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">

    </div>
</body>
</html>