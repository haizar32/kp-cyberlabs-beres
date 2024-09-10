<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(): View
    {
        $user = User::latest()->paginate(10);
        return view('user.index', compact('user'));
    }
    public function create(): View
    {
        return view('user.create');
    }
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'password' => 'required',
        ]);

        //create product
        User::create([
            'name'         => $request->name,
            'email'         => $request->email,
            'password'   => $request->password,
        ]);

        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get product by ID
        $user = User::findOrFail($id);

        //render view with product
        return view('user.show', compact('user'));
    }
    public function edit(string $id): View
    {
        //get product by ID
        $user = User::findOrFail($id);

        //render view with product
        return view('user.edit', compact('user'));
    }
    public function update(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
      
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    public function destroy($id): RedirectResponse
    {
        $user = User::findOrFail($id);

        Storage::delete('public/user/'. $user->name);

        $user->delete();

        return redirect()->route('user.index')->with(['succes' => 'Data Berhasil di hapus']);
    }

}
