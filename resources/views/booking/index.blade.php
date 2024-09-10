@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card border-0 shadow-sm rounded ">
                    <div class="card-body">
                        <a href="{{ route('booking.create') }}" class="btn btn-md btn-success mb-3">Tambah Booking</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">No Whatsapp</th>
                                    <th scope="col">Checkin</th>
                                    <th scope="col">Checkout</th>
                                    <th scope="col">Kamar</th>
                                    <th scope="col">Admin</th>
                                    <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($booking as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->no_wa }}</td>
                                    <td>{{ $row->check_in }}</td>
                                    <td>{{ $row->check_out }}</td>
                                    <td>{{ $row->ruangan }}</td>
                                    <td>{{ $row->admin }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('booking.destroy', $row->id) }}" method="POST">
                                            <a href="{{ route('booking.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>

                                            @if($row->is_finished == 0)
                                            <a href="{{ route('booking.finish', $row->id) }}" class="btn btn-sm btn-warning">SELESAI</a>
                                            @endif

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Products belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $booking->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection