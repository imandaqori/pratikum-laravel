<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\MahasiswaDetail;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function store(Request $request){
        // dd($request->all());

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->status = $request->input('status');
        $mahasiswa->semester = $request->input('semester');

        $mahasiswa->save();

        $mahasiswaDetail = new MahasiswaDetail;
        $mahasiswaDetail->mahasiswa_id = $mahasiswa->id;
        $mahasiswaDetail->nama_lengkap = $request->input('nama_lengkap');
        $mahasiswaDetail->tgl_lahir = $request->input('tgl_lahir');
        $mahasiswaDetail->alamat = $request->input('alamat');

        $mahasiswaDetail->save();

        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }
}
