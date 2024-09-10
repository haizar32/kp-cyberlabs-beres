<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class KamarController extends Controller
{
    public function index(): View
    {
        $kamar = Kamar::latest()->paginate(10);
        return view('kamar.index', compact('kamar'));
    }

    public function create(): View
    {
        return view('kamar.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'kategori' => 'required'

        ]);

        Kamar::create([
            'nama_ruangan' => $request->nama_ruangan,
            'kategori' => $request->kategori
        ]);

        return redirect()->route('kamar.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamar'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'kategori' => 'required'
        ]);
        $kamar = Kamar::findOrFail($id);
        $kamar->update([
            'nama_ruangan' => $request->nama_ruangan,
            'kategori' => $request->kategori
        ]);
        return redirect()->route('kamar.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $kamar = Kamar::findOrFail($id);

        Storage::delete('public/kamar/'. $kamar->nama_ruangan);

        $kamar->delete();

        return redirect()->route('kamar.index')->with(['succes' => 'Data Berhasil di hapus']);
    }
}
