<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Http\Requests\Siswa\StoreRequest;
use App\Http\Requests\Siswa\UpdateRequest;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['model'] = Siswa::all();

        return view('siswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
        
        if($request->hasFile('foto')){
            $file = 'siswa_' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
            $path = base_path() . '/public/foto-siswa';
            
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            $request->file('foto')->move($path, $file);
            $input['foto'] = $file;
        }
        
        Siswa::create($input);

        alert()->success('Data siswa berhasil disimpan', 'Berhasil');
        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['model'] = Siswa::with('kelas.guru')->find($id);
        return view('siswa.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['model'] = Siswa::find($id);
        return view('siswa.edit', $data);
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
        $model = Siswa::find($id);
        $input = $request->all();
        
        if($request->hasFile('foto')){
            $file = 'siswa_' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
            $path = base_path() . '/public/foto-siswa';
            
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            $request->file('foto')->move($path, $file);
            $input['foto'] = $file;
        }
        
        $model->update($input);

        alert()->success('Data siswa berhasil diubah', 'Berhasil');
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Siswa::find($id);
        $model->delete();

        alert()->success('Data siswa berhasil dihapus', 'Berhasil');
        return redirect('siswa');
    }

    public function delete(Request $request)
    {
        $siswa = Siswa::find($request->id);
        $siswa->delete();

        return 'success';
    }

    /**
     * Show kelas management for siswa
     */
    public function kelas($id)
    {
        $data['model'] = Siswa::with('kelas.guru')->find($id);
        $data['kelas_tersedia'] = \App\Models\Kelas::whereDoesntHave('siswa', function($query) use ($id) {
            $query->where('siswa_id', $id);
        })->where('status', 'Aktif')->with('guru')->get();
        
        return view('siswa.kelas', $data);
    }

    /**
     * Add kelas to siswa
     */
    public function addKelas(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $kelas_id = $request->kelas_id;
        
        // Check if siswa is already in this kelas
        if (!$siswa->kelas()->where('kelas_id', $kelas_id)->exists()) {
            $siswa->kelas()->attach($kelas_id);
            alert()->success('Siswa berhasil ditambahkan ke kelas', 'Berhasil');
        } else {
            alert()->error('Siswa sudah ada di kelas ini', 'Gagal');
        }
        
        return redirect()->back();
    }

    /**
     * Remove kelas from siswa
     */
    public function removeKelas(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $kelas_id = $request->kelas_id;
        
        $siswa->kelas()->detach($kelas_id);
        alert()->success('Siswa berhasil dihapus dari kelas', 'Berhasil');
        
        return redirect()->back();
    }
}
