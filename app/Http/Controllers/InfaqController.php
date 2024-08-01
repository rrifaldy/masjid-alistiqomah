<?php

namespace App\Http\Controllers;

use App\Models\Infaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infaqs = Infaq::all();
        return view('Admin.ManajemenInfaq', compact('infaqs'));
    }

    public function laporan()
    {
        $agendas = Infaq::all();
        return view('Admin.LaporanInfaq', compact('agendas'));
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
            'nominal' => 'required',
            'nama' => 'required',
            'nomor' => 'required',
            'bukti' => 'required|image',
        ]);

        // Penanganan file gambar
        $gambar = $request->file('bukti');
        $namaFile = time() . '.' . $gambar->extension();

        try {
            $gambar->move(public_path('images'), $namaFile);
        } catch (\Exception $e) {
            return redirect()->route('manajemen-infaq')->with('error', 'Gagal mengunggah gambar: ' . $e->getMessage());
        }

        $tanggal = '-';
        $jam  = '-';

        // Menggunakan transaksi untuk menjamin konsistensi data
        DB::beginTransaction();

        try {
            // Jika tidak ada request->metode maka isi dengan '-'
            $metode = '-';
            if ($request->metode == null) {
                $metode = '-';
            } else {
                $metode = $request->metode;
            }
            $hasil = Infaq::create([
                'nominal' => $request->nominal,
                'nama' => $request->nama,
                'nomor' => $request->nomor,
                'metode' => $metode,
                'bukti' => $namaFile,
                'tanggal' => $tanggal,
                'jam' => $jam,
            ]);

            DB::commit();

            // Cek keberhasilan jika error tampilkan errornya dari databasenya
            if ($hasil) {
                return redirect()->route('manajemen-infaq')->with('success', 'infaq berhasil ditambahkan');
            } else {
                return redirect()->route('manajemen-infaq')->with('error', 'infaq gagal ditambahkan');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('manajemen-infaq')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function input(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'nomor' => 'required',
            'bukti' => 'required|image',
        ]);

        // Penanganan file gambar
        $gambar = $request->file('bukti');
        $namaFile = time() . '.' . $gambar->extension();

        try {
            $gambar->move(public_path('images'), $namaFile);
        } catch (\Exception $e) {
            return redirect('/infaq')->with('error', 'Gagal mengunggah gambar: ' . $e->getMessage());
        }

        $tanggal = '-';
        $jam  = '-';

        // Menggunakan transaksi untuk menjamin konsistensi data
        DB::beginTransaction();

        try {
            // Jika tidak ada request->metode maka isi dengan '-'
            $metode = '-';
            if ($request->metode == null) {
                $metode = '-';
            } else {
                $metode = $request->metode;
            }
            $nominal = '';
            if ($request->nominal_lain == null) {
                $nominal = $request->nominal;
            } else {
                $nominal = $request->nominal_lain;
            }
            $hasil = Infaq::create([
                'nominal' => $nominal,
                'nama' => $request->nama,
                'nomor' => $request->nomor,
                'metode' => $metode,
                'bukti' => $namaFile,
                'tanggal' => $tanggal,
                'jam' => $jam,
            ]);

            DB::commit();

            // Cek keberhasilan jika error tampilkan errornya dari databasenya
            if ($hasil) {
                return redirect('/infaq')->with('success', 'infaq berhasil ditambahkan');
            } else {
                return redirect('/infaq')->with('error', 'infaq gagal ditambahkan');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/infaq')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
