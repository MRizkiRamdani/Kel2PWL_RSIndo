<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

    </style>

</head>

<body>
    <div>
        <h3 id=judul>REKAM MEDIS PASIEN</h3>
        <h5 id=judul>Rumah Sakit One-Health</h3>
        <br></br>
        <table>
            @foreach($data as $rawatinap)
            <tr>
                <td style="width: 30%;">No. Identitas</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->no_identitas}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Pasien</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->nama}}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">No. Handphone</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{$rawatinap->phone}}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{$rawatinap->alamat}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tanggal Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->tanggal_lahir}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jenis Kelamin</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->gender}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Golongan Darah</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->gol_darah}}</td>
            </tr><br>
            <p>Biaya Rawat Inap :</p>
            <tr>
                <td style="width: 30%;">Masa Rawat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->durasi}} Hari</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Kamar</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->nama_kamar}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Harga Kamar</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->harga_kamar}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Biaya Perawatan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->biaya_rawat}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Total</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$rawatinap->biaya_rawat}}</td>
            </tr>
        </table><br><br><br><br><br><br><br><br>

        <div style="width: 25%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 15%; text-align: left; float: right;">{{$rawatinap->nama}}</div>
        @endforeach
    </div>
</body>

</html>