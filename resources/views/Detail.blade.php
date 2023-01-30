@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-center">

    <div class="card p-4 mt-5 " style="width: 20rem">
        <div class="card-header text-center">
         Detail
        </div>
        <div class="card-body text-right">
          <p class="card-text">Nama  : {{ $data->nama }}</p>
          <p class="card-text">Gender  : {{ $data->jeniskelamin }}</p>
          <p class="card-text">NIK  : {{ $data->nik }}</p>
          <p class="card-text">Tanggal Lahir  : {{ $data->tanggal }}</p>
          <p class="card-text">Alamat  : {{ $data->alamat }}</p>
          <p class="card-text">Negara  : {{ $data->negara }}</p>
          <a href="/" class="btn btn-primary">back</a>
        </div>
      </div>
</div>
    
@endsection