@extends('layout.layout')

@section('title', 'Tambah Obat Dan Perlengkapan')

@section('content')
<div class="container-fluid mg-t-20">

    <!-- breadcrumb -->

    <div class="breadcrumb-header justify-content-between">


        <div class="left-content">
            <h4 class="content-title mb-1">Tambah Obat Dan Perlengkapan</h4>
            <nav aria-label="breadcrumb">
            </nav>
        </div>


    </div>
    <!-- breadcrumb -->


    <!-- row opened -->
    <div class="row row-sm">

        <!--div-->
        <div class="col-xl-12">

            @if($errors->any())
            <div class="alert alert-danger my-3">
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{$e}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="/store_obat">
                @csrf
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" required class="form-control" value="{{ old('nama') }}">
                </div>
                <div class="mb-3">
                    <label for="jenis">Jenis</label>
                    <select id="jenis" name="jenis" class="form-control">
                        <optgroup label="Obat">
                            <option value="Paracetamol">Paracetamol</option>
                            <option value="Antibiotik">Antibiotik</option>
                            <option value="Antiseptik">Antiseptik</option>
                        </optgroup>
                        <optgroup label="Perlengkapan">
                            <option value="APD">Alat Pelindung Diri (APD)</option>
                            <option value="Alat Periksa">Alat Periksa</option>
                        </optgroup>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" required class="form-control" id="stok" value="{{ old('stok') }}">
                </div>
                <button type="submit" class="btn" style="background-color:#8caca2;">Simpan</button>
            </form>
        </div>
        <!--/div-->
    </div>
    <!-- /row -->


</div>
@endsection