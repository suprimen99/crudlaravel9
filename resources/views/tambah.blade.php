@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-center">

  <div class="card mt-5 mb-3 p-5 justify-center" style="width:30rem;">
    <div class="card-header">
      <h3>Tambah Data</h3>
    </div>
    <div class="card-body">
      <form action="/insertdata" method="POST" class="row g-3" >
        @csrf
              <div class="col-lg-6">
                <label for="exampleFormControlInput1" class="form-label">Nik :</label>
                  <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan Nik" required>
                </div>
                <div class="col-lg-6">
                  <label for="exampleFormControlInput1" class="form-label">Nama :</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" required>
                </div>
                <div class="form-check">
                  <div>
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-Laki">
                    <label class="form-check-label" for="Laki-Laki">
                     Laki-Laki
                    </label>
                  </div>
                  <div>
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">
                    <label class="form-check-label" for="Perempuan">
                     Perempuan
                    </label>
                  </div>
                </div>
                <div class="col-lg-10">
                  <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir :</label>
                  <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan tanggal">
                </div>
                <label for="exampleFormControlInput1" class="form-label">Alamat :</label>
                <textarea name="alamat" id="alamat"></textarea>

                <label for="negara">Pilih Negara  :</label>
                  <select id="negara" name="negara">
                    <option value="indonesia">Indonesia</option>
                    <option value="malaysia">Malaysia</option>
                    <option value="singapure">Singapure</option>
                    <option value="thailand">Thailand</option>
                  </select>

                  <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
    </div>
</div>
@endsection