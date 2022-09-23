@extends('layouts.master')
@section('content')
@section('title', 'Menu')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Menu</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Menu </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Makanan dan Minuman</h4>
                <a href="{{ url('menu/create') }}"><button class="btn btn-sm btn-primary">Tambah</button></a>
                @csrf

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menu as $m)
                            <tr>
                                <td>{{ ($menu->currentpage() - 1) * $menu->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->kategori }}</td>
                                <td>{{ 'Rp. ' . $m->harga }}</td>
                                <td>
                                    <a href="{{ url('menu/' . $m->id . '/edit') }}"
                                        class="btn btn-sm btn-info">Ubah</a>
                                    <a href="{{ url('delete-menu', $m->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">{{ $menu->links() }}</div>

            </div>
        </div>
    </section>
</div>
@endsection
