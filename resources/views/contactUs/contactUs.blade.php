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
        <div class="container px-6 py-12 mx-auto">
            <div class="text-center ">
                <h1 class="mt-2 text-3xl font-bold text-blue-800 md:text-3xl dark:text-white">We’d love to hear from you</h1>

                <p class="mt-3 text-gray-500 dark:text-gray-400">Chat to our friendly team.</p>
            </div>

            <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-8 mx-auto w-11/12">

            <!-- Yangon Content -->
            <div class="text-center mt-16">
                <h1 class="mt-2 text-2xl font-semibold text-blue-800 md:text-3xl dark:text-white">For Yangon</h1>

                <img class="object-cover w-full sm:h-full mt-10 rounded-lg lg:h-120" src="{{asset('images/contactUs/shwedagonPagoda.jpg')}}" alt="">

                <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3 sm:grid-cols-2 ">
                    <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                        <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Email</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Speak to our friendly team.</p>
                        <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">mdo-fil@fortunemm.com</p>
                        <p class="text-black-700 mt-2 text-sm">For enquiries: <span class="mt-2 text-sm text-blue-500 dark:text-blue-400">info@fortunemm.com</span></p>
                    </div>

                    <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                        <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Location</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Yangon (Head Office)</p>
                        <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Building 12, MICT Park Hlaing Campus, Hlaing Township, Yangon Myanmar</p>
                    </div>

                    <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                        <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Call us</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                        <p class="text-black-700 mt-2 text-sm">Tel: <span class="text-sm text-blue-500 dark:text-blue-400">+95 (01) 230 5250 - 57</span></p>
                        <p class="text-black-700 mt-2 text-sm">Fax: <span class="text-sm text-blue-500 dark:text-blue-400">+95 (01) 230 5258 ~ 59</span></p>
                    </div>
                </div>
            </div>

            <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-8 mx-auto w-11/12">

            <!-- Mandalay Content -->
            <div class="text-center mt-16">
                <h1 class="mt-2 text-2xl font-semibold text-blue-800 md:text-3xl dark:text-white">For Mandalay</h1>

                <img class="object-cover w-full sm:h-full mt-10 rounded-lg lg:h-120" src="{{asset('images/contactUs/mandalay.jpg')}}" alt="">

                <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3 sm:grid-cols-2 ">
                    <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                        <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Email</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Speak to our friendly team.</p>
                        <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">mdy-fil@fortunemm.com</p>
                        <p class="text-black-700 mt-2 text-sm">For enquiries: <span class="mt-2 text-sm text-blue-500 dark:text-blue-400">info@fortunemm.com</span></p>
                    </div>

                    <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                        <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Location</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mandalay</p>
                        <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Building C2 & C3, Block 557, 33 Street, Between 81st & 82nd, Aung Nan Yeik Thar (east) Quarter, Chan Aye Thar San Township, Mandalay, Myanmar</p>
                    </div>

                    <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                        <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Call us</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                        <p class="text-black-700 mt-2 text-sm">Tel: <span class="text-sm text-blue-500 dark:text-blue-400">+95 (02) 39631 ~ 32, 24995 - 97</span></p>
                        <p class="text-black-700 mt-2 text-sm">Fax: <span class="text-sm text-blue-500 dark:text-blue-400">+95 (02) 39692</span></p>
                    </div>
                </div>
            </div>

            <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-8 mx-auto w-11/12">

            <!-- Naypyitaw Content -->
            <div class="text-center mt-16">
                <h1 class="mt-2 text-2xl font-semibold text-blue-800 md:text-3xl dark:text-white">For Naypyitaw</h1>

                <img class="object-cover w-full sm:h-full mt-10 rounded-lg lg:h-120" src="{{asset('images/contactUs/naypyitaw.jpg')}}" alt="">

                <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3 sm:grid-cols-2 ">
                    <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                        <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Email</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Speak to our friendly team.</p>
                        <p class="text-black-700 mt-2 text-sm">For enquiries: <span class="mt-2 text-sm text-blue-500 dark:text-blue-400">info@fortunemm.com</span></p>
                    </div>

                    <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                        <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Location</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Naypyitaw</p>
                        <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">No. 139, Thiri Yadana Shopping Complex, Naypyitaw Myanmar</p>
                    </div>

                    <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                        <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Call us</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                        <p class="text-black-700 mt-2 text-sm">Tel: <span class="text-sm text-blue-500 dark:text-blue-400">+95 (067) 421183/84/86, 420949</span></p>
                        <p class="text-black-700 mt-2 text-sm">Fax: <span class="text-sm text-blue-500 dark:text-blue-400">+95 (067) 421184</span></p>
                    </div>
                </div>
            </div>

            <hr class="border-t-2 border-gray-200 dark:border-gray-700 my-8 mx-auto w-11/12">
        </div>
    </section>

</body>

</html>