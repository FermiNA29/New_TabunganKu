@extends('sbAdmin.master')

@section('title')
    Home
@endsection

@section('sumMoney-card')

<?php $jumlah = 0;
  foreach ($tabungans as $tabungan) {
    $jumlah = $jumlah + $tabungan->nominal;
  }
?>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total Tabungan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Rp. {{ $jumlah }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card-body">
    <table class="table table-bordered">
      <thead>                  
        <tr>
          <th style="width: 10px">No</th>
          <th>Nama</th>
          <th>Tahun/Bulan/Tanggal</th>
          <th>Nominal</th>
          <th>ID Akun</th>
        </tr>
      </thead>
      <tbody>
        <?php $index = 1 ?>
        @foreach ($tabungans as $tabungan)
            <tr>
                <td>{{ $index }}</td>
                <td>{{ $tabungan->nama }}</td>
                <td>{{ $tabungan->jadwalNabung }}</td>
                <td>{{ $tabungan->nominal }}</td>
                <td>{{ $tabungan->idAkun }}</td>
                <?php $index = $index + 1?>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection


