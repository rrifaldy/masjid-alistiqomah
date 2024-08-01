<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center justify-between p-5 bg-green-600 rounded-md mb-5">
                <div class="flex space-x-4 mr-60">
                    <button class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">BERANDA</button>
                    <button class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">AGENDA KEGIATAN</button>
                    <button class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">INFAQ</button>
                    <button class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">WAKTU SHOLAT</button>
                </div>
                <div class="ml-auto flex items-center space-x-2">
                    <div class="flex justify-center ml-28">
                        <div class="bg-gray-200 p-2 rounded mr-5">
                            <h2 class="text-sm font-semibold">Senin, 4 Januari 2024</h2>
                        </div>
                        <div class="bg-gray-200 p-2 rounded">
                            <h2 class="text-sm font-semibold">Waktu 18:10</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto p-4 mt-4">
        <div class="flex">
            <div class="flex items-center">
                <img src="{{ asset('../img/logo3.png') }}" class="w-16" alt="">
                <h1 class="text-xl font-bold">Masjid Al-Istiqomah</h1>
            </div>
            <div class="flex items-center justify-between w-full p-5 bg-green-600 rounded-md mb-5">
                <div class="flex space-x-4">
                    <h2 class="font-bold text-white text-2xl">Waktu Sholat</h2>
                </div>
                <div class="ml-auto flex items-center space-x-2">
                    <h2 class="text-md text-white">Pilih Kota/Kabupaten untuk ditampilkan</h2>
                    <div class="relative">
                        <select class="py-2 pl-10 pr-4 rounded text-green-600 border border-gray-300 bg-white">
                            <option value="" disabled selected>Pilih Kota...</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="bandung">Bandung</option>
                            <option value="surabaya">Surabaya</option>
                            <option value="medan">Medan</option>
                            <option value="makassar">Makassar</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="hari-ini flex justify-center p-5">
            <div class="text-center border-2 border-black py-2 rounded-md shadow-md w-1/3">
                <h2 class="text-lg font-bold">19 Juli 2024</h2>
                <h2>Dzulhijjah 1445 - Muharram 1446</h2>
            </div>
        </div>

        <div class="flex mr-5 justify-center mb-5">
            <div class="flex gap-5 justify-center w-1/3">
                <div class="flex-1">
                    <select id="month" name="month" class="block w-full mt-1 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="flex-1">
                    <select id="year" name="year" class="block w-full mt-1 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="table-sholat">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-white uppercase bg-green-700">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Imsyak
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Subuh
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dzuhur
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ashar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Maghrib
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Isya
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dzulhijjah
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-green-100 odd:dark:bg-gray-900 even:bg-gray-200 even:dark:bg-gray-800 border-b">
                            <td class="px-6 py-4">
                                31/07
                            </td>
                            <td class="px-6 py-4">
                                04:45 AM
                            </td>
                            <td class="px-6 py-4">
                                05:15 AM
                            </td>
                            <td class="px-6 py-4">
                                12:30 PM
                            </td>
                            <td class="px-6 py-4">
                                03:45 PM
                            </td>
                            <td class="px-6 py-4">
                                06:55 PM
                            </td>
                            <td class="px-6 py-4">
                                08:05 PM
                            </td>
                            <td class="px-6 py-4">
                                15 Dzulhijjah
                            </td>
                        </tr>
                        <tr class="odd:bg-green-100 odd:dark:bg-gray-900 even:bg-gray-200 even:dark:bg-gray-800 border-b">
                            <td class="px-6 py-4">
                                01/08
                            </td>
                            <td class="px-6 py-4">
                                04:46 AM
                            </td>
                            <td class="px-6 py-4">
                                05:16 AM
                            </td>
                            <td class="px-6 py-4">
                                12:31 PM
                            </td>
                            <td class="px-6 py-4">
                                03:46 PM
                            </td>
                            <td class="px-6 py-4">
                                06:56 PM
                            </td>
                            <td class="px-6 py-4">
                                08:06 PM
                            </td>
                            <td class="px-6 py-4">
                                16 Dzulhijjah
                            </td>
                        </tr>
                        <tr class="odd:bg-green-100 odd:dark:bg-gray-900 even:bg-gray-200 even:dark:bg-gray-800 border-b">
                            <td class="px-6 py-4">
                                02/08
                            </td>
                            <td class="px-6 py-4">
                                04:47 AM
                            </td>
                            <td class="px-6 py-4">
                                05:17 AM
                            </td>
                            <td class="px-6 py-4">
                                12:32 PM
                            </td>
                            <td class="px-6 py-4">
                                03:47 PM
                            </td>
                            <td class="px-6 py-4">
                                06:57 PM
                            </td>
                            <td class="px-6 py-4">
                                08:07 PM
                            </td>
                            <td class="px-6 py-4">
                                17 Dzulhijjah
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>


        </div>
    </main>

    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>


</body>

</html>