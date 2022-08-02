<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;

use Session;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }
    
    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->password = Hash::make($request->password);
        return redirect('user');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('user');
    }

    public function createPdf() {
        $users = User::all();
        $file = PDF::loadView('user.create_pdf', ['users' => $users]);
        return $file->download('Data User.pdf');
    }

    public function exportExcel() {
        return Excel::download(new UserExport, 'Data User.xlsx');
    }
}
