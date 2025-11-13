 @include('nav')
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>About Us</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
 </head>

 <body>
     <!-- SERVICE EXCELLENCE Content -->
     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
             <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-white">Service Excellence</h2>
                 <p class="mb-4">We believe that every experience customers have with the company impacts what they think of our brand, and drives return on investment. As such, Fortune International’s customer service is at the frontline of this experience. Our Service Excellence Framework provides a development roadmap for our organization, so our companies can create and define their desired service experience. We focus on the following areas:</p>
             </div>
             <div>
                 <img class="w-full h-100 rounded-lg" src="{{ asset('images/serviceTag/service.jpg') }}" alt="office content 1">
             </div>
         </div>
     </section>

     <section class="bg-white dark:bg-gray-900">
         <div class="py-4 px-4 mx-auto max-w-screen-xl item-center">
             <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <!-- Communication Content -->
                 <h2 class="mb-4 text-2xl tracking-tight font-semibold text-blue-700 dark:text-white">Communication</h2>
                 <p class="mb-4">The key to our service excellence is first-rate communication, which aims at consistency, honesty, and respect in our interactions with customers. We engage with customers in an open way and aim to establish trust and win-win outcomes. We do this by first listening, then responding to their needs before proposing any solution, and without trying to push any product or feature.</p>

                 <!-- Continuous Improvement & Innovation Content -->
                 <h2 class="mb-4 text-2xl tracking-tight font-semibold text-blue-700 dark:text-white">Continuous Improvement & Innovation</h2>
                 <p class="mb-4">Fortune International’s Continuous Improvement & Innovation process aims to raise the standards of service excellence across the organization by achieving regular and frequent innovations and improvements that deliver new customer value in the marketplace, and provide service that goes beyond expectations.</p>

                 <!-- Call Center Content -->
                 <h2 class="mb-4 text-2xl tracking-tight font-semibold text-blue-700 dark:text-white">Call Center</h2>
                 <p class="mb-4">Fortune’s call center provides round-the-clock information, technical assistance, and sales support to our broadband customers. We’re committed to providing the best service, and each customer care agent is fully trained to help you with any questions you have about any of our broadband products and services.</p>
             </div>
         </div>
     </section>

 </body>

 </html>