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
     <!-- Corporate Citizenship Content -->
     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center pt-6 px-4 mx-auto max-w-screen-xl lg:pt-8 lg:px-6">
             <div class="mb-10 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-white">Corporate Citizenship</h2>
                 <p>A commitment to corporate and social responsibility drives our business practices and outreach efforts. We plan carefully and aim for the sustainable development and long-term impact of all our contributions, and are highly committed to sustainable projects that align with the values of the company, particularly in the following areas.</p>
             </div>
         </div>
     </section>

     <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-4 mx-auto w-11/12">

     <!-- Environment Content -->
     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center pt-2 px-2 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:pt-2 lg:px-6">
             <div class="mb-15 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-3xl tracking-tight font-bold text-blue-700 dark:text-white">Environment</h2>
                 <p>The company is committed to achieving environmentally sustainable growth among its businesses by investing in transformative solutions, and works to raise awareness of environmental sustainability in Myanmar.</p>
             </div>
             <div class="mb-28 -mt-16 lg:mt-0 lg:ml-80">
                 <img class="w-30 h-30 rounded-lg" src="{{ asset('images/about/environment-icon.svg') }}" alt="our Partner image">
             </div>
         </div>
     </section>

     <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-4 mx-auto w-11/12">

     <!-- Education Content -->
     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center pt-2 px-2 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:pt-2 lg:px-6">
             <div class="mb-15 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-3xl tracking-tight font-bold text-blue-700 dark:text-white">Education</h2>
                 <p>Our CSR education program aims at raising the productivity of the country’s workforce by developing technology and skills capability among Myanmar youth, as well as opening by improving access to quality education so they can achieve their potential.</p>
             </div>
             <div class="mb-28 -mt-16 lg:mt-0 lg:ml-80">
                 <img class="w-30 h-30 rounded-lg" src="{{ asset('images/about/education-icon.svg') }}" alt="our Partner image">
             </div>
         </div>
     </section>

     <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-4 mx-auto w-11/12">

     <!-- Health Content -->
     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center pt-2 px-2 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:pt-2 lg:px-6">
             <div class="mb-15 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-3xl tracking-tight font-bold text-blue-700 dark:text-white">Health</h2>
                 <p>We work with our partners to reduce barriers to healthcare access and efficiency, particularly in remote or impoverished communities.</p>
             </div>
             <div class="mb-18 -mt-16 lg:mt-0 lg:ml-80">
                 <img class="w-30 h-30 rounded-lg" src="{{ asset('images/about/health-icon.svg') }}" alt="our Partner image">
             </div>
         </div>
     </section>

     <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-4 mx-auto w-11/12">

     <!-- Safety Content -->
     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center pt-2 px-2 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:pt-2 lg:px-6">
             <div class="mb-15 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-3xl tracking-tight font-bold text-blue-700 dark:text-white">Safety</h2>
                 <p>The safety and health of our entire workforce, from CEO to new hires, is a top priority for Fortune. We believe that as employers, we have a duty to protect our workers from illness and injury on the job. At the same time, a happy and healthy workforce lowers costs, increases productivity, and raises employee morale.</p>
             </div>
             <div class="mb-18 -mt-16 lg:mt-0 lg:ml-80">
                 <img class="w-30 h-30 rounded-lg" src="{{ asset('images/about/safety-icon.svg') }}" alt="our Partner image">
             </div>
         </div>
     </section>

     <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-4 mx-auto w-11/12">

     <!-- Sport Content -->
     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center pt-2 px-2 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:pt-2 lg:px-6">
             <div class="mb-15 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-3xl tracking-tight font-bold text-blue-700 dark:text-white">Sport</h2>
                 <p>We believe that sport helps develop the character and attitude of young people and shape tomorrow’s leaders. To this end, Fortune has been a strong supporter of the development of sport in Myanmar, particularly the Myanmar Taekwondo Federation and Myanmar Women’s National Football Federation.</p>
             </div>
             <div class="mb-18 -mt-16 lg:mt-0 lg:ml-80">
                 <img class="w-30 h-30 rounded-lg" src="{{ asset('images/about/sport-icon.svg') }}" alt="our Partner image">
             </div>
         </div>
     </section>

     <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-4 mx-auto w-11/12">

     <!-- Community Content -->
     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center pt-2 px-2 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:pt-2 lg:px-6">
             <div class="mb-15 font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-3xl tracking-tight font-bold text-blue-700 dark:text-white">Community</h2>
                 <p>The organization contributes to marginalized communities and groups, and support initiatives that empower them to be self-reliant and independent. Fortune has contributed towards the following groups and projects:</p>
                 <br>
                 <ul class="list-disc space-y-2 text-gray-500 dark:text-gray-400">
                     <li>Fortune has contributed towards misplaced individuals and families due to natural disasters and social crisis</li>
                     <li>Construction of the Khayan Bridge</li>
                     <li>Relief for Cyclone Nargis victims</li>
                 </ul>
             </div>
             <div class="mb-28 -mt-16 lg:mt-0 lg:ml-80">
                 <img class="w-30 h-30 rounded-lg" src="{{ asset('images/about/community-icon.svg') }}" alt="our Partner image">
             </div>
         </div>
     </section>
     <hr class="border-t-2 border-gray-200 dark:border-gray-700 mt-2 mx-auto w-11/12">

 </body>

 </html>