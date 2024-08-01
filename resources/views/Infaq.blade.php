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
    <!-- Tampilkan pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tampilkan pesan error -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Tampilkan error validasi -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <header class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center justify-between p-5 bg-green-600 rounded-md mb-5">
                <div class="flex space-x-4 mr-60">
                    <button
                        class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">BERANDA</button>
                    <button class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">AGENDA
                        KEGIATAN</button>
                    <button
                        class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">INFAQ</button>
                    <button class="text-white hover:bg-white hover:text-green-600 font-bold py-2 px-4 rounded">WAKTU
                        SHOLAT</button>
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
                    <h2 class="font-bold text-white text-2xl">Infaq</h2>
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
        <form action="{{ route('infaq.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
                <div class="p-5 xs:p-0 mx-auto md:w-full md:max-w-md">
                    <h2 class="font-bold text-2xl text-black text-center mb-5">Infaq</h2>
                    <div id="form-container" class="bg-white shadow w-full rounded-lg">
                        <!-- Amount Form -->
                        <div id="amount-form">
                            <img src="{{ asset('../img/logo3.png') }}" class="w-32 mx-auto mb-1" alt="Logo">
                            <h2 class="text-center font-bold text-2xl text-black">Kenceng Online</h2>
                            <h2 class="text-center text-md text-black">Semudah mengisi kotak amal, masukkan jumlah
                                sesuai kemampuan</h2>
                            <div class="px-5 py-7">
                                <label class="font-semibold text-sm text-gray-600 pb-1 block">Nominal</label>
                                <div class="flex space-x-4 mt-1 mb-5">
                                    <label class="flex items-center space-x-2">
                                        <input type="radio" name="nominal" value="5000"
                                            class="form-radio h-5 w-5 text-green-600 border-gray-300 rounded-full" />
                                        <span class="text-sm text-gray-600">5000</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="radio" name="nominal" value="25000"
                                            class="form-radio h-5 w-5 text-green-600 border-gray-300 rounded-full" />
                                        <span class="text-sm text-gray-600">25000</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="radio" name="nominal" value="50000"
                                            class="form-radio h-5 w-5 text-green-600 border-gray-300 rounded-full" />
                                        <span class="text-sm text-gray-600">50000</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="radio" name="nominal" value="100000"
                                            class="form-radio h-5 w-5 text-green-600 border-gray-300 rounded-full" />
                                        <span class="text-sm text-gray-600">100000</span>
                                    </label>
                                </div>
                                <label class="font-semibold text-sm text-gray-600 pb-1 block">Nominal lain</label>
                                <input type="text" name="nominal_lain"
                                    class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                                    placeholder="Nominal" />
                                <button type="button" id="next-to-contact"
                                    class="transition duration-200 bg-green-600 hover:bg-secondary focus:bg-primary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                    <span class="inline-block mr-2">Berikutnya</span>
                                </button>
                            </div>
                        </div>

                        <!-- Contact Form (Initially Hidden) -->
                        <div id="contact-form" class="hidden">
                            <img src="{{ asset('../img/logo3.png') }}" class="w-32 mx-auto mb-1" alt="Logo">
                            <h2 class="text-center font-bold text-2xl text-black">Kenceng Online</h2>
                            <h2 class="text-center text-md text-black">Semudah mengisi kotak amal, masukkan jumlah
                                sesuai kemampuan</h2>
                            <div class="px-5 py-7">
                                <label class="font-semibold text-sm text-gray-600 pb-1 block">Nama Lengkap</label>
                                <input type="text" name="nama"
                                    class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                                    placeholder="Nama Lengkap" />
                                <label class="font-semibold text-sm text-gray-600 pb-1 block">Nomor Whatsapp</label>
                                <input type="number" name="nomor"
                                    class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                                    placeholder="Nomor Whatsapp" />
                                <div class="flex justify-around">
                                    <button type="button" id="back-to-amount"
                                        class="transition duration-200 mr-5 bg-yellow-400 focus:bg-green-600 focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                        <span class="inline-block mr-2">Kembali</span>
                                    </button>
                                    <button type="button" id="next-to-bank"
                                        class="transition duration-200 bg-green-600 hover:bg-secondary focus:bg-primary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                        <span class="inline-block mr-2">Berikutnya</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Account Details Form (Initially Hidden) -->
                        <div id="bank-form" class="hidden">
                            <img src="{{ asset('../img/logo3.png') }}" class="w-32 mx-auto mb-1" alt="Logo">
                            <h2 class="text-center font-bold text-2xl text-black">Kenceng Online</h2>
                            <h2 class="text-center text-md text-black">Semudah mengisi kotak amal, masukkan jumlah
                                sesuai kemampuan</h2>
                            <div class="px-5 py-7">
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="border rounded-lg p-5">
                                        <h3 class="text-center font-bold text-lg">10.000</h3>
                                        <p class="text-center text-sm">10.000</p>
                                    </div>
                                    <div class="border rounded-lg p-5">
                                        <h3 class="text-center font-bold text-lg">25.000</h3>
                                        <p class="text-center text-sm">25.000</p>
                                    </div>
                                    <div class="border rounded-lg p-5">
                                        <h3 class="text-center font-bold text-lg">50.000</h3>
                                        <p class="text-center text-sm">50.000</p>
                                    </div>
                                </div>
                                <div class="mt-5 grid grid-cols-3 gap-4">
                                    <div class="border rounded-lg p-5">
                                        <h3 class="text-center font-bold text-lg">100.000</h3>
                                        <p class="text-center text-sm">100.000</p>
                                    </div>
                                    <div class="border rounded-lg p-5">
                                        <h3 class="text-center font-bold text-lg">250.000</h3>
                                        <p class="text-center text-sm">250.000</p>
                                    </div>
                                    <div class="border rounded-lg p-5">
                                        <h3 class="text-center font-bold text-lg">500.000</h3>
                                        <p class="text-center text-sm">500.000</p>
                                    </div>
                                </div>
                                <div class="flex justify-around mt-5">
                                    <button type="button" id="back-to-contact"
                                        class="transition mr-5 duration-200 bg-yellow-400 focus:bg-primary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                        <span class="inline-block mr-2">Kembali</span>
                                    </button>
                                    <button type="button" id="next-to-upload"
                                        class="transition duration-200 bg-green-600 focus:bg-primary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                        <span class="inline-block mr-2">Berikutnya</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Upload Form (Initially Hidden) -->
                        <div id="upload-form" class="hidden">
                            <img src="{{ asset('../img/logo3.png') }}" class="w-32 mx-auto mb-1" alt="Logo">
                            <h2 class="text-center font-bold text-2xl text-black">Kenceng Online</h2>
                            <h2 class="text-center text-md text-black">Semudah mengisi kotak amal, masukkan jumlah
                                sesuai kemampuan</h2>
                            <div class="px-5 py-7">
                                <label class="font-semibold text-sm text-gray-600 pb-1 block">Upload Bukti</label>
                                <input type="file" name="bukti"
                                    class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"
                                    placeholder="Nama Lengkap" />
                                <div class="flex justify-around mt-5">
                                    <button type="button" id="back-to-bank"
                                        class="transition mr-5 duration-200 bg-yellow-400 focus:bg-primary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                        <span class="inline-block mr-2">Kembali</span>
                                    </button>
                                    <button type="button" id="next-to-success"
                                        class="transition duration-200 bg-green-600 focus:bg-primary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                        <span class="inline-block mr-2">Berikutnya</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Success Message Form (Initially Hidden) -->
                        <div id="success-form" class="hidden">
                            <img src="{{ asset('../img/logo3.png') }}" class="w-32 mx-auto mb-1" alt="Logo">
                            <h2 class="text-center font-bold text-2xl text-black">Kenceng Online</h2>
                            <h2 class="text-center text-md text-black">Semudah mengisi kotak amal, masukkan jumlah
                                sesuai kemampuan</h2>
                            <div class="px-5 py-7">
                                <p class="text-center text-sm text-gray-600">Terima kasih atas donasi Anda. Bukti
                                    pembayaran akan diverifikasi dan kami akan menghubungi Anda segera.</p>
                                <div class="flex justify-center mt-5">
                                    <div class="flex justify-around">
                                        <button type="submit" id="back-to-upload"
                                            class="transition duration-200 mr-5 bg-green-600 hover:bg-secondary focus:bg-primary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 text-white w-full py-4 px-4 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                            <span class="inline-block mr-2">Kembali Ke Beranda</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5">
                        <div class="flex justify-center">
                            <button
                                class="transition duration-200 px-5 py-2 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get form elements
            const amountForm = document.getElementById('amount-form');
            const contactForm = document.getElementById('contact-form');
            const bankForm = document.getElementById('bank-form');
            const uploadForm = document.getElementById('upload-form');
            const successForm = document.getElementById('success-form');

            // Get buttons for navigation
            const nextToContactButton = document.getElementById('next-to-contact');
            const backToAmountButton = document.getElementById('back-to-amount');
            const nextToBankButton = document.getElementById('next-to-bank');
            const backToContactButton = document.getElementById('back-to-contact');
            const nextToUploadButton = document.getElementById('next-to-upload');
            const backToBankButton = document.getElementById('back-to-bank');
            const nextToSuccessButton = document.getElementById('next-to-success');
            const backToUploadButton = document.getElementById('back-to-upload-success');

            function showForm(formToShow) {
                // Hide all forms
                amountForm.classList.add('hidden');
                contactForm.classList.add('hidden');
                bankForm.classList.add('hidden');
                uploadForm.classList.add('hidden');
                successForm.classList.add('hidden');

                // Show the desired form
                formToShow.classList.remove('hidden');
            }

            // Event listeners for buttons
            if (nextToContactButton) {
                nextToContactButton.addEventListener('click', function() {
                    showForm(contactForm);
                });
            }

            if (backToAmountButton) {
                backToAmountButton.addEventListener('click', function() {
                    showForm(amountForm);
                });
            }

            if (nextToBankButton) {
                nextToBankButton.addEventListener('click', function() {
                    showForm(bankForm);
                });
            }

            if (backToContactButton) {
                backToContactButton.addEventListener('click', function() {
                    showForm(contactForm);
                });
            }

            if (nextToUploadButton) {
                nextToUploadButton.addEventListener('click', function() {
                    showForm(uploadForm);
                });
            }

            if (backToBankButton) {
                backToBankButton.addEventListener('click', function() {
                    showForm(bankForm);
                });
            }

            if (nextToSuccessButton) {
                nextToSuccessButton.addEventListener('click', function() {
                    showForm(successForm);
                });
            }

            if (backToUploadButton) {
                backToUploadButton.addEventListener('click', function() {
                    showForm(uploadForm);
                });
            }
        });
    </script>

</body>

</html>
