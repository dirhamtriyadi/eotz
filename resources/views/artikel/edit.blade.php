@extends('templates.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('richtexteditor') }}/rte_theme_default.css" />
@endpush

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Artikel</h1>
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
                <h3 class="card-title">Tambah Artikel</h3>

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
                <a href="{{ route('artikel.index') }}" class="btn btn-warning mb-3">Kembali</a>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                <form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul"
                            placeholder="Judul Artikel" value="{{ old('judul') ?  old('judul') : $artikel->judul }}">
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea id="inp_editor1" class="form-control" name="isi" id="isi" rows="3">{{ old('isi') ?  old('isi') : $artikel->isi }}</textarea>
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

    <script type="text/javascript" src="{{ asset('richtexteditor') }}//rte.js"></script>
    <script type="text/javascript" src='{{ asset('richtexteditor') }}//plugins/all_plugins.js'></script>

    <script>
        $(function() {
            var editor1 = new RichTextEditor("#inp_editor1");

            bsCustomFileInput.init();
        });
    </script>
@endpush
