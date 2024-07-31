@extends('components.Sidebar')

@section('content')

<!-- Input Modal modal -->
<div id="input-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Data Kegiatan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="input-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            @csrf
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4">
                    <div class="col-span-2">
                        <label for="nama_kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Kegiatan" required="">
                    </div>
                    <div class="grid grid-cols-3 gap-4 col-span-2">
                        <div>
                            <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari Kegiatan</label>
                            <select name="hari" id="hari" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                <option value="" disabled selected>Pilih hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div>
                            <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Kegiatan</label>
                            <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga Sewa" required="">
                        </div>
                        <div>
                            <label for="jam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam</label>
                            <input type="time" name="jam" id="jam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kapasitas" required="">
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Mobil" required="">
                    </div>
                    <div class="col-span-2 flex items-center">
                        <input type="checkbox" name="yang" id="yang" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 mr-2">
                        <label for="yang" class="text-sm font-medium text-gray-900 dark:text-white">Yang akan datang</label>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Tambah data baru
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Selesai Modal modal -->
<div id="selesai-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="selesai-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda ingin menyelesaikan kegiatan ini?</h3>
                <button data-modal-hide="selesai-modal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Ya
                </button>
                <button data-modal-hide="selesai-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak, batalkan</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div id="edit-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Data Kegiatan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="edit-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            @csrf
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4">
                    <div class="col-span-2">
                        <label for="nama_kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Kegiatan" required="">
                    </div>
                    <div class="grid grid-cols-3 gap-4 col-span-2">
                        <div>
                            <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari Kegiatan</label>
                            <select name="hari" id="hari" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                <option value="" disabled selected>Pilih hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div>
                            <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Kegiatan</label>
                            <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga Sewa" required="">
                        </div>
                        <div>
                            <label for="jam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam</label>
                            <input type="time" name="jam" id="jam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kapasitas" required="">
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Mobil" required="">
                    </div>
                    <div class="col-span-2 flex items-center">
                        <input type="checkbox" name="yang" id="yang" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 mr-2">
                        <label for="yang" class="text-sm font-medium text-gray-900 dark:text-white">Yang akan datang</label>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Simpan data baru
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Hapus Modal modal -->
<div id="hapus-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="hapus-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda ingin menghapus kegiatan ini?</h3>
                <button data-modal-hide="hapus-modal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Ya
                </button>
                <button data-modal-hide="hapus-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak, batalkan</button>
            </div>
        </div>
    </div>
</div>

<!-- Detail modal -->


<div class="p-5 bg-white rounded-md shadow-md">
    <section class="text-gray-600 body-font">
        <div class="container px-5">
            <div class="flex justify-between mb-10">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Manajemen Agenda Kegiatan</h1>
                <button data-modal-target="input-modal" data-modal-toggle="input-modal" class="text-white bg-primary hover:bg-primary focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm py-1 px-4 text-center items-center">
                    Tambah
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table id="example" class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead>
                    <tr>
                        <th class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Kegiatan</th>
                        <th class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jam</th>
                        <th class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Pengisi</th>
                        <th class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Gambar</th>
                        <th class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4 text-gray-900">Kegiatan A</td>
                        <td class="px-6 py-4 text-gray-900">2024-07-31</td>
                        <td class="px-6 py-4 text-gray-900">08:30</td>
                        <td class="px-6 py-4 text-gray-900">John Doe</td>
                        <td class="px-6 py-4">
                            <img src="https://via.placeholder.com/50" alt="Gambar Kegiatan A" class="w-12 h-12 object-cover rounded">
                        </td>
                        <td class="px-6 py-4 text-gray-900">Aktif</td>
                        <td class="px-6 py-4">
                            <button class="text-white bg-blue-500 hover:bg-blue-900 mx-2 px-4 py-2 rounded-md" data-modal-target="selesai-modal" data-modal-toggle="selesai-modal">Selesai</button>
                            <button class="text-white bg-yellow-500 hover:bg-yellow-900 mx-2 px-4 py-2 rounded-md" data-modal-target="edit-modal" data-modal-toggle="edit-modal">Edit</button>
                            <button class="text-white bg-red-500 hover:bg-red-900 mx-2 px-4 py-2 rounded-md" data-modal-target="hapus-modal" data-modal-toggle="hapus-modal">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-gray-900">Kegiatan B</td>
                        <td class="px-6 py-4 text-gray-900">2024-08-01</td>
                        <td class="px-6 py-4 text-gray-900">10:00</td>
                        <td class="px-6 py-4 text-gray-900">Jane Doe</td>
                        <td class="px-6 py-4">
                            <img src="https://via.placeholder.com/50" alt="Gambar Kegiatan B" class="w-12 h-12 object-cover rounded">
                        </td>
                        <td class="px-6 py-4 text-gray-900">Tidak Aktif</td>
                        <td class="px-6 py-4">
                        <button class="text-white bg-blue-500 hover:bg-blue-900 mx-2 px-4 py-2 rounded-md" data-modal-target="selesai-modal" data-modal-toggle="selesai-modal">Selesai</button>
                            <button class="text-white bg-yellow-500 hover:bg-yellow-900 mx-2 px-4 py-2 rounded-md" data-modal-target="edit-modal" data-modal-toggle="edit-modal">Edit</button>
                            <button class="text-white bg-red-500 hover:bg-red-900 mx-2 px-4 py-2 rounded-md" data-modal-target="hapus-modal" data-modal-toggle="hapus-modal">Hapus</button>
                        </td>
                    </tr>
                    <!-- Tambah baris data lainnya sesuai kebutuhan -->
                </tbody>
            </table>
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