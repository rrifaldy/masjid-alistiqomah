<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
        <div class="p-5 xs:p-0 mx-auto md:w-full md:max-w-md">
        <img src="{{ asset('../img/logo3.png') }}" class="w-32 mx-auto mb-5" alt="Logo">
            <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                <div class="px-5 py-7">
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Username</label>
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" placeholder="Username" required />
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                    <input type="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" placeholder="Password" required />
                    <button type="submit" class="transition duration-200 bg-primary hover:bg-secondary focus:bg-primary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2">Login</span>
                    </button>
                </div>
                <div class="py-5">
                    <div class="flex justify-center">
                        <button class="transition duration-200 px-5 py-2 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                            <span class="inline-block ml-1">Forgot Password</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="py-5">
                <div class="flex justify-center">
                    <button class="transition duration-200 px-5 py-2 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>