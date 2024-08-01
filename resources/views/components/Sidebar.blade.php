<!doctype html>
<html>

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
</head>

<body>
    <div>
        <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4 lg:space-x-8">
                        <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                            class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
                            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
                            <img src="{{ asset('../img/logo3.png') }}" class="w-12 mx-auto" alt="Logo">
                            <span class="self-center whitespace-nowrap">Masjid Al-Istiqomah</span>
                        </a>
                    </div>

                    <div class="flex items-center space-x-4 lg:space-x-6">
                        <div class="flex items-center text-gray-500 bg-white shadow-md rounded-lg px-4 py-2">
                            <span class="text-sm font-medium" id="current-time">08:30 AM</span>
                        </div>
                        <div class="flex items-center text-gray-500 bg-white shadow-md rounded-lg px-4 py-2">
                            <span class="text-sm font-medium" id="current-date">Monday, July 31, 2024</span>
                        </div>
                        <div class="flex items-center space-x-2 bg-primary text-white rounded-lg px-4 py-2">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 12c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zM12 14c-3.3 0-6 2.7-6 6v1h12v-1c0-3.3-2.7-6-6-6z" />
                            </svg>
                            <span class="text-sm font-medium" id="user-name">Admin</span>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        <div class="flex overflow-hidden bg-white pt-16">
            <aside id="sidebar"
                class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
                aria-label="Sidebar">
                <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <div class="flex-1 px-3 bg-white divide-y space-y-1">
                            <ul class="space-y-4 pb-2">
                                <li>
                                    <a href="/dashboard"
                                        class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group hover:text-primary">
                                        <svg class="w-6 h-6 text-gray-500 group-hover:text-primary transition duration-75"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm4 4a1 1 0 00-2 0v6a1 1 0 102 0V7zm4-2a1 1 0 00-2 0v8a1 1 0 102 0V5zm4 4a1 1 0 00-2 0v4a1 1 0 102 0V9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="font-medium text-gray-900">Manajemen</div>
                                    <hr class="my-2 border-gray-200">
                                    <a href="{{ route('manajemen-agenda') }}"
                                        class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                        <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75"
                                            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path
                                                d="M3 4h18c1.1 0 1.99.9 1.99 2L23 20c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2zm18 2H3v14h18V6zm-9 5h-4v4h4v-4zm5 0h-4v4h4v-4zM7 11h-4v4h4v-4zm11 0h-4v4h4v-4z" />
                                        </svg>

                                        <span class="ml-3">Agenda Kegiatan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('manajemen-infaq') }}"
                                        class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group hover:text-primary">
                                        <svg class="w-6 h-6 text-gray-500 group-hover:text-primary transition duration-75"
                                            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path
                                                d="M4 2h16c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2zm0 2v16h16V4H4zm4 5h8v2H8V9zm0 4h8v2H8v-2zM6 9h2v2H6V9zm0 4h2v2H6v-2z" />
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">Infaq</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="font-medium text-gray-900">Laporan</div>
                                    <hr class="my-2 border-gray-200">
                                    <a href="{{ route('manajemen-agenda.laporan') }}"
                                        class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                        <svg class="w-6 h-6 text-gray-500 group-hover:text-primary transition duration-75"
                                            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path
                                                d="M4 2h16c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2zm0 2v16h16V4H4zm4 5h8v2H8V9zm0 4h8v2H8v-2zM6 9h2v2H6V9zm0 4h2v2H6v-2z" />
                                        </svg>

                                        <span class="ml-3">Infaq</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('manajemen-infaq.laporan') }}"
                                        class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                        <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75"
                                            fill="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path
                                                d="M3 4h18c1.1 0 1.99.9 1.99 2L23 20c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2zm18 2H3v14h18V6zm-9 5h-4v4h4v-4zm5 0h-4v4h4v-4zM7 11h-4v4h4v-4zm11 0h-4v4h4v-4z" />
                                        </svg>

                                        <span class="ml-3">Agenda Kegiatan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/logout"
                                        class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group hover:text-primary">
                                        <svg class="w-6 h-6 text-gray-500 group-hover:text-primary transition duration-75"
                                            fill="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z" />
                                            <path d="M10 4H4a1 1 0 00-1 1v4h2V5h6V4zm8 10l-5-5 5-5v4h6v2h-6v4z" />
                                        </svg>


                                        <span class="ml-3 flex-1 whitespace-nowrap">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
        <script>
            function updateTimeAndDate() {
                const now = new Date();
                const optionsDate = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    locale: 'id-ID'
                };
                const optionsTime = {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                };
                document.getElementById('current-date').textContent = now.toLocaleDateString('id-ID', optionsDate);
                document.getElementById('current-time').textContent = now.toLocaleTimeString('id-ID', optionsTime);
            }
            updateTimeAndDate();
            setInterval(updateTimeAndDate, 60000);
        </script>
    </div>
</body>

</html>
