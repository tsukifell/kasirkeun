@extends('layouts.master')
@section('content')
@section('title', 'Pelanggan')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pelanggan</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pelanggan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Pelanggan</h4>
                <a href="{{ url('pelanggan/create') }}"><button class="btn btn-sm btn-primary">Create</button></a>
                @csrf

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $p)
                            <tr>
                                <td>{{ ($pelanggan->currentpage() - 1) * $pelanggan->perpage() + $loop->index + 1 }}
                                </td>
                                <td>{{ $p->nama }}</td>
                                <td>
                                    <a href="{{ url('pelanggan/' . $p->id . '/edit') }}"
                                        class="btn btn-sm btn-info">Ubah</a>
                                    <a href="{{ url('delete-pelanggan', $p->id) }}"
                                        class="btn btn-sm btn-danger">Hapus</a>


                                </td>
                                {{-- <td>
                                    <form action="{{ url('pelanggan/' . $p->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">{{ $pelanggan->links() }}</div>

            </div>
        </div>
    </section>
</div>

@endsection
