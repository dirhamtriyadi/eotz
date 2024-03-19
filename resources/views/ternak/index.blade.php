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
                <h3 class="card-title">List Ternak</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="table-header d-flex justify-content-end">
                    <a href="{{ route('ternak.create') }}" class="btn btn-primary mb-3">Tambah Ternak</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nomor Ring</th>
                                <th>Seri Burung</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Netas</th>
                                <th>Indukan Jantan</th>
                                <th>Seri Indukan Jantan</th>
                                <th>Indukan Betina</th>
                                <th>Seri Indukan Betina</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ternaks as $ternak => $data)
                                <tr>
                                    <td>{{ $ternak + 1 }}</td>
                                    <td>{{ $data->nomor_ring }}</td>
                                    <td>{{ $data->seri_burung }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->tanggal_netas }}</td>
                                    <td><img alt="{{ $data->seri_indukan_jantan }}" src="/images/ternak/indukan_jantan/{{ $data->indukan_jantan }}" width="100px"/></td>
                                    <td>{{ $data->seri_indukan_jantan }}</td>
                                    <td><img alt="{{ $data->seri_indukan_betina }}" src="/images/ternak/indukan_betina/{{ $data->indukan_betina }}" width="100px" /></td>
                                    <td>{{ $data->seri_indukan_betina }}</td>
                                    <td>
                                        <a href="{{ route('ternak.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('ternak.destroy', $data->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
@endpush
