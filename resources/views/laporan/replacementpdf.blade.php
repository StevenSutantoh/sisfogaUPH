<html>
    <head>
        <title>Pengajuan Replacement Class</title>
    </head>
    <body>
        
        <style>
            container {
                width: 100%;
                text-align: left;
            }
            row {
                width: 100%;
            }
            /* body{
                padding: 15px;
            } */
            /* h5{
                margin-top: -15px;
            } */
            /* table, th, td{
                border: 1px solid;
            } */
        </style>
        <br>
        <h1>
            Pengajuan Replacement Class
        </h1>
        <hr>
        <table>
            <tr>
                {{-- <th>Nama Lengkap</th>
                <th>Nama Mata Kuliah</th> --}}
                {{-- <th>Kelas</th>
                <th>Program Studi</th>
                <th>Semester</th>
                <th>Tahun Akademik</th>
                <th>Jadwal Tanggal Replacement</th>
                <th>Jadwal Jam Kuliah</th>
                <th>Tanggal Replacement</th>
                <th>Jam Replacement</th>
                <th>Alasan melakukan <i>replacement class</i></th> --}}
            </tr>
            @foreach ($replacement as $rpl)
                <div class="container text-left">
                    <div class="col">
                    <b>Nama Lengkap </b> : {{$rpl->nama_lengkap}}<br>
                    <b>Nama Mata Kuliah </b> : {{$rpl->mata_kuliah}}<br>
                    <b>Kelas </b> : {{$rpl->kelas}}<br>
                    <b>Program Studi </b> : {{$rpl->prodi}}<br>
                    <b>Semester </b> : {{$rpl->semester}}<br>
                    <b>Tahun Akademik </b> : {{$rpl->tahun_akademik}}<br>
                    <b>Jadwal Tanggal Replacement </b> : {{$rpl->tanggal}}<br>
                    <b>Jadwal Jam Kuliah </b> : {{$rpl->jadwal_kuliah}}<br>
                    <b>Tanggal Replacement </b> : {{$rpl->tanggal_replacement}}<br>
                    <b>Jam Replacement </b> : {{$rpl->jam_replacement}}<br>
                    <b>Alasan melakukan <i>replacement class</i> </b> : {{$rpl->alasan_replacement}}<br>
                </div>
            @endforeach
        </table>
    </body>
</html>