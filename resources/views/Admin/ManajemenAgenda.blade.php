@extends('components.Sidebar')

@section('content')
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
    <!-- Input Modal modal -->
    <div id="input-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Tambah Data Kegiatan
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
                        data-modal-toggle="input-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5" action="{{ route('manajemen-agenda.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 mb-4">
                        <div class="col-span-2">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                Kegiatan</label>
                            <input type="text" name="nama" id="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Nama Kegiatan" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="pengisi" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                Pengisi</label>
                            <input type="text" name="pengisi" id="pengisi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Nama Kegiatan" required="">
                        </div>
                        <div class="grid grid-cols-3 gap-4 col-span-2">
                            <div>
                                <label for="hari"
                                    class="block mb-2 text-sm font-medium text-gray-900">Hari
                                    Kegiatan</label>
                                <select name="hari" id="hari"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    required="">
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
                                <label for="tanggal"
                                    class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                                    Kegiatan</label>
                                <input type="date" name="tanggal" id="tanggal"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Harga Sewa" required="">
                            </div>
                            <div>
                                <label for="jam"
                                    class="block mb-2 text-sm font-medium text-gray-900">Jam</label>
                                <input type="time" name="jam" id="jam"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Kapasitas" required="">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="gambar"
                                class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                            <input type="file" name="gambar" id="gambar"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Nama Mobil" required="">
                        </div>
                        <div class="col-span-2 flex items-center">
                            <input type="checkbox" name="status" value="belum" id="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg mr-2">
                            <label for="status" class="text-sm font-medium text-gray-900">Yang akan
                                datang</label>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-green-700 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Tambah data baru
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Selesai Modal modal -->
    <div id="selesai-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="selesai-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah anda ingin menyelesaikan
                        kegiatan ini?</h3>
                    <button data-modal-hide="selesai-modal" type="button"
                        class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Ya
                    </button>
                    <button data-modal-hide="selesai-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak,
                        batalkan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="edit-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Tambah Data Kegiatan
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
                        data-modal-toggle="edit-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5" action="{{ route('manajemen-agenda.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id">
                    <div class="grid gap-4 mb-4">
                        <div class="col-span-2">
                            <label for="nama_kegiatan"
                                class="block mb-2 text-sm font-medium text-gray-900">Nama Kegiatan</label>
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Nama Kegiatan" required>
                        </div>
                        <div class="grid grid-cols-3 gap-4 col-span-2">
                            <div>
                                <label for="hari"
                                    class="block mb-2 text-sm font-medium text-gray-900">Hari
                                    Kegiatan</label>
                                <select name="hari" id="hari"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    required>
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
                                <label for="tanggal"
                                    class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                                    Kegiatan</label>
                                <input type="date" name="tanggal" id="tanggal"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Tanggal Kegiatan" required>
                            </div>
                            <div>
                                <label for="jam"
                                    class="block mb-2 text-sm font-medium text-gray-900">Jam</label>
                                <input type="time" name="jam" id="jam"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Jam" required>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="pengisi"
                                class="block mb-2 text-sm font-medium text-gray-900">Pengisi</label>
                            <input type="text" name="pengisi" id="pengisi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Pengisi" required>
                        </div>
                        <div class="col-span-2">
                            <label for="gambar"
                                class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                            <input type="file" name="gambar" id="gambar"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Gambar">
                            <!-- Optional: Display current image -->
                            <img id="img-preview" src="" alt="Current Image"
                                class="w-12 h-12 object-cover rounded mt-2" style="display:none;">
                        </div>
                        <div class="col-span-2 flex items-center">
                            <input type="checkbox" name="status" id="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg mr-2">
                            <label for="status" class="text-sm font-medium text-gray-900">Aktif</label>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-green-700 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Simpan perubahan
                    </button>
                </form>

            </div>
        </div>
    </div>

    <!-- Hapus Modal modal -->
    <div id="hapus-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="hapus-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah anda ingin menghapus
                        kegiatan ini?</h3>
                    <button data-modal-hide="hapus-modal" type="button"
                        class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Ya
                    </button>
                    <button data-modal-hide="hapus-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak,
                        batalkan</button>
                </div>
            </div>
        </div>
    </div>

<!-- Detail modal -->
<div id="detail-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Detail Kegiatan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="detail-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/250" alt="Gambar Kegiatan" class="w-full rounded-md max-w-[250px] h-auto object-cover mb-4">
                </div>
                <div class="flex flex-col space-y-2">
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-900 dark:text-white">Nama Kegiatan</span>
                        <span id="modal-nama-kegiatan" class="text-gray-500 dark:text-gray-400">Kegiatan A</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-900 dark:text-white">Tanggal:</span>
                        <span id="modal-tanggal" class="text-gray-500 dark:text-gray-400">2024-07-31</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-900 dark:text-white">Jam:</span>
                        <span id="modal-jam" class="text-gray-500 dark:text-gray-400">08:30</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-900 dark:text-white">Pengisi</span>
                        <span id="modal-pengisi" class="text-gray-500 dark:text-gray-400">John Doe</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-900 dark:text-white">Status:</span>
                        <span id="modal-status" class="text-gray-500 dark:text-gray-400">Aktif</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="p-5 bg-white rounded-md shadow-md">
        <section class="text-gray-600 body-font">
            <div class="container px-5">
                <div class="flex justify-between mb-10">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Manajemen Agenda Kegiatan
                    </h1>
                    <button data-modal-target="input-modal" data-modal-toggle="input-modal"
                        class="text-white bg-primary hover:bg-primary focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm py-1 px-4 text-center items-center">
                        Tambah
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table id="example" class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Nama Kegiatan</th>
                            <th
                                class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Tanggal</th>
                            <th
                                class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Jam</th>
                            <th
                                class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Pengisi</th>
                            <th
                                class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Gambar</th>
                            <th
                                class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Status</th>
                            <th
                                class="px-6 py-3  bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($agendas as $agenda)
                            <tr>
                                <td class="px-6 py-4 text-gray-900">{{ $agenda->nama }}</td>
                                <td class="px-6 py-4 text-gray-900">{{ $agenda->tanggal }}</td>
                                <td class="px-6 py-4 text-gray-900">{{ $agenda->jam }}</td>
                                <td class="px-6 py-4 text-gray-900">{{ $agenda->pengisi }}</td>
                                @if ($agenda->gambar == null)
                                    <td class="px-6 py-4 text-gray-900">Tidak ada gambar</td>
                                @else
                                    <td class="px-6 py-4">
                                        <img src="{{ asset('images/' . $agenda->gambar) }}" alt="{{ $agenda->gambar }}"
                                            class="w-12 h-12 object-cover rounded">
                                    </td>
                                @endif

                                <td class="px-6 py-4 text-gray-900">{{ $agenda->status }}</td>
                                <td class="px-6 py-4">
                                    <button class="text-white bg-blue-500 hover:bg-blue-900 mx-2 px-4 py-2 rounded-md"
                                        data-modal-target="selesai-modal"
                                        data-modal-toggle="selesai-modal">Selesai</button>
                                    <button class="text-white bg-yellow-500 hover:bg-yellow-900 mx-2 px-4 py-2 rounded-md"
                                        data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                        data-id="{{ $agenda->id }}" data-nama="{{ $agenda->nama }}"
                                        data-hari="{{ $agenda->hari }}" data-tanggal="{{ $agenda->tanggal }}"
                                        data-jam="{{ $agenda->jam }}" data-pengisi="{{ $agenda->pengisi }}"
                                        data-gambar="{{ $agenda->gambar }}" data-status="{{ $agenda->status }}"
                                        onclick="editAgenda(this)">Edit</button>
                                    <button class="text-white bg-red-500 hover:bg-red-900 mx-2 px-4 py-2 rounded-md"
                                        data-modal-target="hapus-modal" data-modal-toggle="hapus-modal">Hapus</button>
                                </td>
                            </tr>
                        @empty
                        @endforelse

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

        function editAgenda(button) {
            var id = button.getAttribute('data-id');
            var nama = button.getAttribute('data-nama');
            var hari = button.getAttribute('data-hari');
            var tanggal = button.getAttribute('data-tanggal');
            var jam = button.getAttribute('data-jam');
            var pengisi = button.getAttribute('data-pengisi');
            var gambar = button.getAttribute('data-gambar');
            var status = button.getAttribute('data-status');

            document.getElementById('id').value = id;
            document.getElementById('nama_kegiatan').value = nama;
            document.getElementById('hari').value = hari;
            document.getElementById('tanggal').value = tanggal;
            document.getElementById('jam').value = jam;
            document.getElementById('pengisi').value = pengisi;

            // Optional: if you want to show the current image in the modal
            if (gambar) {
                var imgPreview = document.getElementById('img-preview');
                imgPreview.src = '{{ asset('images') }}/' + gambar;
                imgPreview.style.display = 'block';
            } else {
                document.getElementById('img-preview').style.display = 'none';
            }

            // Set the status checkbox if necessary
            var statusCheckbox = document.getElementById('status');
            if (status === 'aktif') {
                statusCheckbox.checked = true;
            } else {
                statusCheckbox.checked = false;
            }
        }
    </script>
@endsection
