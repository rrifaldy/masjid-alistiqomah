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
                    <div class="flex justify-center ml-28">
                        <div class="bg-gray-200 p-2 rounded mr-5">
                            <h2 id="current-date" class="text-sm font-semibold"></h2>
                        </div>
                        <div class="bg-gray-200 p-2 rounded">
                            <h2 id="current-time" class="text-sm font-semibold"></h2>
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
                        <select id="city"
                            class="py-2 pl-10 pr-4 rounded text-green-600 border border-gray-300 bg-white">
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
                <h2 id="today-date" class="text-lg font-bold"></h2>
                <h2 id="hijri-date"></h2>
            </div>
        </div>


        <div class="flex mr-5 justify-center mb-5">
            <div class="flex gap-5 justify-center w-1/3">
                <div class="flex-1">
                    <select id="month" name="month"
                        class="block w-full mt-1 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
                    <select id="year" name="year"
                        class="block w-full mt-1 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                    </select>
                </div>
                <div class="flex-1">
                    <button id="fetchData"
                        class="block w-full mt-1 py-2 px-3 bg-blue-500 text-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        Tampilkan Data
                    </button>
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
                        <tr
                            class="odd:bg-green-100 odd:dark:bg-gray-900 even:bg-gray-200 even:dark:bg-gray-800 border-b">
                            <td class="px-6 py-4 text-center" colspan="7">
                                Pilih Kota dan tanggal terlebih dahulu
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
    <script>
        async function fetchPrayerTimes(month, year, city) {
            try {
                const url =
                    `https://api.aladhan.com/v1/calendarByCity/${year}/${month}?city=${city}&country=Indonesia&method=2`;
                const response = await fetch(url);
                const data = await response.json();
                return data.data;
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }

        function formatTime(time) {
            const [hours, minutes] = time.split(':');
            const period = hours < 12 ? 'AM' : 'PM';
            const adjustedHours = hours % 12 || 12;
            return `${adjustedHours}:${minutes} ${period}`;
        }

        function updateTable(prayerTimes) {
            const tableBody = document.querySelector('tbody');
            tableBody.innerHTML = '';

            prayerTimes.forEach(item => {
                const date = item.date.gregorian.date.split('-').reverse().join('/');
                const timings = item.timings;

                const row = document.createElement('tr');
                row.innerHTML = `
                <td class="px-6 py-4">${date}</td>
                <td class="px-6 py-4">${formatTime(timings.Imsak)}</td>
                <td class="px-6 py-4">${formatTime(timings.Fajr)}</td>
                <td class="px-6 py-4">${formatTime(timings.Dhuhr)}</td>
                <td class="px-6 py-4">${formatTime(timings.Asr)}</td>
                <td class="px-6 py-4">${formatTime(timings.Maghrib)}</td>
                <td class="px-6 py-4">${formatTime(timings.Isha)}</td>
                <td class="px-6 py-4">${item.date.hijri.day} ${item.date.hijri.month.en}</td>
            `;
                tableBody.appendChild(row);
            });
        }

        document.getElementById('fetchData').addEventListener('click', () => {
            const month = document.getElementById('month').value;
            const year = document.getElementById('year').value;
            const city = document.getElementById('city').value;
            if (city) {
                fetchPrayerTimes(month, year, city).then(updateTable);
            } else {
                alert('Silakan pilih kota terlebih dahulu.');
            }
        });

        // Fetch data for the default month, year, and city on page load
        document.addEventListener('DOMContentLoaded', () => {
            const month = document.getElementById('month').value;
            const year = document.getElementById('year').value;
            const city = document.getElementById('city').value;
            if (city) {
                fetchPrayerTimes(month, year, city).then(updateTable);
            }
        });
    </script>

    <script>
        function getFormattedDate() {
            const now = new Date();
            const options = {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric',
                weekday: 'long'
            };
            return now.toLocaleDateString('id-ID', options);
        }

        function getHijriDate() {
            // You can use a library or API to convert the Gregorian date to Hijri date.
            // For example, using Hijri JS library
            const hijri = new Intl.DateTimeFormat('id-ID-u-ca-islamic', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            }).format(new Date());
            return hijri;
        }

        document.addEventListener('DOMContentLoaded', () => {
            const todayDate = getFormattedDate();
            const hijriDate = getHijriDate();

            document.getElementById('today-date').innerText = todayDate;
            document.getElementById('hijri-date').innerText = hijriDate;
        });
    </script>
    <script>
        function formatDate(date) {
            const options = {
                weekday: 'long',
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            };
            return date.toLocaleDateString('id-ID', options);
        }

        function formatTime(date) {
            const hours = date.getHours().toString().padStart(2, '0');
            const minutes = date.getMinutes().toString().padStart(2, '0');
            return `${hours}:${minutes}`;
        }

        function updateDateTime() {
            const now = new Date();
            document.getElementById('current-date').innerText = formatDate(now);
            document.getElementById('current-time').innerText = `Waktu ${formatTime(now)}`;
        }

        // Update date and time every second
        setInterval(updateDateTime, 1000);

        // Initial update
        document.addEventListener('DOMContentLoaded', updateDateTime);
    </script>


</body>

</html>
