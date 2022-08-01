<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Departemen;
use App\Pegawai;

use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PegawaiExport;

class PegawaiController extends Controller
{
    public function index() {
        $pegawais = Pegawai::all()->sortBy('departemen_id');
        return view('pegawai.index', compact('pegawais'));
    }

    public function create() {
        $departemens = Departemen::all()->sortBy('nama');
        return view('pegawai.create', compact('departemens'));
    }

    public function store(Request $request) {
        $pegawai = new Pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->departemen_id = $request->departemen_id;
        $pegawai->user_id = $request->user_id;
        $pegawai->save();
        return redirect('pegawai');
    }

    public function edit($id) {
        $pegawai = Pegawai::findOrFail($id);
        $departemens = Departemen::all()->sortBy('nama');
        return view('pegawai.edit', compact('pegawai', 'departemens'));
    }

    public function update(Request $request, $id) {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->nama = $request->nama;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->departemen_id = $request->departemen_id;
        $pegawai->update();
        return redirect('pegawai');
    }

    public function destroy($id) {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect('pegawai');
    }

    public function createPdf() {
        $pegawais = Pegawai::all()->sortBy('departemen_id');
        $file = PDF::loadView('pegawai.create_pdf', ['pegawais' => $pegawais]);
        return $file->download('Data Pegawai.pdf');
    }

    public function exportExcel() {
        return Excel::download(new PegawaiExport, 'Data Pegawai.xlsx');
    }
}
