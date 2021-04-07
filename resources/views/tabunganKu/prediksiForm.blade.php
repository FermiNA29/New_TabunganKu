@extends('sbAdmin.master')

@section('title')
    Form Tabungan
@endsection

@section('content')
<form role="form" action="" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Barang</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama barang">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tabungan Perhari</label>
        <input type="text" name="jadwalNabung" class="form-control" id="exampleInputEmail1" placeholder="Tabungan Anda">
      </div>
    <!-- /.card-body -->

    <div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>

    <?php 
    
    if (isset($_POST['submit'])) {
        echo hallo;
    }

    ?>
  </form>
@endsection