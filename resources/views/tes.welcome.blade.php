<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIA Cloud</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logosia.png') }}" sizes="16x16">
    @vite('resources/css/app.css')

</head>S

<body class="bg-[#FDFDFC] dark:bg-radial-[at_50%_95%] from-[#4932a0] via-[#352372] via-[#352372] to-[#131113] to-90% text-[#1b1b18] flex flex-col">

    <!-- Navigation Bar -->
    <nav
        class="flex w-full z-20 top-0 left-0">
        <div class="w-full mx-auto px-8 2xl:px-30 flex flex-wrap items-center justify-between p-4">
            <!-- Logo Section -->
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse pt-1">
                <img src="{{ asset('images/logosia.png') }}" class="h-10" alt="SIA Cloud Logo">
                <span class="self-center text-2xl pb-1 font-semibold whitespace-nowrap dark:text-white">SIA Cloud</span>
            </a>
            <!-- Navigation Links Centered Vertically -->
            <div class="flex-1 flex items-center justify-center pr-23">
                <ul class="flex flex-row space-x-8 font-medium">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Login Button -->
            <div class="flex items-center md:order-2 space-x-3">
                <button
                    class="relative inline-flex items-center justify-center p-0.5 me-4 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-100 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                        Login
                    </span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content Placeholder -->
    <main class="border border-b-fuchsia-600 border-4 flex-1 w-full flex flex-col items-center p-8">

        <div class="border border-amber-200 w-full h-auto flex items-center justify-between">
            {{-- text kiri --}}
            <div class="border border-amber-600 flex flex-col items-start ">
                <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 via-red-500 to-yellow-400">Manage
                        Data Keuangan</span><br>
                    Dengan SIA Cloud.</h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">SIA Cloud hadir untuk membantu kamu mencatat data keuanganmu secara lebih<br> mudah dan efisien.
                </p>

                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 mt-4">
                    <a href="#">
                        <button type="button"
                            class="text-white font-bold bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Mulai
                            Sekarang!</button>
                    </a>
                    <a href="#">
                        <button type="button"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Learn
                            More</button>
                    </a>
                </div>
            </div>

            {{-- logo kanan --}}
            <div class="border border-white w-auto flex items-center justify-center">
                <img src="{{ asset('images/logosia.png') }}" alt="SIA Logo"
                    class="border border-white h-96 w-auto object-contain">
            </div>
        </div>

        <div class="border border-amber-200 w-full h-auto flex items-center mt-10">

            <div id="controls-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-50 overflow-hidden rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out border border-amber-50" data-carousel-item="active">
                        <figure class="max-w-screen-md mx-auto text-center border border-red-600">
                            <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <blockquote>
                                <p class="text-2xl italic font-medium text-gray-900 dark:text-white">"Flowbite is just
                                    awesome. It
                                    contains tons of predesigned components and pages starting from login screen to
                                    complex
                                    dashboard. Perfect choice for your next SaaS application."</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                    alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                    <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <figure class="max-w-screen-md mx-auto text-center border border-red-600">
                            <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <blockquote>
                                <p class="text-2xl italic font-medium text-gray-900 dark:text-white">"Flowbite is just
                                    awesome. It
                                    contains tons of predesigned components and pages starting from login screen to
                                    complex
                                    dashboard. Perfect choice for your next SaaS application."</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                    alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                    <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <figure class="max-w-screen-md mx-auto text-center border border-red-600">
                            <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <blockquote>
                                <p class="text-2xl italic font-medium text-gray-900 dark:text-white">"Flowbite is just
                                    awesome. It
                                    contains tons of predesigned components and pages starting from login screen to
                                    complex
                                    dashboard. Perfect choice for your next SaaS application."</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                    alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                    <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <figure class="max-w-screen-md mx-auto text-center border border-red-600">
                            <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <blockquote>
                                <p class="text-2xl italic font-medium text-gray-900 dark:text-white">"Flowbite is just
                                    awesome. It
                                    contains tons of predesigned components and pages starting from login screen to
                                    complex
                                    dashboard. Perfect choice for your next SaaS application."</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                    alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                    <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <figure class="max-w-screen-md mx-auto text-center border border-red-600">
                            <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path
                                    d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                            </svg>
                            <blockquote>
                                <p class="text-2xl italic font-medium text-gray-900 dark:text-white">"Flowbite is just
                                    awesome. It
                                    contains tons of predesigned components and pages starting from login screen to
                                    complex
                                    dashboard. Perfect choice for your next SaaS application."</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                                <img class="w-6 h-6 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                    alt="profile picture">
                                <div
                                    class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                    <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                                    <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>

        <div class="border border-amber-200 w-full h-auto flex items-center justify-end py-6">
            <article
                class="group grid rounded-sm max-w-2xl grid-cols-1 md:grid-cols-8 overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
               
                <!-- body -->
                <div class="flex flex-col justify-center p-6 col-span-5">
                    <small class="mb-4 font-medium">Artificial Intelligence</small>
                    <h3 class="text-balance text-xl font-bold text-neutral-900 lg:text-2xl dark:text-white"
                        aria-describedby="articleDescription">AI-Powered VR Goggles Redefine Reality: Augmented Vision
                        for Al</h3>
                    <p id="articleDescription" class="my-4 max-w-lg text-pretty text-sm">
                        Experience the next level of augmented reality with smart
                        goggles integrating cutting-edge AI for seamless interaction
                        with the world around you.
                    </p>
                    <a href="#"
                        class="w-fit font-medium text-black underline-offset-2 hover:underline focus:underline focus:outline-hidden dark:text-white">
                        Read full story
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                            fill="none" stroke-width="2.5" aria-hidden="true" class="inline size-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
                 <!-- image -->
                <div class="col-span-3 overflow-hidden">
                    <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-4.webp"
                        class="h-52 md:h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105"
                        alt="a men wearing VR goggles" />
                </div>
            </article>
            
        </div>



    </main>

    <!-- Footer -->
    <footer class="bg-white rounded-lg shadow-sm dark:bg-[#0f172a] max-w-screen mt-auto">
        <div class="w-full mx-auto px-8 2xl:px-30 py-4">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <ul class="flex flex-wrap items-center text-sm font-medium text-gray-500 mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-3 border-gray-200 sm:mx-auto dark:border-gray-700" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
                © 2023 <a href="#" class="hover:underline">Flowbite™</a>. All rights reserved.
            </span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>



</html>
