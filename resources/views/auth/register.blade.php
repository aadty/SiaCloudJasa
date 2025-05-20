<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register - SIA Cloud</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logosia.png') }}" sizes="16x16">
    @vite('resources/css/app.css')

</head>

<body
    class="min-h-screen min-w-screen relative flex flex-col bg-linear-to-r from-[#131113] from--10% via-[#4932a0] to-[#131113] to-110% overflow-hidden">
    <div
        class="animate-wiggle absolute -top-81 inset-0 -z-12 h-full w-full bg-[radial-gradient(#f5f4f4_1px,transparent_1px)] [background-size:27px_27px]">
    </div>
    <div
        class="animate-wiggle absolute inset-0 -z-12 h-full w-full bg-[radial-gradient(#f5f4f4_1px,transparent_1px)] [background-size:27px_27px]">
    </div>


    <div class="min-w-screen min-h-screen items-center justify-center flex">

        <div
            class="z-1 relative flex flex-col w-200 h-120 bg-white/5 backdrop-blur-sm border border-white/50 rounded-2xl shadow-xl/60 justify-center items-center">

            <div
                class="absolute left-140 right-0 top-79 bottom-0 -z-10 m-auto h-100 w-100 rounded-full bg-[#ff8a36] opacity-80 blur-[80px]">
            </div>
            <div
                class="absolute -left-60 right-100 top-0 bottom-90 -z-11 m-auto h-75 w-75 rounded-full bg-rose-700 opacity-80 blur-[80px]">
            </div>


            {{-- <p class="text-white font-bold text-2xl">Log in</p> --}}
            <p class=" text-white font-extrabold text-xl">Register</p>
            <form class="w-full px-10 pb-8 mb-5">
                <div class="mb-5">
                    <label for="username" class="block mb-2 text-md font-bold text-white">Username</label>
                    <input type="text" id="username" name="username"
                        class="bg-[#0f172a] border border-gray-300 text-white text-sm rounded-lg focus:ring-[#4932a0] focus:border-[#4932a0] block w-full p-2.5"
                        placeholder="scara" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-md font-bold text-white">Email</label>
                    <input type="email" id="email"
                        class="bg-[#0f172a] border border-gray-300 text-white text-sm rounded-lg focus:ring-[#4932a0] focus:border-[#4932a0] block w-full p-2.5"
                        placeholder="scara@siacloud.com" required />
                </div>
                <div class="mb-8 flex flex-row gap-4">
                    <div class="w-1/2">
                        <label for="password" class="block mb-2 text-md font-bold text-white">Password</label>
                        <input type="password" id="password"
                            class="bg-[#0f172a] border border-gray-300 text-white text-sm rounded-lg focus:ring-[#4932a0] focus:border-[#4932a0] block w-full p-2.5"
                            placeholder="qwerty123" required />
                    </div>
                    <div class="w-1/2">
                        <label for="password_confirmation" class="block mb-2 text-md font-bold text-white">Confirm
                            Password</label>
                        <input type="password" id="password_confirmation"
                            class="bg-[#0f172a] border border-gray-300 text-white text-sm rounded-lg focus:ring-[#4932a0] focus:border-[#4932a0] block w-full p-2.5"
                            placeholder="qwerty123" required />
                    </div>
                </div>

                <div class="flex flex-row gap-5 justify-between items-center">

                    <input type="hidden" name="role" id="role" value="owner">

                    <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                        class="text-white border border-white bg-[#0f172a] hover:bg-[#352372] font-medium rounded-lg text-sm w-full px-5 py-2.5 text-left inline-flex items-center justify-start"
                        type="button">
                        <span id="dropdownSelectedText">Owner</span>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownDivider"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDividerButton">
                            <li>
                                <a href="#" data-value="owner"
                                    class="block px-4 py-2 text-sm hover:bg-gray-600 text-gray-200 hover:text-white dropdown-option">Owner</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="#" data-value="pegawai"
                                class="block px-4 py-2 text-sm hover:bg-gray-600 text-gray-200 hover:text-white dropdown-option">Pegawai</a>
                        </div>
                    </div>

                    <button type="submit"
                        class="py-2 px-14 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-white text-gray-800 hover:bg-gray-600 focus:outline-hidden focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none">
                        Submit
                    </button>


                </div>
            </form>

            <p class="text-white text-sm text-center">
                Sudah punya akun?
                <a href="/register" class="text-blue-400 hover:underline hover:text-blue-300 transition duration-200">
                    Login disini!
                </a>
            </p>


        </div>
    </div>


    <!-- Footer -->
    <footer class="absolute bottom-2 shadow-sm w-full">
        <div class="w-full">
            <span class="block text-sm text-center text-white">
                © 2025 <a href="#" class="hover:underline">SIACloud</a>. All rights reserved.
            </span>
        </div>
    </footer>

    <script src="{{ asset('assets/js/register.js') }}"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>



</html>
