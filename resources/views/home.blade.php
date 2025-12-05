@include('nav')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
     <style>
        .imgs {
            display: block;
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 1;
            border-radius: 10px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .slide-in-left {
            animation: slideInLeft 5s ease-out forwards;
        }
        
        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-in-right {
            animation: slideInRight 5s ease-out forwards;
        }
        
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
<section class="relative w-full h-[90vh] overflow-hidden">

  <!-- Image 1 -->
  <img src="{{ asset('images/home/slide-01.jpg') }}"
       class="absolute inset-0 w-full h-full object-cover slideshow" />

  <!-- Image 2 -->
  <img src="{{ asset('images/home/slide-02.jpg') }}"
       class="absolute inset-0 w-full h-full object-cover slideshow"
       style="animation-delay: 3s;" />

  <!-- Image 3 -->
  <img src="{{ asset('images/home/slide-03.jpg') }}"
       class="absolute inset-0 w-full h-full object-cover slideshow"
       style="animation-delay: 6s;" />

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Text -->
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
    <h1 class="text-5xl font-bold mb-4">
      Welcome to My Website
    </h1>
    <p class="text-xl max-w-xl">
      Background slideshow with TailwindCSS v4
    </p>
  </div>
</section>


    <div class="items-center py-8 px-4 mx-auto max-w-screen-xl lg:py-12 lg:px-6">
        <div class="text-black-500 sm:text-lg">
            <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-500 dark:text-black animate-fade-up">COMMITMENT TO EXCELLENCE</h2>
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
                <img class="w-[900px] imgs h-96 rounded-lg slide-in-left" src="{{ asset('images/home/about-01.jpg')}}" alt="office content 1">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-white-900 mt-5">
        <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <div class="mb-28 mt-4">
                <img class="w-[900px] imgs h-96 rounded-lg slide-in-right" src="{{ asset('images/home/businesses.jpg') }}" alt="office content 1">
            </div>
            <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-black">Businesses</h2>
                <p class="mb-4 text-black-500">Fortune is one of Myanmar’s leading diversified companies. With operations in communications, agriculture, health care, and construction, we are contributing to the country’s fundamental development as it goes through unparalleledcompany/our-partners/ socio-economic changes</p>
                <a href="/businesses/overview"><button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">See More</button></a>
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
                
                <a href="/our-partners"><button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">See More</button></a>
            </div>
            <div class="mb-28 mt-4">
                <img class="w-[900px] imgs h-96 rounded-lg slide-in-left" src="{{ asset('images/home/partners.jpg')}}" alt="office content 1">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-white-900 mt-5">
        <div class="gap-16 items-center py-5 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <div class="mb-28 mt-4">
                <img class="w-[900px] imgs h-96 rounded-lg slide-in-right" src="{{ asset('images/home/hiring.jpg') }}" alt="office content 1">
            </div>
            <div class="font-light text-black-500 sm:text-lg dark:text-black-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-700 dark:text-black">We Are Hiring</h2>
                <p class="mb-4 text-black-500">Fortune International’s talents are the company’s greatest assets. Weemploy some of the best experts in their fields, who in turn support our business units. Our employees include veterinary specialists, installation and maintenance specialists, pharmacists, broadband and more</p>
                <a href="/jobs"><button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">See More</button></a>
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

                <a href="/contactUs"><button type="button" class="mt-3 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">See More</button></a>
            </div>
            <div class="mb-28 mt-4">
                <img class="w-[900px] imgs h-96 rounded-lg slide-in-left" src="{{ asset('images/home/partners.jpg')}}" alt="office content 1">
            </div>
        </div>
    </section>
    

<footer class="bg-white dark:bg-gray-900 mb-2">

    <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2025 <a href="https://flowbite.com/">Fortune</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
        </div>
      </div>
    </div>
</footer>

</body>

</html>