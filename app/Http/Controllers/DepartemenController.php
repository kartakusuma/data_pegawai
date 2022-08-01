<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Departemen;

use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DepartemenExport;

class DepartemenController extends Controller
{
    public function index() {
        $departemens = Departemen::all()->sortBy('nama');
        return view('departemen.index', compact('departemens'));
    }

    public function create() {
        return view('departemen.create');
    }

    public function store(Request $request) {
        $departemen = new Departemen;
        $departemen->nama = $request->nama;
        $departemen->save();
        return redirect('departemen');
    }

    public function edit($id) {
        $departemen = Departemen::findOrFail($id);
        return view('departemen.edit', compact('departemen'));
    }

    public function update(Request $request, $id) {
        $departemen = Departemen::findOrFail($id);
        $departemen->nama = $request->nama;
        $departemen->update();
        return redirect('departemen');
    }

    public function destroy($id) {
        $departemen = Departemen::findOrFail($id);
        $departemen->delete();
        return redirect('departemen');
    }

    public function createPdf() {
        $departemens = Departemen::all()->sortBy('nama');
        $file = PDF::loadView('departemen.create_pdf', ['departemens' => $departemens]);
        return $file->download('Data Departemen.pdf');
    }

    public function exportExcel() {
        return Excel::download(new DepartemenExport, 'Data Departemen.xlsx');
    }
    
}
