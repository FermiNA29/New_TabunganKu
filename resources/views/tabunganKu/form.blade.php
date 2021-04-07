@extends('sbAdmin.master')

@section('title')
    Form Tabungan
@endsection

@section('content')

    <!-- form start -->
    <form role="form" action="/form" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->name}}" readonly>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal</label>
          <input type="date" name="jadwalNabung" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tanggal/Bulan/Tahun">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nominal</label>
          <input type="text" name="nominal"  class="form-control" id="exampleInputEmail1" placeholder="Masukan Nominal Tabungan">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ID Akun</label>
          <input type="text" name="idAkun"  class="form-control" id="exampleInputEmail1" value="{{ Auth::user()->id }}" readonly>
        </div>
      <!-- /.card-body -->

      <div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

@endsection