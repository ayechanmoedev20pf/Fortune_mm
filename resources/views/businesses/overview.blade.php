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
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
        <div class="text-black-500 sm:text-lg">
            <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-500 dark:text-black">OVERVIEW</h2>
            <p class="mb-4">Fortune is one of Myanmar’s leading diversified companies. With operations in communication systems, broadcasting, and elevators & escalators, we are contributing to the country’s fundamental development as it goes through unparalleled socio-economic changes.</p>
        </div>
    </div>


<div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 ml-16 centered">
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/animal-health.jpg') }}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/animalhealth">ANIMAL HEALTH</a></li></ul>
    </div>
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/healthcare.jpg')}}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/healthcare">HEALTHCARE & PHARMACEUTICAL PRODUCTS</a></li></ul>
    </div>
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/comunication.png')}}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/communicationsystems">COMMUNICATION SYSTEMS</a></li></ul>
    </div>
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/broadband.jpg')}}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/broadband">BROADBAND</a></li></ul>
    </div>
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/broadcasting.jpg')}}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/broadcasting">BROADCASTING</a></li></ul>
    </div>
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/elevators.jpg')}}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/elevators&escalators">ELEVATORS & ESCALATORS</a></li></ul>
    </div>
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/construction.jpg')}}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/construction">CONSTRUCTION</a></li></ul>
    </div>
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/hospitality.jpg')}}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/hospitality">HOSPITALITY</a></li></ul>
    </div>
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/energy.jpg')}}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/energy">ENERGY</a></li></ul>
    </div>
    <div>
        <img class="h-64 w-96 rounded-lg" src="{{ asset('images/businesses/overview/manufacturing.png')}}" alt="">
        <ul class="max-w-md space-y-1 text-blue-700 list-disc list-inside dark:text-blue-700">
            <li class="text-center mt-1">
                <a href="/manufacturing">MANUFACTURING</a></li></ul>
    </div>
</div>

</body>
</html>