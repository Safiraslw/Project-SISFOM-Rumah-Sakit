@extends('layout.layout')

@section('title', 'Tambah Dokter')

@section('content')
<div class="container-fluid mg-t-20">

    <!-- breadcrumb -->

    <div class="breadcrumb-header justify-content-between">


        <div class="left-content">
            <h4 class="content-title mb-1">Tambah Dokter</h4>
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
            <form method="post" action="/store_dokter">
                @csrf
                <div class="mb-3">
                    <label for="no_dokter">Nomor Dokter</label>
                    <input type="number" name="no_dokter" id="no_dokter" required class="form-control" value="{{ old('no_dokter') }}">
                </div>
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" required id="nama" value="{{ old('nama') }}">
                </div>
                <div class="mb-3">
                    <label for="spesialis">Spesialis</label>
                    <input type="text" name="spesialis" required class="form-control" id="spesialis" value="{{ old('spesialis') }}">
                </div>
                <div class="mb-3">
                    <label for="diterima">Diterima</label>
                    <input type="date" name="diterima" required class="form-control" id="diterima" value="{{ old('spesialis') }}">
                </div>
                <div class="mb-3">
                    <label for="telepon">Telepon</label>
                    <input type="tel" name="telepon" id="telepon" class="form-control" required value="{{ old('telepon') }}">
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required>{{ old('alamat') }}</textarea>
                </div>
                <button type="submit" class="btn" style="background-color:#8caca2;">Simpan</button>
            </form>
        </div>
        <!--/div-->
    </div>
    <!-- /row -->


</div>
@endsection