<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendas = Agenda::all();
        return view('Admin.ManajemenAgenda', compact('agendas'));
    }

    public function home()
    {
        $agendaAktifs = Agenda::where('status', 'aktif')->get();
        $agendaBelums = Agenda::where('status', 'belum')->get();

        return view('AgendaKegiatan', compact('agendaAktifs', 'agendaBelums'));
    }

    public function laporan()
    {
        $agendas = Agenda::all();
        return view('Admin.LaporanAgenda', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'pengisi' => 'required',
            'gambar' => 'required|image', // menambahkan validasi tipe file gambar
            'status' => 'nullable' // menambahkan validasi untuk status
        ]);

        // Penanganan file gambar
        $gambar = $request->file('gambar');
        $namaFile = time() . '.' . $gambar->extension();

        try {
            $gambar->move(public_path('images'), $namaFile);
        } catch (\Exception $e) {
            return redirect()->route('manajemen-agenda')->with('error', 'Gagal mengunggah gambar: ' . $e->getMessage());
        }

        $tanggal = $request->hari . ', ' . $request->tanggal;
        // Jika status kosong maka set null
        $status = $request->status ?? 'aktif';

        // Menggunakan transaksi untuk menjamin konsistensi data
        DB::beginTransaction();

        try {
            $hasil = Agenda::create([
                'nama' => $request->nama,
                'tanggal' => $tanggal,
                'jam' => $request->jam,
                'pengisi' => $request->pengisi,
                'gambar' => $namaFile,
                'status' => $status,
            ]);

            DB::commit();

            // Cek keberhasilan jika error tampilkan errornya dari databasenya
            if ($hasil) {
                return redirect()->route('manajemen-agenda')->with('success', 'Agenda berhasil ditambahkan');
            } else {
                return redirect()->route('manajemen-agenda')->with('error', 'Agenda gagal ditambahkan');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('manajemen-agenda')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'id' => 'required|exists:agendas,id', // memastikan ID ada di database
            'nama' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'pengisi' => 'required',
            'gambar' => 'nullable|image', // menambahkan validasi tipe file gambar, opsional
            'status' => 'nullable' // menambahkan validasi untuk status
        ]);

        // Menemukan agenda berdasarkan ID
        $agenda = Agenda::find($request->id);

        // Penanganan file gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->extension();

            try {
                $gambar->move(public_path('images'), $namaFile);
                // Menghapus gambar lama jika ada
                if ($agenda->gambar && file_exists(public_path('images/' . $agenda->gambar))) {
                    unlink(public_path('images/' . $agenda->gambar));
                }
                $agenda->gambar = $namaFile;
            } catch (\Exception $e) {
                return redirect()->route('manajemen-agenda')->with('error', 'Gagal mengunggah gambar: ' . $e->getMessage());
            }
        }

        // Menggabungkan hari dan tanggal
        $tanggal = $request->hari . ', ' . $request->tanggal;
        // Jika status kosong maka set null
        $status = $request->status ?? 'aktif';

        // Menggunakan transaksi untuk menjamin konsistensi data
        DB::beginTransaction();

        try {
            // Mengupdate data agenda
            $agenda->update([
                'nama' => $request->nama,
                'tanggal' => $tanggal,
                'jam' => $request->jam,
                'pengisi' => $request->pengisi,
                'status' => $status,
            ]);

            DB::commit();

            return redirect()->route('manajemen-agenda')->with('success', 'Agenda berhasil diperbarui');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('manajemen-agenda')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
