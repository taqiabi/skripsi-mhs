<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Products - SantriKoding.com</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                <form>
                    <div class="form-group row mb-3">
                        <label for="judul"
                            class="col-sm-2 col-form-label"><strong>Judul</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="judul" placeholder="Judul"
                                value="{{ $aktivitas->judul }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="no_sk"
                            class="col-sm-2 col-form-label"><strong>No.
                                SK</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="no_sk" placeholder="No SK"
                                value="{{ $aktivitas->no_sk }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="tanggal_sk"
                            class="col-sm-2 col-form-label"><strong>Tanggal
                                SK</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="tanggal_sk" placeholder="Tanggal SK"
                                value="{{ \Carbon\Carbon::parse($aktivitas->tanggal_sk)->translatedFormat('d F Y') }}"
                                readonly>

                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="tanggal_mulai"
                            class="col-sm-2 col-form-label"><strong>Tanggal
                                Mulai</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="tanggal_mulai" placeholder="Tanggal Mulai"
                                value="{{ \Carbon\Carbon::parse($aktivitas->tanggal_mulai)->translatedFormat('d F Y') }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="tanggal_akhir"
                            class="col-sm-2 col-form-label"><strong>Tanggal
                                Akhir</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="tanggal_akhir" placeholder="Tanggal Akhir"
                                value="{{ \Carbon\Carbon::parse($aktivitas->tanggal_akhir)->translatedFormat('d F Y') }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="mahasiswa"
                            class="col-sm-2 col-form-label"><strong>Mahasiswa</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="mahasiswa" placeholder="mahasiswa"
                                value="{{ $aktivitas->mahasiswaRel->nim . ' - ' . $aktivitas->mahasiswaRel->nama }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="semester"
                            class="col-sm-2 col-form-label"><strong>Semester</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="semester" placeholder="Semester"
                                value="{{ $aktivitas->semester == '20241' ? '2024/2025 Ganjil' : '2024/2025 Genap' }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="pembimbing1"
                            class="col-sm-2 col-form-label"><strong>Pembimbing
                                1</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="pembimbing1" placeholder="pembimbing1"
                                value="{{ $aktivitas->pembimbing1Rel->nuptk . ' - ' . $aktivitas->pembimbing1Rel->nama }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="pembimbing2"
                            class="col-sm-2 col-form-label"><strong>Pembimbing
                                2</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="pembimbing2" placeholder="pembimbing2"
                                value="{{ $aktivitas->pembimbing2Rel->nuptk . ' - ' . $aktivitas->pembimbing2Rel->nama }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="penguji1"
                            class="col-sm-2 col-form-label"><strong>Penguji
                                1</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="penguji1" placeholder="penguji1"
                                value="{{ $aktivitas->penguji1Rel->nuptk . ' - ' . $aktivitas->penguji1Rel->nama }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="penguji2"
                            class="col-sm-2 col-form-label"><strong>Penguji
                                2</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="penguji2" placeholder="penguji2"
                                value="{{ $aktivitas->penguji2Rel->nuptk . ' - ' . $aktivitas->penguji2Rel->nama }}"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="penguji3"
                            class="col-sm-2 col-form-label"><strong>Penguji
                                3</strong></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                id="penguji3" placeholder="penguji3"
                                value="{{ $aktivitas->penguji3Rel->nuptk . ' - ' . $aktivitas->penguji3Rel->nama }}"
                                readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
