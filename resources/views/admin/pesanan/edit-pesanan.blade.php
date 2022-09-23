@extends('layouts.master')
@section('content')
@section('title', 'Edit Pesanan')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Pesanan</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Pesanan</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('pesanan.update', ['pesanan' => $pesanan->id]) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Pilih Pelanggan</label>
                        <select class="select2" id="pelanggan_id" name="pelanggan_id">
                            @foreach ($pelanggan as $p)
                                <option value="{{ $p->id }}"
                                    {{ $p->id == $pesanan->pelanggan_id ? 'selected' : null }}>{{ $p->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="harga">Menu</label>
                        <select class="select2" id="menu_id" name="menu_id">
                            @foreach ($menu as $m)
                                <option value="{{ $m->id }}"
                                    {{ $m->id == $pesanan->menu_id ? 'selected' : null }}>{{ $m->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah"
                            placeholder="Masukkan jumlah" value="{{ $pesanan->jumlah }}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
