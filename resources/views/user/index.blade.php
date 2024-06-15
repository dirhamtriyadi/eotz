@extends('templates.main')

@push('styles')
@endpush

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User</h1>
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
                <h3 class="card-title">List User</h3>

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
                    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Terakhir Online</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user => $data)
                                <tr>
                                    <td>{{ $user + 1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->roles->pluck('name') }}</td>
                                    <td>
                                        @if ($data->is_active == 1)
                                            <span class="badge badge-success">Aktif</span>
                                        @else
                                            <span class="badge badge-danger">Tidak Aktif</span>
                                        @endif
                                    </td>
                                    <td>{{ $data->last_login_at ? $data->last_login_at() : "User belum login" }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-info dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Aksi
                                            </button>
                                            <ul class="dropdown-menu">
                                                {{-- <li>
                                                    <a class="dropdown-item" href="{{ route('user.show', $data->id) }}">
                                                        Detail
                                                    </a>
                                                </li> --}}
                                                <li>
                                                    @if ($data->is_active == 0)
                                                        <form action="{{ route('user.update_status', $data->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="dropdown-item">Aktifkan</button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('user.update_status', $data->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="dropdown-item">Nonaktifkan</button>
                                                        </form>
                                                    @endif
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.edit', $data->id) }}"
                                                        class="dropdown-item">Edit</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('user.destroy', $data->id) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">Hapus</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
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
