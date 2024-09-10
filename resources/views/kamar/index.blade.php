@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('kamar.create') }}" class="btn btn-md btn-success mb-3">Tambah Kamar</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Ruangan</th>
                                    <th scope="col">Status Ketersediaan</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kamar as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->nama_ruangan }}</td>
                                    <td>
                                        @if($row->status_ketersediaan == 0)    
                                        <span class="badge rounded-pill text-bg-success">Tersedia</span>
                                        @elseif($row->status_ketersediaan == 1)
                                        <span class="badge rounded-pill text-bg-danger">Tidak Tersedia</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($row->kategori == 0)    
                                        <span class="badge rounded-pill text-bg-primary">Self-Healing</span>
                                        @elseif($row->kategori == 1)
                                        <span class="badge rounded-pill text-bg-danger">Holiyeay</span>
                                        @elseif($row->kategori == 2)    
                                        <span class="badge rounded-pill text-bg-info">Staycation</span>
                                        @elseif($row->kategori == 3)
                                        <span class="badge rounded-pill text-bg-warning">Family</span>
                                        @endif
                                    </td>
                                    
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kamar.destroy', $row->id) }}" method="POST">
                                            <a href="{{ route('kamar.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Ruangan belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $kamar->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection