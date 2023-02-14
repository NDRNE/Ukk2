@extends('master')

@section('content')

<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">PENGADUAN MASYARAKAT</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/pengaduan" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group" >
          <label for="Nisn">users Id</label>
            <input type="text" name="users_id" class="form-control" id="users_id" placeholder="Masukan Users_Id">
          </div>
          <div class="form-group">
            <label for="Nama">tgl pengaduan</label>
            <input type="date" name="tgl_pengaduan" class="form-control" id="tgl_pengaduan" placeholder="tanggal_pengaduan">
          </div>
        <div class="form-group">
            <label for="Alamat">Isi laporan</label>
            <textarea class="form-control" name="isi_laporan" rows="3" id="isi_laporan" placeholder="isi_laporan"></textarea>
          </div>
          </div>
          <div class="form-group" >
          <label for="Nisn">foto</label>
            <input type="text" name="foto" class="form-control" id="foto" placeholder="Masukan foto">
          </div>
          <div class="form-group" >
          <label for="Nisn">status</label>
            <input type="enum" name="status" class="form-control" id="status" placeholder="Status ">
          </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
  </body>
  </html>
@endsection
