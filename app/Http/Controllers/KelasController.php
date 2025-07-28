<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Guru;
use App\Models\Siswa;
use App\Http\Requests\Kelas\StoreRequest;
use App\Http\Requests\Kelas\UpdateRequest;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['model'] = Kelas::with('guru', 'siswa')->get();

        return view('kelas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['guru'] = Guru::all();
        return view('kelas.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $input = $request->all();
        
        Kelas::create($input);

        alert()->success('Data kelas berhasil disimpan', 'Berhasil');
        return redirect('kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['model'] = Kelas::with('guru', 'siswa', 'materi')->find($id);
        $data['siswa_tersedia'] = Siswa::whereDoesntHave('kelas', function($query) use ($id) {
            $query->where('kelas_id', $id);
        })->get();
        
        return view('kelas.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['model'] = Kelas::find($id);
        $data['guru'] = Guru::all();
        return view('kelas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $model = Kelas::find($id);
        $input = $request->all();
        
        $model->update($input);

        alert()->success('Data kelas berhasil diubah', 'Berhasil');
        return redirect('kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Kelas::find($id);
        $model->delete();

        alert()->success('Data kelas berhasil dihapus', 'Berhasil');
        return redirect('kelas');
    }

    public function delete(Request $request)
    {
        $kelas = Kelas::find($request->id);
        $kelas->delete();

        return 'success';
    }

    /**
     * Add siswa to kelas
     */
    public function addSiswa(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $siswa_id = $request->siswa_id;
        
        // Check if siswa is already in this kelas
        if (!$kelas->siswa()->where('siswa_id', $siswa_id)->exists()) {
            $kelas->siswa()->attach($siswa_id);
            alert()->success('Siswa berhasil ditambahkan ke kelas', 'Berhasil');
        } else {
            alert()->error('Siswa sudah ada di kelas ini', 'Gagal');
        }
        
        return redirect()->back();
    }

    /**
     * Remove siswa from kelas
     */
    public function removeSiswa(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $siswa_id = $request->siswa_id;
        
        $kelas->siswa()->detach($siswa_id);
        alert()->success('Siswa berhasil dihapus dari kelas', 'Berhasil');
        
        return redirect()->back();
    }
}
