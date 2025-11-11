@include('nav')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="m-8">
        <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-[900px] overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/home/slide-01.jpg') }}" class="absolute block w-full h-[1500px]  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/home/slide-02.jpg') }}" class="absolute block w-full h-[1500px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/home/slide-03.jpg') }}" class="absolute block w-full h-[1500px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
        <div class="text-black-500 sm:text-lg">
            <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-500 dark:text-black">COMMITMENT TO EXCELLENCE</h2>
                <p class="mb-4">Fortune International is a privately held group in Myanmar with a
                    portfolio of companies delivering quality products and services across a range of
                    industries. What unites our company is a commitment to excellence across all our
                    businesses.</p>
        </div>
    </div>

    <section class="bg-white dark:bg-white-900 mt-5">
        <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-black">About Us</h2>
                <p class="mb-4 text-black-500">Fortune International is a privately held group in Myanmar with a portfolio of companies delivering quality products and services across a range of industries. What unites our company is a commitment to excellence across all our businesses.</p>
                <a href="/about"><button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">See More</button></a>
            </div>
            <div class="mb-28 mt-4">
                <img class="w-[500px] h-96 rounded-lg" src="{{ asset('images/home/about-01.jpg')}}" alt="office content 1">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-white-900 mt-5">
        <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <div class="mb-28 mt-4">
                <img class="w-[500px] h-96 rounded-lg" src="{{ asset('images/home/businesses.jpg') }}" alt="office content 1">
            </div>
            <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-black">Businesses</h2>
                <p class="mb-4 text-black-500">Fortune is one of Myanmar’s leading diversified companies. With operations in communications, agriculture, health care, and construction, we are contributing to the country’s fundamental development as it goes through unparalleledcompany/our-partners/ socio-economic changes</p>
                <a href="/businesses"><button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">See More</button></a>
            </div>

        </div>
    </section>

    <section class="bg-white dark:bg-white-900 mt-5">
        <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-black">Our Partners</h2>
                <p class="mb-4 text-black-500">We work with a trusted network of partners and suppliers that are the
                    largest in the business. They are key specialists in their fields who really share
                    their
                    in-depth expertise with us and understand our market. This in return enable us to
                    provide tailor-made products and services to our customers</p>
                <a href="/about"><button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">See More</button></a>
            </div>
            <div class="mb-28 mt-4">
                <img class="w-[500px] h-96 rounded-lg" src="{{ asset('images/home/partners.jpg')}}" alt="office content 1">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-white-900 mt-5">
        <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <div class="mb-28 mt-4">
                <img class="w-[500px] h-96 rounded-lg" src="{{ asset('images/home/hiring.jpg') }}" alt="office content 1">
            </div>
            <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-black">We Are Hiring</h2>
                <p class="mb-4 text-black-500">Fortune International’s talents are the company’s greatest assets. Weemploy some of the best experts in their fields, who in turn support our business units. Our employees include veterinary specialists, installation and maintenance specialists, pharmacists, broadband and more</p>
                <a href="/businesses"><button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">See More</button></a>
            </div>

        </div>
    </section>

    <section class="bg-white dark:bg-white-900 mt-5">
        <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-black">Get in Touch</h2>
                    <div class="">
                        Yangon (Head Office)
                        <br>
                        Building 12, MICT Park Hlaing Campus, Hlaing Township, Yangon Myanmar
                        <br>
                        <div class="d-flex mr-2 mw-40">Tel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +95 (01) 230 5250 - 57 </div>
                        <div class="d-inline-block mr-2 mw-40">Fax &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +95 (01) 230 5258 ~ 59</div>
                        <div class="d-inline-block mr-2 mw-40">Email &nbsp;&nbsp;&nbsp; <a href="mailto:mdo-fil@fortunemm.com">mdo-fil@fortunemm.com</a></div>
                    </div>
                </div>

                <a href="/about"><button type="button" class="mt-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">See More</button></a>
            </div>
            <div class="mb-28 mt-4">
                <img class="w-[500px] h-96 rounded-lg" src="{{ asset('images/home/partners.jpg')}}" alt="office content 1">
            </div>
        </div>
    </section>
</body>

</html>