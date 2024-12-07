<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function display() {
        $data = Pegawai::all();
        return view('display', compact('data'));
    }

    public function create() {
        return view('form');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'posisi' => 'required|string',
            'gaji' => 'required|numeric'
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.display')->with('success', 'Data Pegawai berhasil ditambahkan!');
    }

    public function edit($id) {
        $pegawai = Pegawai::findorfail($id);
        return view('edit', compact('pegawai'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string',
            'posisi' => 'required|string',
            'gaji' => 'required|numeric',
        ]);

        $pegawai = Pegawai::findorFail($id);
        $pegawai->update($request->all());

        return redirect()->route('pegawai.display')->with('success', 'Data Pegawai berhasil diubah!');
    }

    public function destroy($id){
        $pegawai = Pegawai::findorFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.display')->with('success', 'Data Pegawai berhasil dihapus!');
    }
}
