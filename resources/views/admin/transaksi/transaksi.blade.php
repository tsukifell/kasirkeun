@extends('layouts.master')
@section('content')
@section('title', 'Transaksi')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Transaksi</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Transaksi </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Transaksi</h4>
                @csrf

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total Bayar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $t)
                            <tr>
                                <td>{{ ($transaksi->currentpage() - 1) * $transaksi->perpage() + $loop->index + 1 }}
                                </td>
                                <td>{{ $t->pelanggan->nama }}</td>
                                <td>{{ $t->menu->nama }}</td>
                                <td>{{ $t->jumlah }}</td>
                                <td>{{ 'Rp. ' . $t->jumlah * $t->menu->harga }}</td>
                                <td>Belum Bayar</td>
                                <td>
                                    <a href="{{ url('delete-transaksi', $t->id) }}"
                                        class="btn btn-sm btn-info">Bayar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">{{ $transaksi->links() }}</div>

            </div>
        </div>
    </section>
</div>
@endsection
