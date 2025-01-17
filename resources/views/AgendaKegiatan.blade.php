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
                    <h2 class="font-bold text-white text-2xl">Agenda Kegiatan</h2>
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
        </div>

        <div class="relative overflow-hidden">
            <h2 class="font-bold text-2xl p-5">Kegiatan Rutin</h2>
            <div class="flex w-full transition-transform duration-500 ease-in-out" id="slider">
                <!-- First Card -->
                @forelse ($agendaAktifs as $agendaAktif)
                    <div class="flex-none w-1/2 p-4 bg-green-200 rounded-lg shadow-lg flex items-center space-x-4 mr-4">
                        <img src="{{ asset('images/' . $agendaAktif->gambar) }}" alt="Activity Image"
                            class="w-1/3 rounded-md">
                        <div class="flex flex-col justify-center w-2/3 text-black">
                            <h2 class="text-2xl font-bold mb-2">{{ $agendaAktif->nama }}</h2>
                            <p class="mb-1">{{ $agendaAktif->tanggal }}</p>
                            <p>{{ $agendaAktif->pengisi }}</p>
                        </div>
                    </div>
                @empty
                    <h3>Belum Ada Kegiatan</h3>
                @endforelse

                <!-- Slider Controls -->
                <button
                    class="absolute top-1/2 left-4 -translate-y-1/2 p-2 bg-white rounded-full shadow-lg hover:bg-gray-200"
                    onclick="slideLeft()">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <button
                    class="absolute top-1/2 right-4 -translate-y-1/2 p-2 bg-white rounded-full shadow-lg hover:bg-gray-200"
                    onclick="slideRight()">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>

            <div class="relative overflow-hidden">
                <h2 class="font-bold text-2xl p-5">Kegiatan Yang Akan Datang</h2>
                <div class="flex w-full transition-transform duration-500 ease-in-out" id="slider2">
                    <!-- First Card -->
                    @forelse ($agendaBelums as $agendaBelum)
                        <div
                            class="flex-none w-1/2 p-4 bg-green-200 rounded-lg shadow-lg flex items-center space-x-4 mr-4">
                            <img src="{{ asset('images/' . $agendaBelum->gambar) }}" alt="Activity Image"
                                class="w-1/3 rounded-md">
                            <div class="flex flex-col justify-center w-2/3 text-black">
                                <h2 class="text-2xl font-bold mb-2">{{ $agendaBelum->nama }}</h2>
                                <p class="mb-1">{{ $agendaBelum->tanggal }}</p>
                                <p>{{ $agendaBelum->pengisi }}</p>
                            </div>
                        </div>
                    @empty
                        <h3>Belum Ada Kegiatan</h3>
                    @endforelse

                </div>

                <!-- Slider Controls -->
                <button
                    class="absolute top-1/2 left-4 -translate-y-1/2 p-2 bg-white rounded-full shadow-lg hover:bg-gray-200"
                    onclick="slideLeft2()">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <button
                    class="absolute top-1/2 right-4 -translate-y-1/2 p-2 bg-white rounded-full shadow-lg hover:bg-gray-200"
                    onclick="slideRight2()">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
            </div>

    </main>


    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
    <script>
        let currentSlide = 0;
        let currentSlide2 = 0;

        function slideLeft1() {
            const slider = document.getElementById('slider');
            const slides = slider.children;
            if (currentSlide > 0) {
                currentSlide--;
                slider.style.transform = `translateX(-${currentSlide * 50}%)`;
            }
        }

        function slideRight() {
            const slider = document.getElementById('slider');
            const slides = slider.children;
            if (currentSlide < slides.length / 2 - 1) {
                currentSlide++;
                slider.style.transform = `translateX(-${currentSlide * 50}%)`;
            }
        }

        function slideLeft2() {
            const slider2 = document.getElementById('slider2');
            const slides2 = slider2.children;
            if (currentSlide2 > 0) {
                currentSlide2--;
                slider2.style.transform = `translateX(-${currentSlide2 * 50}%)`;
            }
        }

        function slideRight2() {
            const slider2 = document.getElementById('slider2');
            const slides2 = slider2.children;
            if (currentSlide2 < slides2.length / 2 - 1) {
                currentSlide2++;
                slider2.style.transform = `translateX(-${currentSlide2 * 50}%)`;
            }
        }
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
