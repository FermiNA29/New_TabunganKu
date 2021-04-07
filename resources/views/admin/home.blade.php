@extends('adminlte.master')

@section('title')
    Home
@endsection

@section('content')
<div class="card-body">
    <table class="table table-bordered">
      <thead>                  
        <tr>
          <th style="width: 10px">No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
            <tr>
                <td>1.</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>Detail</td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection