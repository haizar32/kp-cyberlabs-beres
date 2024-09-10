<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kamar.update', $kamar->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')


                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama Ruangan</label>
                                <input type="text" class="form-control @error('nama_ruangan') is-invalid @enderror" name="nama_ruangan" value="{{ old('nama_ruangan', $kamar->nama_ruangan) }}" placeholder="Masukkan Nama Ruangan">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                        <label class="font-weight-bold">Kategori</label>
                                        <select class="form-control @error('kategori') is-invalid @enderror" name="kategori" placeholder="Pilih Kategori">
                                            <option disabled>Pilih Kategori</option>
                                            <option @if($kamar->kategori == 0) selected @endif value="0">Self-Healing</option>
                                            <option @if($kamar->kategori == 1) selected @endif value="1">Holiyeay</option>
                                            <option @if($kamar->kategori == 2) selected @endif value="2">Staycation</option>
                                            <option @if($kamar->kategori == 3) selected @endif value="3">Family</option>
                                        </select>
                            </div>

                           
                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>
</html>