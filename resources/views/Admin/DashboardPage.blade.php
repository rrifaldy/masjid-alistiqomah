@extends('components.Sidebar')

@section('content')

<div class="p-5 bg-white rounded-md shadow-md">
    <section class="text-gray-600 body-font">
        <div class="container px-5">
            <div class="flex flex-col text-left w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Dashboard</h1>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
                <!-- Jumlah Infaq -->
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <i class="fas fa-donate text-primary text-4xl mb-3 inline-block"></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">531.500</h2>
                        <p class="leading-relaxed">Jumlah Infaq</p>
                    </div>
                </div>
                <!-- Jumlah Acara -->
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <i class="fas fa-calendar-alt text-primary text-4xl mb-3 inline-block"></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">13</h2>
                        <p class="leading-relaxed">Jumlah Acara</p>
                    </div>
                </div>
                <!-- Acara yang akan datang -->
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <i class="fas fa-calendar-check text-primary text-4xl mb-3 inline-block"></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">7</h2>
                        <p class="leading-relaxed">Acara yang akan datang</p>
                    </div>
                </div>
                <!-- Jumlah Infaq/orang -->
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <i class="fas fa-users text-primary text-4xl mb-3 inline-block"></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">10</h2>
                        <p class="leading-relaxed">Jumlah Infaq/orang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



@endsection