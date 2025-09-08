<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit aktivitas - SantriKoding.com</title>
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
                        <form action="{{ route('aktivitas.update', $aktivitas->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $aktivitas->judul) }}" placeholder="Masukkan Judul aktivitas">
                            
                                <!-- error message untuk judul -->
                                @error('judul')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">No. SK</label>
                                <input type="text" class="form-control @error('no_sk') is-invalid @enderror" name="no_sk" value="{{ old('no_sk', $aktivitas->no_sk) }}" placeholder="Masukkan no_sk">
                            
                                <!-- error message untuk no_sk -->
                                @error('no_sk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tanggal SK</label>
                                        <input type="date" class="form-control @error('tanggal_sk') is-invalid @enderror" name="tanggal_sk" value="{{ old('tanggal_sk', $aktivitas->tanggal_sk) }}" placeholder="Masukkan Harga aktivitas">
                                    
                                        <!-- error message untuk tanggal_sk -->
                                        @error('tanggal_sk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tanggal Mulai</label>
                                        <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" value="{{ old('tanggal_mulai', $aktivitas->tanggal_mulai) }}" placeholder="Masukkan Harga aktivitas">
                                    
                                        <!-- error message untuk tanggal_mulai -->
                                        @error('tanggal_mulai')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tanggal Akhir</label>
                                        <input type="date" class="form-control @error('tanggal_akhir') is-invalid @enderror" name="tanggal_akhir" value="{{ old('tanggal_akhir', $aktivitas->tanggal_akhir) }}" placeholder="Masukkan tanggal_akhir aktivitas">
                                    
                                        <!-- error message untuk tanggal_akhir -->
                                        @error('tanggal_akhir')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- Mhs --}}
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Mahasiswa</label>
                                <select class="form-select" name="mahasiswa" id="mahasiswa" data-placeholder="">
                                    <option selected value="{{ $aktivitas->mahasiswa}}" hidden>{{ $aktivitas->mahasiswaRel->nim . ' - ' . $aktivitas->mahasiswaRel->nama }}</option>
                                        @foreach ($mahasiswas as $mahasiswa)
                                    <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nim . ' - ' . $mahasiswa->nama }}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" class="form-control @error('mahasiswa') is-invalid @enderror" name="mahasiswa" value="{{ old('mahasiswa', $aktivitas->mahasiswaRel->nim . ' - ' . $aktivitas->mahasiswaRel->nama) }}" placeholder="Nama Mahasiswa"> --}}
                            
                                <!-- error message untuk mahasiswa -->
                                @error('mahasiswa')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Semester --}}
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Semester</label>
                                <select name="semester" id="semester" class="form-select" placeholder="Pilih Semester">
                                    <option hidden>Pilih Semester</option>
                                        <option value="20241" {{ old('semester', $aktivitas->semester) == '20241' ? 'selected' : '' }}>
                                            2024/2025 Ganjil
                                        </option>
                                        <option value="20242" {{ old('semester', $aktivitas->semester) == '20242' ? 'selected' : '' }}>
                                            2024/2025 Genap
                                        </option>
                                    </select>
                                {{-- <input type="text" class="form-control @error('semester') is-invalid @enderror" name="semester" value="{{ old('semester', $aktivitas->semester) }}" placeholder="Semester"> --}}
                            
                                <!-- error message untuk semester -->
                                @error('semester')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            {{-- Pemb1 --}}
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Pembimbing 1</label>
                                <select class ="form-select" name="pembimbing1" id ="pembimbing1" data-placeholder="">
                                            <option selected value="{{ $aktivitas->pembimbing1}}" hidden>{{ $aktivitas->pembimbing1Rel->nuptk . ' - ' . $aktivitas->pembimbing1Rel->nama }}</option>
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                {{-- <input type="text" class="form-control @error('pembimbing1') is-invalid @enderror" name="pembimbing1" value="{{ old('pembimbing1', $aktivitas->pembimbing1Rel->nuptk . '-' . $aktivitas->pembimbing1Rel->nama) }}" placeholder="Masukkan Nama Pembimbing 1"> --}}
                            
                                <!-- error message untuk judul -->
                                @error('pembimbing1')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Pemb2 --}}
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Pembimbing 2</label>
                                <select class ="form-select" name="pembimbing2" id ="pembimbing2" data-placeholder="">
                                            <option selected value="{{ $aktivitas->pembimbing2}}" hidden>{{ $aktivitas->pembimbing2Rel->nuptk . ' - ' . $aktivitas->pembimbing2Rel->nama }}</option>
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                {{-- <input type="text" class="form-control @error('pembimbing2') is-invalid @enderror" name="pembimbing2" value="{{ old('pembimbing2', $aktivitas->pembimbing2Rel->nuptk . '-' . $aktivitas->pembimbing2Rel->nama) }}" placeholder="Masukkan Nama Pembimbing 2"> --}}
                            
                                <!-- error message untuk judul -->
                                @error('pembimbing2')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- penguji1 --}}
                                <div class="form-group mb-3">
                                <label class="font-weight-bold">Penguji 1</label>
                                <select class ="form-select" name="penguji1" id ="penguji1" data-placeholder="">
                                            <option selected value="{{ $aktivitas->penguji1}}" hidden>{{ $aktivitas->penguji1Rel->nuptk . ' - ' . $aktivitas->penguji1Rel->nama }}</option>
                                             @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                {{-- <input type="text" class="form-control @error('penguji1') is-invalid @enderror" name="penguji1" value="{{ old('penguji1', $aktivitas->penguji1Rel->nuptk . '-' . $aktivitas->penguji1Rel->nama) }}" placeholder="Masukkan Nama Penguji 1"> --}}
                            
                                <!-- error message untuk judul -->
                                @error('penguji1')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- peng2 --}}
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Penguji 2</label>
                                <select class ="form-select" name="penguji2" id ="penguji2" data-placeholder="">
                                            <option selected value="{{ $aktivitas->penguji2}}" hidden>{{ $aktivitas->penguji2Rel->nuptk . ' - ' . $aktivitas->penguji2Rel->nama }}</option>
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                {{-- <input type="text" class="form-control @error('penguji2') is-invalid @enderror" name="penguji2" value="{{ old('penguji2', $aktivitas->penguji2Rel->nuptk . '-' . $aktivitas->penguji2Rel->nama) }}" placeholder="Masukkan Nama Penguji 2"> --}}
                            
                                <!-- error message untuk judul -->
                                @error('penguji2')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- 3 --}}
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Penguji 3</label>
                                <select class ="form-select" name="penguji3" id ="penguji3" data-placeholder="">
                                      <option selected value="{{ $aktivitas->penguji3}}" hidden>{{ $aktivitas->penguji3Rel->nuptk . ' - ' . $aktivitas->penguji3Rel->nama }}</option>
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->id }}">{{ $dosen->nuptk . ' - ' . $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                {{-- <input type="text" class="form-control @error('penguji3') is-invalid @enderror" name="penguji3" value="{{ old('penguji3', $aktivitas->penguji3Rel->nuptk . '-' . $aktivitas->penguji3Rel->nama) }}" placeholder="Masukkan Nama Penguji 3"> --}}
                            
                                <!-- error message untuk judul -->
                                @error('penguji3')
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
