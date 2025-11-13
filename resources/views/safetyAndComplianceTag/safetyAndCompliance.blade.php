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

     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
             <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-white">Safety And Compliance</h2>
                 <p class="mb-4">Workplace Safety is one of Fortune International’s key risk management and regulatory compliance focus areas. The company promotes safe and environmentally sound work practices that advance our mission and interests, and to minimize the risk of injury and potential downtime.</p>
                 <p class="mb-4">We ensure our subsidiary companies uphold our Safety and Health Strategy, and demand that all employees comply with standards, rules, regulations, and orders in this area, which include: basic safety orientation, hazard communication, personal protective equipment, respiratory protection, hearing protection, good safety practices and basic electrical safety. Fortune is also looking at moving from point solutions at plant-level to rolling out enterprise-wide safety management systems, which can provide enterprise-wide visibility into incidents and tends, corrective actions and process metrics.</p>
             </div>
             <div>
                 <img class="w-full h-80 rounded-lg" src="{{ asset('images/safetyAndCompliance/safety.jpg') }}" alt="safety content 1">
             </div>
         </div>
     </section>

 </body>

 </html>