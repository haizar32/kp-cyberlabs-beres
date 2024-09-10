@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
    
                <div class="card border-0 shadow-sm rounded ">
                    <div class="card-body">
                        <a href="{{ route('user.create') }}" class="btn btn-md btn-success mb-3">Tambah User</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $row->id) }}" method="POST">
                                            <a href="{{ route('user.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                        {{ $user->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection