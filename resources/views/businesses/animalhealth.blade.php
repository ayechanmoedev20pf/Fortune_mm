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
                    <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-400 dark:text-black">ANIMAL HEALTH</h2>
                    <p class="mb-4">Fortune’s animal health business works to improve animal health and welfare – the role pets play in Myanmar is becoming more significant, and farm animals supply the country with food.</p>
                <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-1 lg:py-12 lg:px-6">
                <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-blue-500 dark:text-black">Animal Health</h2>
                    <p class="mb-4">For companion animals, Fortune supplies and distributes a range of veterinary medicines, pet food, and provides technical assistance for vets and owners to ensure the lifelong wellbeing of their beloved companions.</p>
                    <p class="mb-4">Fortune also plays a leading role in enriching the livelihood of Myanmar’s farm animals, offering innovative feed additives, medicines, and solutions to optimise their health and productivity, as well as for disease prevention and treatment.</p>
                    <p class="mb-4">The company is also proud to have established a partnership with Neovia, a world leader in animal nutrition and care.</p>
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-blue-500 dark:text-black">Our current activities in the sector regarding Livestock and Companion include:</h2>
                    <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
                        <li class="mt-1">Distribution of veterinary medicines and feed additives (Zoetis)</li>
                        <li class="mt-1">Production and distribution of animal health products (FCL)</li>
                        <li class="mt-1">Distribution of pet food (Royal Canin)</li>
                        <li class="mt-1">Distribution of pet healthcare supplements and products (Zenex)</li>
                        <li class="mt-1">Distribution of Livestock disinfectant (Huvepharma,Zagro)</li>
                        <li class="mt-1">Provision technical advice to dog breeding farms</li>
                        <li class="mt-1">Provision of technical assistance to livestock and poultry</li>
                        <li class="mt-1">Supply of veterinary pharmaceuticals to Ministry of Livestock and Fisheries</li>
                    </ul>
                    
            </div>

        </div>
            </div>
            <div class="mb-18 mt-4">
                 <img class="w-full h-full rounded-lg" src="{{ asset('images/businesses/overview/animal-health.jpg') }}" alt="office content 1">
             </div>
         </div>
         
    </section>

    <section class="bg-white dark:bg-white-900 mt-1">


    </section>

    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">

    </div>
</body>
</html>