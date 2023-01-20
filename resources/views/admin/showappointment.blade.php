<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.head')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Janji</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th>
                            <th> Nama Pasien </th>
                            <th> Email </th>
                            <th> Telepon </th>
                            <th> Nama Dokter </th>
                            <th> Tanggal </th>
                            <th> Pesan </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          @foreach($data as $appointment)
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <span class="pl-2">{{$appointment->name}}</span>
                            </td>
                            <td> {{$appointment->email}} </td>
                            <td> {{$appointment->phone}} </td>
                            <td> {{$appointment->doctor}} </td>
                            <td> {{$appointment->date}} </td>
                            <td> {{$appointment->message}} </td>
                            <td>
                              <a class="badge badge-danger"  href="{{url('delete_appoint', $appointment->id)}}"><span class="mdi mdi-delete"></span></a>
                              <a class="badge badge-success" target="_blank" href="{{url('appointexcel')}}">Export Excel</a>
                            </td>
                            </td>
                            @endforeach
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @include('admin.script')
  </body>
</html>