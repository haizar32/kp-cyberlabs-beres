<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kamar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;    

class BookingController extends Controller
{
    public function index(): View
    {
        $booking = DB::table('booking')
            ->select('booking.*', 'users.name as admin', 'kamar.nama_ruangan as ruangan')
            ->join('users', 'users.id', '=', 'user_id')
            ->join('kamar', 'kamar.id', '=', 'kamar_id')
            ->paginate(10);

        return view('booking.index', compact(['booking']));
    }

    public function create(): View
    {
        $kamar = Kamar::where('status_ketersediaan', 0)->get();
        return view('booking.create', compact(['kamar']));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'no_wa' => 'required',
            'check_out' => 'required',
            'check_in' => 'required',
            'kamar_id' => 'required',

        ]);

        Booking::create([
            'nama' => $request->nama,
            'no_wa' => $request->no_wa,
            'check_out' => $request->check_out,
            'check_in' => $request->check_in,
            'kamar_id' => $request->kamar_id,
            'user_id' => Auth::user()->id,
        ]);

        $kamar = Kamar::findOrFail($request->kamar_id);
        $kamar->status_ketersediaan = 1;
        $kamar->save();

        return redirect()->route('booking.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function edit(string $id): View
    {
        //get product by ID
        $booking = Booking::findOrFail($id);
        $kamar = Kamar::all();

        //render view with product
        return view('booking.edit', compact(['booking', 'kamar']));
    }

    public function update(Request $request, $id): RedirectResponse
    {
       
        $booking = Booking::findOrFail($id);
        $booking->update([
            'nama' => $request->nama,
            'no_wa' => $request->no_wa,
            'check_out' => $request->check_out,
            'check_in' => $request->check_in,
            'kamar_id' => $request->kamar_id
        ]);

        return redirect()->route('booking.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $booking = Booking::findOrFail($id);

        Storage::delete('public/booking/'. $booking->nama);

        $booking->delete();

        return redirect()->route('booking.index')->with(['succes' => 'Data Berhasil di hapus']);
    }

    public function finish($id): RedirectResponse
    {
        $booking = Booking::findOrFail($id);
        $booking->is_finished = 1;
        $booking->save();

        $kamar = Kamar::findOrFail($booking->kamar_id);
        $kamar->status_ketersediaan = 0;
        $kamar->save();

        return redirect()->route('booking.index')->with(['success' => 'Sesi Booking Selesai.']);
    }
}
