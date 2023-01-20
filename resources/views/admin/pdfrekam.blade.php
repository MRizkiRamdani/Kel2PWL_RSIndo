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
              <div class="col-9 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title" align="center">Form Rekam Medis</h2>
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
                            <th> durasi </th>
                            <th> Golongan Darah </th>
                            <th> Nama Kamar </th>
                            <th> Harga Kamar </th>
                            <th> Biaya Perawatan </th>
                            <th> Total </th>
                            <th> Aksi </th>
                          </tr>
                          @foreach($data as $rawatinap)
                          <tr align="center">
                            <td>{{$rawatinap->no_identitas}}</td>
                            <td>{{$rawatinap->nama}}</td>
                            <td>{{$rawatinap->phone}}</td>
                            <td>{{$rawatinap->alamat}}</td>
                            <td>{{$rawatinap->tanggal_lahir}}</td>
                            <td>{{$rawatinap->gender}}</td>
                            <td>{{$rawatinap->durasi}} Hari</td>
                            <td>{{$rawatinap->gol_darah}}</td>
                            <td>{{$rawatinap->nama_kamar}}</td>
                            <td>{{$rawatinap->harga_kamar}}</td>
                            <td>{{$rawatinap->biaya_rawat}}</td>
                            <td>{{$rawatinap->total}}</td>
                            <td>
                              <a class="badge badge-danger" target="_blank" href="{{url('pdf')}}">Export PDF</a>
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