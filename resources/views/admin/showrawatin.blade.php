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
                    <h2 class="card-title" align="center">Pasien</h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr align="center">
                            <th> No.Identitas </th>
                            <th> Nama </th>
                            <th> No.Hp </th>
                            <th> Alamat </th>
                            <th> tanggal lahir </th>
                            <th> gender </th>
                            <th> Nama Kamar </th>
                            <th> Golongan Darah </th>
                            <th> Pekerjaan </th>
                            <th> Warganegara </th>
                            <th> Aksi </th>
                          </tr>
                          @foreach($data as $rawatinap)
                          <tr align="center">
                            <td>{{$rawatinap->no_identitas}}</td>
                            <td>{{$rawatinap->nama}}</td>
                            <td>{{$rawatinap->phone}}</td>
                            <td>{{$rawatinap->alamat}}</td>
                            <td>{{$rawatinap->tgl_lahir}}</td>
                            <td>{{$rawatinap->gender}}</td>
                            <td>{{$rawatinap->nama_kmr}}</td>
                            <td>{{$rawatinap->gol_drh}}</td>
                            <td>{{$rawatinap->pekerjaan}}</td>
                            <td>{{$rawatinap->warganegara}}</td>
                            <td>
                              <a class="badge badge-primary"  href="{{url('updatepasien',$rawatinap->id)}}"><span class="mdi mdi-pencil"></span></a>
                              <a class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus?')" href="{{url('del_pasien',$rawatinap->id)}}"><span class="mdi mdi-delete"></span></a>
                              <a class="badge badge-success" target="_blank" href="{{url('rawatinexcel')}}">Export Excel</a>
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