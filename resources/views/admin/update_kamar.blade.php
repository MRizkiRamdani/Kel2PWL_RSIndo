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
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>
        @endif
        <h2 class="text-center wow fadeInUp" style="padding:50px;">Edit Kamar</h2>
            <form action="{{url('editkamar',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="add-items d-flex">
                    <label>Nama Kamar</label>
                    <input type="text" class="form-control todo-list-input"  name="name" value="{{$data->name}}" placeholder="Masukan nama kamar" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Kelas</label>
                    <select name="kelas" class="form-control todo-list-input" value="{{$data->kelas}}" required="">
                        <option>--Select--</option>
                        <option value="VIP">Kelas VIP</option>
                        <option value="I">Kelas I</option>
                        <option value="II">Kelas II</option>
                        <option value="III">Kelas III</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Harga</label>
                    <input type="number" class="form-control todo-list-input" style="color:gray;" name="number" value="{{$data->harga}}" placeholder="Masukan harga" required="">
                </div>
                <div class="add-items d-flex">
                    <input type="submit" onclick="return confirm('Anda yakin ingin mengubah kamar?')" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    
    @include('admin.script')
  </body>
</html>