<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            /* left; 3%; */
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Kegiatan Posyandu</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Kegiatan Posyandu</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width; 95%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Waktu Kegiatan</th>
                    <th>Jenis Layanan</th>
                    <th>Tempat Kegiatan</th>
                    <th>Keterangan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cetakrutin as $i => $p)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $p->tanggal }}</td>
                        <td>{{ $p->waktu }}</td>
                        <td>{{ $p->lakes->nama_layanan }}</td>
                        <td>{{ $p->tempat }}</td>
                        <td>{{ $p->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
