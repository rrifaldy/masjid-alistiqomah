@extends('components.Sidebar')

@section('content')


<div class="p-5 bg-white rounded-md shadow-md">
    <section class="text-gray-600 body-font">
        <div class="container px-5">
            <div class="flex justify-between mb-10">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Laporan Agenda</h1>
            </div>
        </div>

        <div class="overflow-x-auto flex justify-center">

            <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
                <form class="space-y-6" action="#">
                    <h5 class="text-xl font-medium text-gray-900">Cetak Laporan Infaq</h5>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex-1">
                            <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900">Pilih Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@company.com" required />
                        </div>
                        <div class="flex-1">
                            <label for="pembayaran" class="block mb-2 text-sm font-medium text-gray-900">Pilih Pembayaran</label>
                            <select name="pembayaran" id="pembayaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option value="" disabled selected>Pilih Metode Pembayaran</option>
                                <option value="GoPay">GoPay</option>
                                <option value="OVO">OVO</option>
                                <option value="Dana">Dana</option>
                                <option value="Bank BCA">Bank BCA</option>
                                <option value="Bank Mandiri">Bank Mandiri</option>
                                <option value="Bank BRI">Bank BRI</option>
                                <option value="Bank BNI">Bank BNI</option>
                                <option value="Bank Danamon">Bank Danamon</option>
                                <option value="Bank Permata">Bank Permata</option>
                                <!-- Add other options as needed -->
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cetak</button>
                </form>


            </div>
    </section>
</div>

<link href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" rel="stylesheet">
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({});
    });
</script>
@endsection