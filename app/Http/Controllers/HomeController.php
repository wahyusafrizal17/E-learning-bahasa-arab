<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(\Auth::check() && in_array(\Auth::user()->level, ['Admin', 'Guru'])){
            return redirect('siswa');
        }else{
            return view('website.welcome');
        }
    }

    public function materi()
    {
        $data['materi'] = Materi::with('kelas')->where('status', 'Aktif')->orderBy('urutan')->paginate(6);
        return view('website.materi', $data);
    }

    public function detail($id)
    {
        $data['materi'] = Materi::with('kelas')->find($id);
        return view('website.detail', $data);
    }

    public function about()
    {
        return view('website.about');
    }
}
