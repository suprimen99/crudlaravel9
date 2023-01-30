@extends('layouts.main')
    @section('content')
    
    <div class="p-5 d-flex justify-content-center">
        <h1>Aplikasi Data Pribadi</h1>
    </div>
    <div class="card">
        <div class="card-body">
         
            
            <form class="row g-3" action="/" method="GET">
                @csrf
                <div class="col-lg-7">
                  <label for="input" class="visually-hidden">Nik</label>
                  <input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan Nik">
                </div>
                <div class="col-lg-7">
                  <label for="input" class="visually-hidden">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
                </div>
                <div class="col-auto p-4 ">
                  <button type="submit" class="btn btn-primary">Search</button>
                  <a href="/tambah" class="btn btn-primary">Add</a>
              </div>
            </form>
            
        </div>
      </div>

      <table class="table p-3 text-center">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nik</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal lahir</th>
                <th scope="col">alamat</th>
                <th scope="col">Negara</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        @php
          $i=1;
        @endphp
        @foreach ( $data as $pribadi )
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $pribadi->nik }}</td>
            <td>{{ $pribadi->nama }}</td>
            <td>{{ $pribadi->jeniskelamin }}</td>
            <td>{{ $pribadi->tanggal }}</td>
            <td>{{ $pribadi->alamat }}</td>
            <td>{{ $pribadi->negara }}</td>
            <td>
              <a href="/detail/{{ $pribadi->id }}" class="btn btn-success">Detail</a>
              <a href="/tampilkandata/{{ $pribadi->id }}" class="btn btn-warning">Update</a>
              <a href="#" class="btn btn-danger delete" data-id="{{ $pribadi->id }}" data-nama="{{ $pribadi->nama }}">Delete</a>
            </td>
            

          </tr>
        @endforeach
      </table>
      {{ $data->links() }}
      
    @endsection
   
   