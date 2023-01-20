<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
  <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }

    </style>
    @include('admin.head')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="container">
        <h2 class="text-center wow fadeInUp" style="padding:50px;">Detail Visit Dokter</h2>
            <form action="{{url('editvisit',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="add-items d-flex">
                    <label>Nama Dokter</label>
                    <select name="dokter" class="form-control todo-list-input" required="">
                        <option>--Pilih Dokter--</option>
                        <option value="{{$data->nama_dokter}}">{{$data->nama_dokter}}</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Nama Pasien</label>
                    <select name="pasien" class="form-control todo-list-input" required="">
                        <option>--Pilih Pasien--</option>
                        <option value="{{$data->nama_pasien}}">{{$data->nama_pasien}}</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Tensi Darah</label>
                    <input type="text" class="form-control todo-list-input" value="{{$data->tensi}}" name="tensi" placeholder="Masukan tensi darah" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Penyakit</label>
                    <input type="text" class="form-control todo-list-input" value="{{$data->penyakit}}" name="penyakit" placeholder="Masukan penyakit/ gejala" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Obat</label>
                    <input type="text" class="form-control todo-list-input" value="{{$data->obat}}" name="obat" placeholder="Masukan obat" required="">
                </div>
                <div class="add-items d-flex">
                    <label>perkembangan</label>
                    <input type="text" class="form-control todo-list-input" value="{{$data->perkembangan}}" name="progres" placeholder="Masukan perkembangan" required="">
                </div>
                <div class="add-items d-flex">
                    <input type="submit" onclick="return confirm('Anda yakin? Pastikan data yang anda masukan benar')" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    
    @include('admin.script')
  </body>
</html>