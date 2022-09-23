@extends('layouts.master')
@section('content')
@section('title', 'Pesanan')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pesanan</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pesanan </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Pesanan</h4>
                <a href="{{ url('pesanan/create') }}"><button class="btn btn-sm btn-primary">Create</button></a>
                @csrf

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Menu </th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tanggal/Waktu</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $p)
                            <tr>
                                <td>{{ ($pesanan->currentpage() - 1) * $pesanan->perpage() + $loop->index + 1 }}
                                </td>
                                <td>{{ $p->menu->nama }}</td>
                                <td>{{ $p->pelanggan->nama }}</td>
                                <td>{{ $p->jumlah }}</td>
                                <td>{{ 'Rp. ' . $p->menu->harga * $p->jumlah }}</td>
                                <td>{{ $p->dibuat }}</td>
                                <td>
                                    <a href="{{ url('pesanan/' . $p->id . '/edit') }}"
                                        class="btn btn-sm btn-info">Ubah</a>
                                    <a href="{{ url('delete-pesanan', $p->id) }}"
                                        class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">{{ $pesanan->links() }}</div>

            </div>
        </div>
    </section>
</div>
@endsection
