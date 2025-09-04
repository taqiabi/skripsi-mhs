<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Skripsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('aktivitas.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            {{-- Judul --}}
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul Skripsi">
                            
                                <!-- error message untuk judul -->
                                @error('judul')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                {{-- No. SK --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">No. SK</label>
                                        <input type="text" class="form-control @error('no_sk') is-invalid @enderror" name="no_sk" placeholder="Masukkan No. SK Skripsi" value={{  old('no_sk') }}>
                                    
                                        <!-- error message untuk no_sk -->
                                        @error('no_sk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Tanggal SK --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tanggal SK</label>
                                        <input type="date" class="form-control @error('tanggal_sk') is-invalid @enderror" name="tanggal_sk" value="{{ old('tanggal_sk') }}" placeholder="Masukkan Tanggal SK Skripsi">
                                    
                                        <!-- error message untuk tanggal_sk -->
                                        @error('tanggal_sk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                {{-- Tanggal Mulai --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tanggal Mulai</label>
                                        <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}" placeholder="Masukkan Tanggal Mulai Skripsi">
                                    
                                        <!-- error message untuk tanggal_mulai -->
                                        @error('tanggal_mulai')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Tanggal Akhir --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tanggal Akhir</label>
                                        <input type="date" class="form-control @error('tanggal_akhir') is-invalid @enderror" name="tanggal_akhir" value="{{ old('tanggal_akhir') }}" placeholder="Masukkan Tanggal Akhir Skripsi">
                                    
                                        <!-- error message untuk tanggal_akhir -->
                                        @error('tanggal_akhir')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                {{-- Mahasiswa --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Mahasiswa</label>
                                        <select class="form-select" name="mahasiswa" id="mahasiswa" data-placeholder="Pilih Mahasiswa">
                                            <option></option>
                                            @foreach ($mahasiswas as $mahasiswa)
                                                <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nim . ' - ' . $mahasiswa->nama }}</option>
                                            @endforeach
                                        </select>
                                        
                                        <!-- error message untuk mahasiswa -->
                                        @error('mahasiswa')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Semester --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Semester</label>
                                        <select name="semester" id="semester" class="form-select" placeholder="Pilih Semester">
                                            <option selected hidden>Pilih Semester </option>
                                            <option value="20241">2024/2025 Ganjil</option>
                                            <option value="20242">2024/2025 Genap</option>
                                        </select>
                                        <!-- error message untuk semester -->
                                        @error('semester')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Pembimbing 1</label>
                                        <select class ="form-select" name="pembimbing1" id ="pembimbing1" data-placeholder="Masukkan Nama Pembimbing 1">
                                            <option></option>
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                        <!-- error message untuk pembimbing 1 -->
                                        @error('pembimbing1')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Pembimbing 2</label>
                                        <select class ="form-select" name="pembimbing2" id ="pembimbing2" data-placeholder="Masukkan Nama Pembimbing 2">
                                            <option></option>
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                    
                                        <!-- error message untuk mahasiswa -->
                                        @error('pembimbing2')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                {{-- Penguji 1 --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Penguji 1</label>
                                        <select class ="form-select" name="penguji1" id ="penguji1" data-placeholder="Masukkan Nama Penguji 1">
                                            <option></option>
                                             @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                    
                                        <!-- error message untuk mahasiswa -->
                                        @error('penguji1')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Penguji 2 --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Penguji 2</label>
                                        <select class ="form-select" name="penguji2" id ="penguji2" data-placeholder="Masukkan Nama Penguji 2">
                                            <option></option>
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                    
                                        <!-- error message untuk mahasiswa -->
                                        @error('penguji2')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                                
                            <div class="row">
                                {{-- Penguji 3 --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Penguji 3</label>
                                        <select class ="form-select" name="penguji3" id ="penguji3" data-placeholder="Masukkan Nama Penguji 3">
                                            <option></option>
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                        <!-- error message untuk mahasiswa -->
                                        @error('penguji3')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <script>
        $('#mahasiswa, #pembimbing1, #pembimbing2, #penguji1, #penguji2, #penguji3').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    </script>
</body>
</html>