 @include('nav')
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Our Partners</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
 </head>

 <body>

     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center py-6 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-8 lg:px-6">
             <div class="mb-30 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-white">Our Partners</h2>
                 <p class="mb-4">We work with a trusted network of partners and suppliers that are the largest in the business. They are key specialists in their fields who really share their in-depth expertise with us and understand our market. This in return enable us to provide tailor-made products and services to our customers and at the same time, deliver genuine added value to all our offerings.</p>
                 <p>We are grateful to be working with our partners and suppliers who share the same values in enhancing the lives of people in Myanmar.</p>
             </div>
             <div class="mb-28 mt-4">
                 <img class="w-full h-full rounded-lg" src="{{ asset('images/about/hands_puzzle.jpg') }}" alt="our Partner image">
             </div>
         </div>
     </section>

 </body>

 </html>