<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ijazah;

class IjazahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ijazahs = Ijazah::orderBy('created_at', 'desc')->get();
        return view('ijazah.index', compact('ijazahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ijazah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_seri' => 'required|string|max:150',
            'nama_mahasiswa' => 'required|string|max:150',
            'npm' => 'required|string|max:50',
            'program_studi' => 'required|string|max:150',
            'fakultas' => 'required|string|max:150',
            'gelar' => 'required|string|max:150',
            'tanggal_lulus' => 'required|date',
            'nama_universitas' => 'required|string|max:150',
            'tempat_terbit' => 'required|string|max:150',
            'tanggal_terbit' => 'required|date',
            'nama_dekan' => 'required|string|max:150',
            'nip_dekan' => 'required|string|max:50',
            'nama_rektor' => 'required|string|max:150',
            'nip_rektor' => 'required|string|max:50',
        ]);

        $ijazah = Ijazah::create($validatedData);

        return redirect()->route('ijazah.show', $ijazah->id)
            ->with('success', 'Data ijazah simulasi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ijazah = Ijazah::findOrFail($id);
        return view('ijazah.show', compact('ijazah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ijazah = Ijazah::findOrFail($id);
        return view('ijazah.edit', compact('ijazah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ijazah = Ijazah::findOrFail($id);

        $validatedData = $request->validate([
            'nomor_seri' => 'required|string|max:150',
            'nama_mahasiswa' => 'required|string|max:150',
            'npm' => 'required|string|max:50',
            'program_studi' => 'required|string|max:150',
            'fakultas' => 'required|string|max:150',
            'gelar' => 'required|string|max:150',
            'tanggal_lulus' => 'required|date',
            'nama_universitas' => 'required|string|max:150',
            'tempat_terbit' => 'required|string|max:150',
            'tanggal_terbit' => 'required|date',
            'nama_dekan' => 'required|string|max:150',
            'nip_dekan' => 'required|string|max:50',
            'nama_rektor' => 'required|string|max:150',
            'nip_rektor' => 'required|string|max:50',
        ]);

        $ijazah->update($validatedData);

        return redirect()->route('ijazah.show', $ijazah->id)
            ->with('success', 'Data ijazah simulasi berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ijazah = Ijazah::findOrFail($id);
        $ijazah->delete();

        return redirect()->route('ijazah.index')
            ->with('success', 'Data ijazah simulasi berhasil dihapus.');
    }
}
