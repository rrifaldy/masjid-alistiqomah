<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class="bg-gray-100">
    <header class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('../img/logo3.png') }}" class="w-16" alt="">
                <h1 class="text-xl font-bold">Masjid Al-Istiqomah</h1>
            </div>
            <div class="">
                <div class="flex justify-center mb-5">
                    <div class="mr-4">
                        <h2 class="text-sm font-semibold">Waktu Sholat Bandung</h2>
                        <p class="text-xs text-gray-600">Senin, 19 Juli 2024</p>
                    </div>
                    <div class="bg-gray-200 p-2 rounded">
                        <h2 class="text-sm fon-semibold">Waktu 18:10</h2>
                    </div>
                    <div class="ml-8">
                        <a href="/login"
                            class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">Login</a>
                    </div>
                </div>
                <div class="flex items-center rounded-sm space-x-4 bg-green-100 p-2">
                    <div class="bg-white p-2 rounded-md">
                        <p class="text-xs font-semibold">SUBUH</p>
                        <p class="text-sm font-bold">04:45</p>
                    </div>
                    <div class="bg-white p-2 rounded-md">
                        <p class="text-xs font-semibold">DZUHUR</p>
                        <p class="text-sm font-bold">12:18</p>
                    </div>
                    <div class="bg-white p-2 rounded-md">
                        <p class="text-xs font-semibold">ASHAR</p>
                        <p class="text-sm font-bold">15:04</p>
                    </div>
                    <div class="bg-white p-2 rounded-md">
                        <p class="text-xs font-semibold">MAGHRIB</p>
                        <p class="text-sm font-bold">17:58</p>
                    </div>
                    <div class="bg-white p-2 rounded-md">
                        <p class="text-xs font-semibold">ISYA</p>
                        <p class="text-sm font-bold">16:35</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto p-4 mt-4">
        <div class="flex items-center justify-between p-5 bg-green-600 rounded-md mb-5">
            <div class="flex space-x-4">
                <a href="/"
                    class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">BERANDA</a>
                <a href="/agenda"
                    class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">AGENDA
                    KEGIATAN</a>
                <a href="/infaq"
                    class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">INFAQ</a>
                <a href="/waktu-sholat"
                    class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">WAKTU
                    SHOLAT</a>
            </div>
            <div class="ml-auto flex items-center space-x-2">
                <div class="relative">
                    <input type="text" placeholder="Search..." class="py-2 pl-10 pr-4 rounded text-green-600" />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.9 14.32a8 8 0 111.42-1.42l4.58 4.58a1 1 0 01-1.42 1.42l-4.58-4.58zM8 14a6 6 0 100-12 6 6 0 000 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-24">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://via.placeholder.com/400x200"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://via.placeholder.com/400x200"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://via.placeholder.com/400x200"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://via.placeholder.com/400x200"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://via.placeholder.com/400x200"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
        <div>
            <div class="grid grid-cols-3 gap-4 p-5 bg-green-100 shadow-xl mx-auto rounded-md mt-5">
                <div class= "p-4 rounded-md border-r border-white">
                    <h3 class="font-bold text-lg">Masjid Al-Istiqomah</h3>
                    <h2>Kampung Leuweung Kaleng RT03 RW02, Desa Katapang, Kecamatan Katapang, Kabupaten Bandung Jawa
                        Barat</h2>
                </div>
                <div class="p-4 rounded-md border-r border-white">
                    <h3 class="font-bold text-lg">Ketua Dewan Kemakmuran Masjid</h3>
                    <h2>H. Fulan, S.Pd</h2>
                    <h3 class="font-bold text-lg">Wakil Ketua Dewan Kemakmuran Masjid</h3>
                    <h2>H. Fulan, S.Pd</h2>
                </div>
                <div class="p-4 rounded-md">
                    <h3 class="font-bold text-lg">Pusat Info</h3>
                    <div class="flex space-x-4 mt-4">
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full text-green-600 hover:bg-gray-400">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full text-green-600 hover:bg-gray-400">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full text-green-600 hover:bg-gray-400">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full text-green-600 hover:bg-gray-400">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
</body>

</html>
