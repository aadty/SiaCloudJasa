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

<body class="min-h-screen min-w-screen flex flex-col relative">
    <div
        class="fixed inset-0 h-full w-full bg-radial-[at_50%_100%] from-[#221152] via-[#211449] via-50% to-[#131113] to-110% -z-10">
        <div
            class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px]">
        </div>
    </div>
    <header class="antialiased">
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-start items-center">
                    <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar"
                        class="hidden p-2 mr-3 text-gray-600 rounded cursor-pointer lg:inline hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h14M1 6h14M1 11h7" />
                        </svg>
                    </button>
                    <button aria-expanded="true" aria-controls="sidebar"
                        class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-[18px] h-[18px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                        <span class="sr-only">Toggle sidebar</span>
                    </button>
                    <a href="#" class="flex mr-4 items-center justify-center">
                        <img src="{{ asset('images/logosia.png') }}" class="mr-3 h-8" alt="SIACloud Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap text-white pb-1">SIACloud</span>
                    </a>
                    <form action="#" method="GET" class="hidden lg:block lg:pl-2">
                        <label for="topbar-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-96">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" name="email" id="topbar-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-9 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search">
                        </div>
                    </form>
                </div>
                <div class="flex items-center lg:order-2">

                    <button type="button"
                        class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown">
                        <div class="py-3 px-4">
                            <span class="block text-sm font-semibold text-gray-900 dark:text-white">Neil sims</span>
                            <span
                                class="block text-sm text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                        </div>
                        <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My
                                    profile</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account
                                    settings</a>
                            </li>
                        </ul>
                        <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <svg class="mr-2 w-4 h-4 text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                        <path
                                            d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                                    </svg>
                                    My likes
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <svg class="mr-2 w-4 h-4 text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                        <path
                                            d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                        <path
                                            d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                    </svg>
                                    Collections
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <span class="flex items-center">
                                        <svg class="mr-2 w-4 h-4 text-primary-600 dark:text-primary-500"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                        </svg>
                                        Pro version
                                    </span>
                                    <svg class="w-2.5 h-2.5 text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Sidebar -->
    <div id="sidebar"
        class="rounded-2xl mt-4 ml-4 w-62 bg-[#1e1e2f] text-white flex flex-col transition-transform duration-300 ease-in-out transform relative">
        <!-- Toggle Button -->
        <div id="toggleSidebar2"
            class="absolute rounded-lg flex items-center justify-center w-10 h-10 -right-6 top-14 p-4 cursor-pointer 
            shadow-md shadow-white/40 border border-white bg-white/5 backdrop-blur-sm transition">
            <span id="toggleIcon">
                <!-- Initially: Collapse (←) -->
                <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                </svg>
            </span>
        </div>
        <!-- Logo/Header -->
        <div class="p-6 text-xl font-bold border-b border-gray-700">
            🚀 MyApp
        </div>

        <!-- Menu Items -->
        <nav class="flex-1 p-4 space-y-4 text-white">

            <!-- Dashboard -->
            <a href="#" class="block px-4 py-2 rounded hover:bg-[#2e2e4f]">🏠 Dashboard</a>

            <!-- Tentang Perusahaan -->
            <a href="#" class="block px-4 py-2 rounded hover:bg-[#2e2e4f]">ℹ️ Tentang Perusahaan</a>

            <!-- Masterdata Dropdown -->
            <button type="button" class="flex items-center w-full px-4 py-2 rounded-lg group hover:bg-[#2e2e4f]"
                aria-controls="dropdown-masterdata" data-collapse-toggle="dropdown-masterdata">
                <span class="me-2">📁</span>
                <span class="flex-1 text-left whitespace-nowrap">Masterdata</span>
                <svg class="w-3 h-3 ms-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <ul id="dropdown-masterdata" class="hidden py-2 space-y-2 text-sm">
                <li><a href="#" class="block w-full pl-12 pr-4 py-2 rounded hover:bg-[#2e2e4f]">📘 COA</a></li>
                <li><a href="#" class="block w-full pl-12 pr-4 py-2 rounded hover:bg-[#2e2e4f]">🖥 Jabatan</a>
                </li>
                <li><a href="#" class="block w-full pl-12 pr-4 py-2 rounded hover:bg-[#2e2e4f]">👤 Pegawai</a>
                </li>
                <li><a href="#" class="block w-full pl-12 pr-4 py-2 rounded hover:bg-[#2e2e4f]">👥 Pelanggan</a>
                </li>
                <li><a href="#" class="block w-full pl-12 pr-4 py-2 rounded hover:bg-[#2e2e4f]">🏭 Supplier</a>
                </li>
                <li><a href="#" class="block w-full pl-12 pr-4 py-2 rounded hover:bg-[#2e2e4f]">🔧 Jasa</a></li>
                <li><a href="#" class="block w-full pl-12 pr-4 py-2 rounded hover:bg-[#2e2e4f]">📦 Barang</a>
                </li>
                <li><a href="#" class="block w-full pl-12 pr-4 py-2 rounded hover:bg-[#2e2e4f]">💸 Discount</a>
                </li>
                <li><a href="#" class="block w-full pl-12 pr-4 py-2 rounded hover:bg-[#2e2e4f]">🏠 Aset</a></li>
            </ul>

            <!-- Transaksi Dropdown -->
            <button type="button" class="flex items-center w-full px-4 py-2 rounded-lg group hover:bg-[#2e2e4f]"
                aria-controls="dropdown-transaksi" data-collapse-toggle="dropdown-transaksi">
                <span class="me-2">💼</span>
                <span class="flex-1 text-left whitespace-nowrap">Transaksi</span>
                <svg class="w-3 h-3 ms-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <ul id="dropdown-transaksi" class="hidden py-2 space-y-2 text-sm">
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">🛒 Penjualan</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">📥 Pembelian</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">💰 Penggajian</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">📆 Presensi</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">📉 Beban & Pengeluaran</a></li>
            </ul>

            <!-- Laporan Dropdown -->
            <button type="button" class="flex items-center w-full px-4 py-2 rounded-lg group hover:bg-[#2e2e4f]"
                aria-controls="dropdown-laporan" data-collapse-toggle="dropdown-laporan">
                <span class="me-2">📊</span>
                <span class="flex-1 text-left whitespace-nowrap">Laporan</span>
                <svg class="w-3 h-3 ms-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <ul id="dropdown-laporan" class="hidden py-2 space-y-2 text-sm">
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">📘 Jurnal Umum</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">📚 Buku Besar</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">📈 Neraca Saldo</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">💹 Laba Rugi</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">🔁 Perubahan Modal</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">🏛️ Neraca</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">📦 Stok Barang</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">📄 Rekap Hutang</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">🧾 Kegiatan Pegawai</a></li>
                <li><a href="#" class="block pl-12 pr-4 py-2 hover:bg-[#2e2e4f]">💵 Laporan Cashflow</a></li>
            </ul>

        </nav>

    </div>





    {{-- <!-- Footer -->
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
    </footer> --}}
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>



</html>
