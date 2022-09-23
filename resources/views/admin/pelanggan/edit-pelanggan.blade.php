@extends('layouts.master')
@section('content')
@section('title', 'Edit Pelanggan')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Pelanggan</h3>
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
                <h4 class="card-title">Edit Data Pelanggan</h4>
            </div>


            <div class="card-body">
                <form action="{{ route('pelanggan.update', ['pelanggan' => $pelanggan->id]) }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan nama pelanggan" value="{{ old('nama') ?? $pelanggan->nama }}"
                            required>
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
