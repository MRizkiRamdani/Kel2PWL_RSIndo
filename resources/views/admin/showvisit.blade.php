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
              <div class="col-10 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title" align="center">Data Visit</h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr align="center">
                            <th style="padding: 50px;"> Nama Dokter </th>
                            <th style="padding: 50px;"> Nama Pasien </th>
                            <th style="padding: 50px;"> Tensi </th>
                            <th style="padding: 50px;"> Penyakit </th>
                            <th style="padding: 50px;"> Obat </th>
                            <th style="padding: 50px;"> Perkembangan </th>
                            <th style="padding: 50px;"> Aksi </th>
                          </tr>
                          @foreach($data as $visit)
                          <tr align="center">
                            <td>{{$visit->nama_dokter}}</td>
                            <td>{{$visit->nama_pasien}}</td>
                            <td>{{$visit->tensi}}</td>
                            <td>{{$visit->penyakit}}</td>
                            <td>{{$visit->obat}}</td>
                            <td>{{$visit->perkembangan}}</td>
                            <td>
                              <a class="badge badge-primary"  href="{{url('updatevisit',$visit->id)}}"><span class="mdi mdi-pencil"></span></a>
                              <a class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus?')" href="{{url('del_visit',$visit->id)}}"><span class="mdi mdi-delete"></span></a>
                              <a class="badge badge-success" target="_blank" href="{{url('visitexcel')}}">Export Excel</a>
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