<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.head')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include('admin.navbar')
        <div class="container-fluid page-body-wrapper" style="padding: 150px;">
          <div class="row ">
              <div class="col-13 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title" align="center">Data Kamar</h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr align="center">
                            <th style="padding: 100px;"> Nama Kamar </th>
                            <th style="padding: 100px;"> Kelas </th>
                            <th style="padding: 100px;"> Harga </th>
                          </tr>
                          @foreach($data as $kamar)
                          <tr align="center">
                            <td>{{$kamar->name}}</td>
                            <td>{{$kamar->kelas}}</td>
                            <td>Rp. {{$kamar->harga}}</td>
                            <td>
                              <a class="badge badge-primary"  href="{{url('updatekamar', $kamar->id)}}"><span class="mdi mdi-pencil"></span></a>
                              <a class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus?')" href="{{url('del_kamar',$kamar->id)}}"><span class="mdi mdi-delete"></span></a>
                              <a class="badge badge-success" target="_blank" href="{{url('kamarexcel')}}">Export Excel</a>
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
    </div>
    @include('admin.script')
  </body>
</html>