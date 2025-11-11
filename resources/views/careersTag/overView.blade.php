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
     <!-- Careers Overview Content -->
     <section class="bg-white dark:bg-gray-900">
         <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
             <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-white">Careers Overview</h2>
                 <p class="mb-4">Fortune International’s talents are the company’s greatest assets. We employ some of the best experts in their fields, who in turn support our business units. Our employees include doctors, pharmacists, veterinarians, installation and maintenance engineers, broadband and telecommunications technicians, sales and marketing specialists, and more. Their global experience and international outlook reflects the company’s global nature.</p>
             </div>
             <div>
                 <img class="w-full h-full rounded-lg" src="{{ asset('images/careers/hiringOne.jpg') }}" alt="office content 1">
             </div>
         </div>
     </section>

     <section class="bg-white dark:bg-gray-900">
         <div class="py-4 px-4 mx-auto max-w-screen-xl item-center">
             <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                 <!-- Overview Content -->
                 <h2 class="mb-4 text-3xl tracking-tight font-semibold text-blue-700 dark:text-white">Overview</h2>
                 <p class="mb-4">What unites us is that we work as a team to deliver the best experience for our clients – every one of us comes to work to do what we love, and this creates powerful lasting memories with whomever we interact with.</p>
                 <p class="mb-4">As our wonderful teams work hard to improve the lives of others, we do our best to take care of them as well. We support their growth and development of their careers, and provide opportunities for personal and professional growth. Social harmony is women into Fortune International’s culture, and we work hard and play hard together.</p>

                 <!-- What We Offer Content -->
                 <h2 class="mb-4 text-3xl tracking-tight font-semibold text-blue-700 dark:text-white">What We Offer</h2>
                 <p>All employees enjoy the following benefits:</p>
                 <ul class="mb-4 list-disc space-y-2 text-gray-500 dark:text-gray-400">
                     <li>Overtime Allowance</li>
                     <li>Transportation Allowance</li>
                     <li>Meal Allowance</li>
                     <li>Leave Entitlement</li>
                 </ul>

                 <h2 class="mb-4 text-3xl tracking-tight font-semibold text-blue-700 dark:text-white">How to Apply</h2>
                 <p>A career with Fortune is challenging, dynamic and fulfilling. Whatever your ambitions, Fortune International is committed to helping you reach your goals, and is committed to ensuring you have the opportunities to develop your career and capabilities.</p>
                 <p>Fortune International is growing at a rapid pace, and the organization seeks top-quality candidates to fulfill a range of operations and maintenance roles, as well as executive and managerial positions. We have opportunities available for students, graduates or experienced professionals. Interested applicants are required to send with CV (1) passport size recent photo, copies of NRC card, polices clearance, copies of Graduation certificate and other relevant educational documents to the email address <b>hr-fil@fortunemm.com</b> and <b>mdo-fil@fortunemm.com</b></p>
             </div>
         </div>
     </section>

 </body>

 </html>