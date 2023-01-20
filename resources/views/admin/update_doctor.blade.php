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
        <h2 class="text-center wow fadeInUp" style="padding:50px;">Update Doctor</h2>
            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data" style="padding-top:50px;">
                @csrf
                <div class="add-items d-flex">
                    <label>Doctor Name</label>
                    <input type="text" class="form-control todo-list-input"  name="name" placeholder="Insert name" value="{{$data->name}}" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Phone</label>
                    <input type="number" class="form-control todo-list-input" style="color:gray;" name="number" placeholder="Insert phone" value="{{$data->phone}}" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Specialist</label>
                    <select name="spesialist" class="form-control todo-list-input"  value="{{$data->spesialist}}" required="">
                        <option>--Select--</option>
                        <option value="skin">Kulit</option>
                        <option value="tooth">Gigi</option>
                        <option value="eye">Mata</option>
                        <option value="internal">Organ dalam</option>
                    </select>
                </div>
                <div class="add-items d-flex">
                    <label>Room Number</label>
                    <input type="text" class="form-control todo-list-input"  name="room" placeholder="Insert room" value="{{$data->room}}" required="">
                </div>
                <div class="add-items d-flex">
                    <label>Change Image</label>
                    <input type="file" class="form-control todo-list-input" name="file" value="{{$data->image}}" required="">
                </div>
                <div class="add-items d-flex">
                    <input type="submit" onclick="return confirm('Anda yakin ingin mengubah data?')" class="btn btn-primary">
                </div>
            </form>
    </div>
        </div>
    </div>
    @include('admin.script')
  </body>
</html>