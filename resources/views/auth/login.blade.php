<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - SIA Cloud</title>
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
            class="z-1 relative flex flex-col w-200 h-90 bg-white/5 backdrop-blur-sm border border-white/50 rounded-2xl shadow-xl/60 justify-center items-center">

            <div
                class="absolute left-140 right-0 top-0 bottom-90 -z-10 m-auto h-100 w-100 rounded-full bg-[#ff8a36] opacity-80 blur-[80px]">
            </div>
            <div
                class="absolute -left-60 right-100 top-79 bottom-0 -z-11 m-auto h-75 w-75 rounded-full bg-rose-700 opacity-80 blur-[80px]">
            </div>


            {{-- <p class="text-white font-bold text-2xl">Log in</p> --}}

            <form class="w-full px-10 py-8">
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-md font-bold text-white">Username / Email</label>
                    <input type="email" id="email"
                        class="bg-[#0f172a] border border-gray-300 text-white text-sm rounded-lg focus:ring-[#4932a0] focus:border-[#4932a0] block w-full p-2.5"
                        placeholder="scara@siacloud.com" required />
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-md font-bold text-white">Password</label>
                    <input type="password" id="password"
                        class="bg-[#0f172a] border border-gray-300 text-white text-sm rounded-lg focus:ring-[#4932a0] focus:border-[#4932a0] block w-full p-2.5"
                        placeholder="qwerty123" required />
                </div>
                <div class="flex flex-row justify-between items-center">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50" required />
                        <label for="remember" class="ms-2 text-sm font-medium text-white">Remember
                            me</label>
                    </div>

                    <button type="submit"
                        class="py-2 px-14 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-white text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none">
                        Submit
                    </button>
                </div>
            </form>

            <p class="text-white text-sm text-center">
                Belum punya akun?
                <a href="/register" class="text-blue-400 hover:underline hover:text-blue-300 transition duration-200">
                    Daftar sekarang!
                </a>
            </p>


        </div>
    </div>


    <!-- Footer -->
    <footer class="absolute bottom-5 shadow-sm w-full">
        <div class="w-full">
            <span class="block text-sm text-center text-white">
                © 2025 <a href="#" class="hover:underline">SIACloud</a>. All rights reserved.
            </span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>



</html>
