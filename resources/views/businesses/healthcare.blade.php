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
                    <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-400 dark:text-black">HEALTHCARE & PHARMACEUTICAL PRODUCTS</h2>
                    <p class="mb-4">Fortune offers a range of pharmaceutical products that contribute to the development of Myanmar’s healthcare system.</p>
                <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-1 lg:py-12 lg:px-6">
                <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-blue-500 dark:text-black">Healthcare & Pharmaceutical Products</h2>
                    <p class="mb-4">From the registration of new pharmaceutical formulae and products with health authorities to the distribution of finished medical products, Fortune strives to accommodate the growing demand for better healthcare in the country.</p>
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-blue-500 dark:text-black">We are proud to offer the following pharmaceutical products:</h2>
                    <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
                        <li class="mt-1">Hepasel potent anti-hepatitis and liver protector (Beijing Union)</li>
                        <li class="mt-1">Human Albumin 20% low salt (CSL Behring)</li>
                        <li class="mt-1">Livovax-B recombinant hepatitis B vaccine (Ministry of Industry 1)</li>
                    </ul>
                    
            </div>

        </div>
            </div>
            <div class="mb-18 mt-4">
                 <img class="w-full h-full rounded-lg" src="{{ asset('images/businesses/overview/healthcare.jpg') }}" alt="office content 1">
             </div>
         </div>
         
    </section>

    <section class="bg-white dark:bg-white-900 mt-1">


    </section>

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">

    </div>
</body>
</html>