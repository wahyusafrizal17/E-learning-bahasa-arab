<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\Guru;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mataPelajaran = MataPelajaran::with('guru')->get();
        return view('mata-pelajaran.index', compact('mataPelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        return view('mata-pelajaran.create', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:mata_pelajaran,kode',
            'nama_pelajaran' => 'required',
            'guru_id' => 'required|exists:guru,id',
            'deskripsi' => 'nullable',
            'status' => 'required|in:Aktif,Tidak Aktif'
        ]);

        MataPelajaran::create($request->all());

        return redirect()->route('mata-pelajaran.index')
            ->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mataPelajaran = MataPelajaran::with('guru')->findOrFail($id);
        return view('mata-pelajaran.show', compact('mataPelajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        $guru = Guru::all();
        return view('mata-pelajaran.edit', compact('mataPelajaran', 'guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        
        $request->validate([
            'kode' => 'required|unique:mata_pelajaran,kode,' . $id,
            'nama_pelajaran' => 'required',
            'guru_id' => 'required|exists:guru,id',
            'deskripsi' => 'nullable',
            'status' => 'required|in:Aktif,Tidak Aktif'
        ]);

        $mataPelajaran->update($request->all());

        return redirect()->route('mata-pelajaran.index')
            ->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->delete();

        return redirect()->route('mata-pelajaran.index')
            ->with('success', 'Mata pelajaran berhasil dihapus.');
    }
}
