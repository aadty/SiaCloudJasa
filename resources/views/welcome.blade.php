<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIA Cloud</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logosia.png') }}" sizes="16x16">
    @vite('resources/css/app.css')

</head>

<body class="flex flex-col 2xl:px-8 bg-[#131113]">


    <div
        class="-z-1 border border-amber-600 relative bg-radial-[at_50%_100%] from-[#4932a0] via-[#352372] via-20% to-[#131113] to-80%  flex flex-col h-180">

        <!-- Navigation Bar -->
        <nav class="flex w-full items-center justify-between pt-4 px-8 ">

            <!-- Logo Section -->
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse pt-1">
                <img src="{{ asset('images/logosia.png') }}" class="h-10" alt="SIA Cloud Logo">
                <span class="self-center text-2xl pb-1 font-semibold whitespace-nowrap dark:text-white">SIA
                    Cloud</span>
            </a>
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
        </nav>

        <div class="border border-amber-200 w-full h-full flex items-center justify-between px-6">

            {{-- text kiri --}}
            <div class=" items-start justify-center border border-amber-600 flex flex-col w-2/3 h-full">

                <h1
                    class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-7xl 2xl:text-9xl">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 via-red-500 to-yellow-400">Manage
                        Data Keuangan</span><br>
                    Dengan SIA Cloud.
                </h1>
                <p class="text-lg font-normal text-gray-500 lg:text-2xl 2xl:text-4xl dark:text-gray-400">SIA Cloud hadir
                    untuk
                    membantu kamu mencatat data keuanganmu secara lebih<br> mudah dan efisien.
                </p>

                {{-- buttons --}}
                <div class="w-full flex flex-col md:flex-row md:items-center md:justify-start gap-5 mt-6">
                    <a href="#">
                        <button type="button"
                            class="w-full md:w-auto text-white font-bold bg-gradient-to-br from-purple-600 to-blue-500 
           hover:bg-gradient-to-bl focus:ring-1 focus:outline-none focus:ring-[#ffffff] focus:shadow-lg focus:shadow-blue-400/100 rounded-lg text-sm px-5 py-2.5 text-center 
           transition-all duration-1000 ease-in-out">
                            Mulai Sekarang!
                        </button>

                    </a>
                    <a href="#">
                        <button type="button"
                            class="w-full md:w-auto text-white font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                            More Info
                        </button>
                    </a>
                </div>


            </div>

            {{-- logo kanan --}}
            <div class="border border-white w-1/3 flex items-center justify-center">
                <img src="{{ asset('images/logosia.png') }}" alt="SIA Logo"
                    class="border border-white h-96 w-auto object-contain">
            </div>
        </div>

        {{-- motif --}}
        <div
            class="animate-wigglee -top-40 -z-1 pointer-events-none absolute inset-0 
           bg-[linear-gradient(to_right,_#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,_#4f4f4f2e_1px,transparent_1px)] 
           bg-[size:15px_15px] 
           [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,_#000_70%,_transparent_100%)]">
        </div>

    </div>

    <div
        class="border border-amber-600 bg-radial-[at_50%_0%] from-[#4932a0] via-[#352372] via-20% to-[#131113] to-80% flex flex-col h-180">

        <div class="flex w-full items-center justify-center border border-amber-50">


            @include('components.welcome.rating')
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-white shadow-sm dark:bg-[#0f172a] max-w-screen mt-auto">
        <div class="w-full mx-auto px-8 2xl:px-30 py-4">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">tes</span>
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
                © 2025 <a href="#" class="hover:underline">SIACloud</a>. All rights reserved.
            </span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>



</html>
