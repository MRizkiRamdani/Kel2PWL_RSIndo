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
        <h2 class="text-center wow fadeInUp" style="padding:50px;">Form Rekam Medis</h2>
            <form action="{{url('editrekam',$data->id)}}" name="autoSumForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="add-items d-flex">
                    <label>No.Identitas</label>
                    <input type="text" class="form-control todo-list-input" value="{{$data->no_identitas}}" name="identitas" placeholder="Masukan no.identitas" readonly required="">
                </div>
                <div class="add-items d-flex">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control todo-list-input" value="{{$data->nama}}" name="name" placeholder="Masukan nama lengkap" readonly required="">
                </div>
                <div class="add-items d-flex">
                    <label>No. Hp</label>
                    <input type="text" class="form-control todo-list-input" value="{{$data->phone}}" name="phone" placeholder="Masukan no.handphone" readonly required="">
                </div>
                <div class="add-items d-flex">
                    <label>Alamat</label>
                    <input type="text" class="form-control todo-list-input" value="{{$data->alamat}}" name="address" placeholder="Masukan alamat" readonly required="">
                </div>
                <div class="add-items d-flex">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control todo-list-input" value="{{$data->tgl_lahir}}" name="birthday" placeholder="Masukan tanggal lahir" readonly required="">
                </div>
                <div class="add-items d-flex">
                    <label>Jenis Kelamin</label>
                    <select name="gender" class="form-control todo-list-input" readonly required="">
                        <option value="{{$data->gender}}">{{$data->gender}}</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Golongan Darah</label>
                    <select name="goldar" class="form-control todo-list-input" readonly required="">
                        <option value="{{$data->gol_drh}}">{{$data->gol_drh}}</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Durasi</label>
                    <input type="text" class="form-control todo-list-input" name="durasi" placeholder="Masukan durasi" onFocus="startCalc();" onBlur="stopCalc();" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Nama Kamar</label>
                    <select name="kamar" class="form-control todo-list-input" readonly required="">
                        <option value="{{$data->nama_kmr}}">{{$data->nama_kmr}}</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                <label></label>
                    <select name="harga" class="form-control todo-list-input" readonly onFocus="startCalc();" onBlur="stopCalc();" >
                        <option value="{{$data->harga_kamar}}">{{$data->harga_kamar}} / 1 hari</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Biaya Perawatan</label>
                    <input type="text" class="form-control todo-list-input" name="biaya" placeholder="Masukan biaya Perawatan" readonly value="0">
                </div>
                <div class="add-items d-flex">
                    <label>Total</label>
                    <input type="text" class="form-control todo-list-input" name="total" placeholder="Masukan total" readonly value="0">
                </div>
                <div class="add-items d-flex">
                    <input type="submit" onclick="return confirm('Anda yakin? Pastikan semua isi data benar')" class="btn btn-primary">
                </div>
            </form>
            <script>

            function startCalc(){

            interval = setInterval("calc()",1);}

            function calc(){

            one = document.autoSumForm.harga.value;

            two = document.autoSumForm.durasi.value;

            document.autoSumForm.biaya.value = (one * 1) * (two * 1);

            document.autoSumForm.total.value = (one * 1) * (two * 1);}

            function stopCalc(){

            clearInterval(interval);}

            </script>
        </div>
    </div>
    
    @include('admin.script')
  </body>
</html>