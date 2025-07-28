<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Http\Requests\Guru\StoreRequest;
use App\Http\Requests\Guru\UpdateRequest;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['model'] = Guru::all();

        return view('guru.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            $file = 'guru_' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
            $path = base_path() . '/public/foto-guru';
            
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            $request->file('foto')->move($path, $file);
            $input['foto'] = $file;
        }
        
        Guru::create($input);

        alert()->success('Data guru berhasil disimpan', 'Berhasil');
        return redirect('guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['model'] = Guru::find($id);
        return view('guru.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['model'] = Guru::find($id);
        return view('guru.edit', $data);
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
        $model = Guru::find($id);
        $input = $request->all();
        
        if($request->hasFile('foto')){
            $file = 'guru_' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
            $path = base_path() . '/public/foto-guru';
            
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            $request->file('foto')->move($path, $file);
            $input['foto'] = $file;
        }
        
        $model->update($input);

        alert()->success('Data guru berhasil diubah', 'Berhasil');
        return redirect('guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Guru::find($id);
        $model->delete();

        alert()->success('Data guru berhasil dihapus', 'Berhasil');
        return redirect('guru');
    }

    public function delete(Request $request)
    {
        $guru = Guru::find($request->id);
        $guru->delete();

        return 'success';
    }
}
