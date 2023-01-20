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
        <h2 class="text-center wow fadeInUp" style="padding:50px;">Form Rawat Inap</h2>
            <form action="{{url('upload_rawat')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="add-items d-flex">
                    <label>No.Identitas</label>
                    <input type="number" class="form-control todo-list-input" style="color:gray;" name="identitas" placeholder="Masukan no.identitas" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control todo-list-input" name="name" placeholder="Masukan nama lengkap" required="">
                </div>
                <div class="add-items d-flex">
                    <label>No. Hp</label>
                    <input type="number" class="form-control todo-list-input" style="color:gray;" name="phone" placeholder="Masukan no.handphone" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Alamat</label>
                    <input type="text" class="form-control todo-list-input" name="address" placeholder="Masukan alamat" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control todo-list-input" style="color:gray;" name="birthday" placeholder="Masukan tanggal lahir" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Jenis Kelamin</label>
                    <select name="gender" class="form-control todo-list-input"  required="">
                        <option>--Select--</option>
                        <option value="laki-laki">Laki - Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Nama Kamar</label>
                    <select name="kamar" class="form-control todo-list-input"  required="">
                        <option>--Select--</option>
                        @foreach($kamar as $kamars)
                        <option value="{{$kamars->name}}">{{$kamars->name}}( Kelas {{$kamars->kelas}} )</option>
                        @endforeach
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Harga Kamar</label>
                    <select name="hargakamar" class="form-control todo-list-input"  required="">
                        <option>--Select--</option>
                        @foreach($kamar as $kamars)
                        <option value="{{$kamars->harga}}">{{$kamars->harga}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Golongan Darah</label>
                    <select name="goldar" class="form-control todo-list-input"  required="">
                        <option>--Select--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Pekerjaan</label>
                    <input type="text" class="form-control todo-list-input"  name="work" placeholder="Masukan pekerjaan" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Kewarganegaraan</label>
                    <select name="nation" class="form-control todo-list-input"  required="">
                        <option>--Select--</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <input type="submit" onclick="return confirm('Anda yakin? Pastikan semua isi data benar')" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    
    @include('admin.script')
  </body>
</html>