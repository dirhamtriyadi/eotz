@extends('templates.main')

@push('styles')
@endpush

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ternak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('main-content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Ternak</h3>

                <div class="card-tools">
                    {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button> --}}
                    {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button> --}}
                </div>
            </div>
            <div class="card-body">
                <a href="{{ route('ternak.index') }}" class="btn btn-warning mb-3">Kembali</a>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                <form action="{{ route('ternak.update', $ternak->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="seri_burung" class="form-label">Seri Burung</label>
                        <input type="text" class="form-control" name="seri_burung" id="seri_burung"
                            placeholder="Seri Burung" value="{{ old('seri_burung') ?  old('seri_burung') : $ternak->seri_burung }}">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin">
                                <option selected value="">-- Pilih Jenis Kelamin --</option>
                                <option value="jantan" {{ old('jenis_kelamin') == 'jantan' | $ternak->jenis_kelamin == 'jantan' ? 'selected' : '' }}>Jantan</option>
                                <option value="betina" {{ old('jenis_kelamin') == 'betina' | $ternak->jenis_kelamin == 'betina' ? 'selected' : '' }}>Betina</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_netas" class="form-label">Tanggal Netas</label>
                        <input type="date" class="form-control" name="tanggal_netas" id="tanggal_netas"
                            placeholder="Tanggal Netas" value="{{ old('tanggal_netas') ? old('tanggal_netas') : $ternak->tanggal_netas }}">
                    </div>
                    <div class="mb-3">
                        <label for="indukan_jantan" class="form-label">Indukan Jantan</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="indukan_jantan" name="indukan_jantan">
                                <label class="custom-file-label" for="indukan_jantan">Pilih File</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="seri_indukan_jantan" class="form-label">Seri Indukan Jantan</label>
                        <input type="text" class="form-control" name="seri_indukan_jantan" id="seri_indukan_jantan" placeholder="Seri Indukan Jantan" value="{{ old('seri_indukan_jantan') ? old('seri_indukan_jantan') : $ternak->seri_indukan_jantan }}">
                    </div>
                    <div class="mb-3">
                        <label for="indukan_betina" class="form-label">Indukan Betina</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="indukan_betina" name="indukan_betina">
                                <label class="custom-file-label" for="indukan_betina">Pilih File</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="seri_indukan_betina" class="form-label">Seri Indukan Betina</label>
                        <input type="text" class="form-control" name="seri_indukan_betina" id="seri_indukan_betina" placeholder="Seri Indukan Betina" value="{{ old('seri_indukan_betina') ? old('seri_indukan_betina') : $ternak->seri_indukan_betina }}">
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection

@push('scripts')
    <!-- bs-custom-file-input -->
    <script src="{{ asset('adminlte') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endpush
