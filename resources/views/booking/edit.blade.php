@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('booking.update', $booking->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $booking->nama }}" placeholder="Masukkan Nama">

                                <!-- error message untuk title -->
                                @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group mb-3">
                                <label class="font-weight-bold">No WhatsApp</label>
                                <input type="text" class="form-control @error('no_wa') is-invalid @enderror" name="no_wa" value="{{ $booking->no_wa }}" placeholder="Masukkan Nomor Whatsapp">

                                <!-- error message untuk title -->
                                @error('no_wa')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tanggal Check In</label>
                                <input type="date" class="form-control @error('check_in') is-invalid @enderror" name="check_in" value="{{ $booking->check_in }}" placeholder="Masukkan Tanggal Check In">

                                <!-- error message untuk title -->
                                @error('check_in')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tanggal Check Out</label>
                                <input type="date" class="form-control @error('check_out') is-invalid @enderror" name="check_out" value="{{ $booking->check_out }}" placeholder="Masukkan Tanggal Check Out">

                                <!-- error message untuk title -->
                                @error('check_out')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Kamar</label>
                                <select class="form-control @error('kamar_id') is-invalid @enderror" name="kamar_id" placeholder="Masukkan Kamar Id">
                                    <option disabled>Pilih Kamar</option>
                                    @foreach($kamar as $row)
                                    <option @if($row->id == $booking->kamar_id) selected @endif value="{{ $row->id }}">{{ $row->nama_ruangan }}</option>
                                    @endforeach    
                                </select>
                                <!-- error message untuk title -->
                                @error('kamar_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection