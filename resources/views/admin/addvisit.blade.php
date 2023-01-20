<!DOCTYPE html>
<html lang="en">
  <head>
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
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>
        @endif
        <h2 class="text-center wow fadeInUp" style="padding:50px;">Form Input Visit</h2>
            <form action="{{url('upload_visit')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="add-items d-flex">
                    <label>Nama Dokter</label>
                    <select name="dokter" class="form-control todo-list-input"  required="">
                        <option>--Select--</option>
                        @foreach($doctor as $doctors)
                        <option value="{{$doctors->name}}">{{$doctors->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Nama Pasien</label>
                    <select name="pasien" class="form-control todo-list-input"  required="">
                        <option>--Select--</option>
                        @foreach($rawatinap as $rawatinap)
                        <option value="{{$rawatinap->nama}}">{{$rawatinap->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Tensi Darah</label>
                    <input type="text" class="form-control todo-list-input"  name="tensi" placeholder="Masukan tensi darah" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Penyakit</label>
                    <input type="text" class="form-control todo-list-input"  name="penyakit" placeholder="Masukan penyakit/ gejala" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Obat</label>
                    <input type="text" class="form-control todo-list-input"  name="obat" placeholder="Masukan obat" required="">
                </div>
                <div class="add-items d-flex">
                    <label>perkembangan</label>
                    <input type="text" class="form-control todo-list-input"  name="progres" placeholder="Masukan perkembangan" required="">
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