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

    <!-- Banner Image -->
    <div class="container px-6 py-2 mx-auto">
        <img class="object-cover w-full sm:h-full mt-10 rounded-lg lg:h-110" src="{{asset('images/careers/hiring.png')}}" alt="hiring photo">
    </div>

    <!-- Network Engineer and Senior Sales & Marketing Manager (Agri-Vet) Section -->
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <!-- Network Engineer Card -->
            <div class="mb-8 lg:mt-2">
                <div
                    class="group relative cursor-pointer overflow-hidden bg-white px-4 pt-8 pb-8 mt-4 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">

                    <!-- Expanding circle background -->
                    <span class="absolute top-10 z-0 h-16 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>

                    <div class="relative z-10 mx-auto max-w-md text-center">

                        <!-- Image -->
                        <span class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                            <img src="{{asset('images/careers/man.png') }}"
                                alt="man Icon"
                                class="h-8 w-8 transition-all duration-300 group-hover:scale-110" />
                        </span>

                        <!-- Text -->
                        <div class="space-y-6 pt-1 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                            <p class="font-bold text-1xl">Network Engineer</p>
                        </div>

                        <div class="pt-2 text-base font-semibold leading-7">
                            <!-- Button -->
                            <button data-modal-target="networkCard" data-modal-toggle="networkCard" class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Senior Sales & Marketing Manager (Agri-Vet) Card -->
            <div>
                <div
                    class="group relative cursor-pointer overflow-hidden bg-white px-4 pt-8 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">

                    <!-- Expanding circle background -->
                    <span class="absolute top-10 z-0 h-16 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>

                    <div class="relative z-10 mx-auto max-w-md text-center">

                        <!-- Image instead of SVG -->
                        <span class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                            <img src="{{asset('images/careers/man.png') }}"
                                alt="man Icon"
                                class="h-8 w-8 transition-all duration-300 group-hover:scale-110" />
                        </span>

                        <!-- Text -->
                        <div class="space-y-6 pt-1  text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                            <p class="font-bold text-1xl">Senior Sales & Marketing Manager (Agri-Vet)</p>
                        </div>

                        <div class="pt-3 text-base font-semibold leading-7">
                            <!-- Button -->
                            <button data-modal-target="seniorSalesMarketingManagerCard" data-modal-toggle="seniorSalesMarketingManagerCard" class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sale & Marketing Manager (HOD) Section -->
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-12 lg:px-6">
            <!-- Sale& Marketing Manager (HOD) Card -->
            <div>
                <div
                    class="group relative cursor-pointer overflow-hidden bg-white px-4 pt-8 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">

                    <!-- Expanding circle background -->
                    <span class="absolute top-10 z-0 h-16 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>

                    <div class="relative z-10 mx-auto max-w-md text-center">

                        <!-- Image -->
                        <span class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                            <img src="{{asset('images/careers/man.png') }}"
                                alt="man Icon"
                                class="h-8 w-8 transition-all duration-300 group-hover:scale-110" />
                        </span>

                        <!-- Text -->
                        <div class="space-y-6 pt-1  text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                            <p class="font-bold text-1xl">Sale& Marketing Manager (HOD)</p>
                        </div>

                        <div class="pt-3 text-base font-semibold leading-7">
                            <!-- Button -->
                            <button data-modal-target="saleMarketingManagerHodCard" data-modal-toggle="saleMarketingManagerHodCard" class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Network Card container -->
    <div id="networkCard" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm overflow-y-auto overflow-x-hidden">
        <div class="relative w-full h-full sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-3xl mx-auto p-4">

            <!-- Card -->
            <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="p-6 sm:p-8 md:p-10">

                    <h2 class="text-center mb-6 text-2xl md:text-3xl font-bold text-blue-700">
                        Network Engineer
                    </h2>

                    <p class="text-blue-700 font-semibold">Job Description</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Design, implement and provide support for all network-related hardware/software</li>
                        <li>Responsible for improving technical service capability of the service team</li>
                        <li>Provide delivery support, customer training, and technical troubleshooting</li>
                        <li>Work with channel partners and manage major projects</li>
                        <li>Frequently travel to customer or project locations</li>
                    </ul>

                    <p class="text-blue-700 font-semibold">Job Requirements</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Bachelor’s degree in Computer, Communication, or related field</li>
                        <li>2+ years of front-line service or technical support experience</li>
                        <li>Strong understanding of TCP/IP, L3/L4, Routing/Switching</li>
                        <li>Experience with routers, switches, wireless, and cloud technologies</li>
                        <li>Preferred: CCNP/HCNP certification or above</li>
                        <li>Good English communication; Chinese is a plus</li>
                    </ul>

                    <p class="text-red-700 ">If you are interested that position, please send you resume to <b>hr-fil@fortunemm.com</b> before 1-Nov, 2020.</p>

                    <div class="text-center">
                        <button data-modal-hide="networkCard"
                            class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Senior Sales & Marketing Manager (Agri-Vet) Card container -->
    <div id="seniorSalesMarketingManagerCard" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm overflow-y-auto overflow-x-hidden">
        <div class="relative w-full h-full sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-3xl mx-auto p-4">

            <!-- Card -->
            <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="p-6 sm:p-8 md:p-10">

                    <h2 class="text-center mb-6 text-2xl md:text-3xl font-bold text-blue-700">
                        Senior Sales & Marketing Manager (Agri-Vet)
                    </h2>

                    <p class="text-blue-700 font-semibold">Business Type: <span class="text-black font-semibold">Agri-Vet Business</span>
                    </p>

                    <p class="text-blue-700 font-semibold">Job Description</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Researching and developing marketing opportunities and plans, understanding consumer requirements, identifying market trends, and suggesting system improvements to achieve the company’s marketing goals.</li>
                        <li>Analyzing budgets, preparing annual budget plans, scheduling expenditures, and ensuring that the sales team meets their quotas and goals.</li>
                        <li>Gathering, investigating, and summarizing market data and trends to draft reports.</li>
                        <li>Implementing new sales plans and advertising.</li>
                        <li>Promoting the company’s existing brands and introducing new products to the market</li>
                        <li>Recruiting, training, scheduling, coaching, and managing marketing and sales teams to meet sales and marketing human resource objectives.</li>
                        <li>Maintaining relationships with important clients by making regular visits, understanding their needs, and anticipating new marketing opportunities.</li>
                        <li>Staying current in the industry by attending educational opportunities, conferences, and workshops, reading publications, and maintaining personal and professional networks.</li>
                    </ul>

                    <p class="text-blue-700 font-semibold">Job Requirements</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Bachelor of Veterinary Science (BVSc)</li>
                        <li>At least 5 years’ experience in related field</li>
                        <li>Must be self-motivated and possess the desire for self-development</li>
                        <li>Have the ability to work autonomously when required</li>
                        <li>Be a team player, dedicated to customer satisfaction and a great customer experience</li>
                    </ul>

                    <p class="text-red-700 ">If you are interested that position, please send you resume to <b>hr-fil@fortunemm.com</b> before 1-Nov, 2020.</p>

                    <div class="text-center">
                        <button data-modal-hide="seniorSalesMarketingManagerCard"
                            class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sale& Marketing Manager (HOD) Card container -->
    <div id="saleMarketingManagerHodCard" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm overflow-y-auto overflow-x-hidden">
        <div class="relative w-full h-full sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-3xl mx-auto p-4">

            <!-- Card -->
            <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="p-6 sm:p-8 md:p-10">

                    <h2 class="text-center mb-6 text-2xl md:text-3xl font-bold text-blue-700">
                        Sale& Marketing Manager (HOD)
                    </h2>

                    <p class="text-blue-700 font-semibold">Department: <span class="text-black font-semibold">Elevator & Escalator Sales and Marketing Fuji (SJEC)</span>
                    </p>

                    <p class="text-blue-700 font-semibold">Reporting to: <span class="text-black font-semibold">Executive Director, MD</span>
                    </p>

                    <p class="text-blue-700 font-semibold">No of staff reporting to job holder: <span class="text-black font-semibold">(direct) (indirect) Relative Department</span>
                    </p>

                    <p class="text-blue-700 font-semibold">Internal relations</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Installation</li>
                        <li>Service Marketing</li>
                        <li>Account</li>
                        <li>Audit</li>
                        <li>Modernization</li>
                        <li>Logistics</li>
                        <li>Cash</li>
                        <li>HR</li>
                        <li>MDO</li>
                        <li>Fleet Management</li>
                        <li>MDY branch</li>
                    </ul>

                    <p class="text-blue-700 font-semibold">External relations</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Customers</li>
                        <li>Architected</li>
                        <li>Project/Site/Structure Engineer</li>
                        <li>Construction & Developer Companies</li>
                        <li>YCDC & Contractor SJEC Corporation</li>
                        <li>Run Top (Spare Parts)</li>
                    </ul>

                    <p class="text-blue-700 font-semibold">Internal relations</p>

                    <p class="text-sm sm:text-base text-gray-600">Responsible for Sales & Marketing, collaborate with Sale and Engineer team to get more potential customers, understanding technical challenges, implementing business strategy planning including volume, profit, market share. Accountable for leads, opportunities, orders and contracts to meet the sale budget and pricing targets.</p>
                    <br>

                    <p class="text-blue-700 font-semibold">Key Areas of Accountabilities</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Managing Sales & Marketing of Fuji Elevator & Escalator department</li>
                        <li>Factory offer price , Sales contract & Drawing , Claim parts & Spare parts offer price (Email, we chat)</li>
                        <li>Responsible for interacting with foreign principals on technical support and commercial/pricing matters</li>
                        <li>Prepare Marketing plan on design, structure, process and operating plan and financial model and profitability – motivate and monitor assistant manager, sales admin, sale engineer, sales executive in elevator sales & marketing department</li>
                        <li>Use SAP software (SO, PO, A/R, Spare parts order, etc.)</li>
                        <li>Overall check for document LC, IL & Contract</li>
                        <li>Day to day sales monitoring & forecasting to better understand the market</li>
                        <li>Work collaboratively with the sales team to assess current projects and creatively reach more potential customers</li>
                        <li>Consult with customers and provide technical expertise and recommendations based on the required applications to get new projects and customers</li>
                        <li>Negotiating on price, delivery and technical, contractual commitments with customers and project engineers</li>
                        <li>Discussion, negotiation and conducting with customers and solving the project problem and complain</li>
                        <li>Follow up and collection of payments and supporting the finance function in collection</li>
                        <li>To draw payment balance, budget year balance and target plan</li>
                        <li>Conducting market analysis and presenting findings on Executive Director to develop and enhance the product offering</li>
                        <li>Maintain a positive working relationship with team member and management in a team environment</li>
                    </ul>

                    <p class="text-blue-700 font-semibold">Experience & Educational Requirements</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-600 mb-6 text-sm sm:text-base">
                        <li>Bachelor’s degree in business or Marketing Diploma or engineering field</li>
                        <li>+5 years’ experience in Sales with 2 years experiences in management role</li>
                        <li>Passion for growth and result-oriented</li>
                        <li>Good interpersonal skill and team working and drawing knowledge</li>
                        <li>Proficient in Word, Excel and Photoshop, Power point</li>
                        <li>Entrepreneurial mindset and a can – do – attitude</li>
                        <li>Ability to work efficiently and effectively under pressure with simultaneous deadline</li>
                    </ul>

                    <p class="text-red-700 ">If you are interested that position, please send you resume to <b>hr-fil@fortunemm.com</b> before 1-Nov, 2020.</p>

                    <div class="text-center">
                        <button data-modal-hide="saleMarketingManagerHodCard"
                            class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>