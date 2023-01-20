<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.head')
  </head>
  <body>
      <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')
        <div class="container-fluid page-body-wrapper" style="padding-top: 90px;">
          <div class="row ">
              <div class="col-20 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Doctor</h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr align="center">
                            <th style="padding: 70px;"> Doctor Name </th>
                            <th style="padding: 70px;"> Phone </th>
                            <th style="padding: 70px;"> Specialist </th>
                            <th style="padding: 70px;"> Room </th>
                            <th style="padding: 70px;"> Photo </th>
                            <th style="padding: 70px;"> Aksi </th>
                          </tr>
                          @foreach($data as $doctor)
                          <tr align="center">
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->phone}}</td>
                            <td>{{$doctor->spesialist}}</td>
                            <td>{{$doctor->room}}</td>
                            <td>
                              <image src="doctorimage/{{$doctor->image}}">
                            </td>
                            <td>
                              <a class="badge badge-primary"  href="{{url('updatedoctor', $doctor->id)}}"><span class="mdi mdi-pencil"></span></a>
                              <a class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus?')" href="{{url('del_doctor',$doctor->id)}}"><span class="mdi mdi-delete"></span></a>
                              <a class="badge badge-success" target="_blank" href="{{url('doctorexcel')}}">Export Excel</a>
                            </td>
                          </tr>
                          @endforeach
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
    @include('admin.script')
  </body>
</html>