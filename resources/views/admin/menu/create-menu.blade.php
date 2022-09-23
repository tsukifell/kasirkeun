@extends('layouts.master')
@section('content')
@section('title', 'Tambah Menu')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tambah Menu</h3>
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
                <h4 class="card-title">Tambah Menu</h4>
            </div>


            <div class="card-body">
                <form action="{{ route('menu.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama menu"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="nama">Kategori</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" value="Makanan">
                            <label class="form-check-label" for="flexRadioDefault1"> Makanan
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" value="Minuman">
                            <label class="form-check-label" for="flexRadioDefault1"> Minuman
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" value="Dessert">
                            <label class="form-check-label" for="flexRadioDefault1"> Dessert
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga"
                            placeholder="Masukkan harga (Rp.)" required>
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
