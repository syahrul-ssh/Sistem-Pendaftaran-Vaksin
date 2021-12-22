<!DOCTYPE html>
<html>

<head>
    <title>Kartu Vaksinasi</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        @page {
            margin: 0px;
        }

        body {
            margin-top: 0px;
            font-family: Verdana, sans-serif;
            background-image: url('https://i.ibb.co/h7XC90w/White-and-gray-geometric-pattern-background-vector.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

    </style>
</head>

<body>
    <div>
        <table width="100%">
            <tbody>
                <tr style="background-color: #37487ecb;">
                    <td align="center">
                        <div style="font-size:30pt; color:white; padding-top:9px; padding-bottom: 10px;">
                            Surat Keterangan Vaksinasi COVID-19
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        Nomor : {{ $daftar->id }}/SSS.SSSS/{{ now()->format('m') }}/{{ now()->format('Y') }}
                    </td>
                </tr>
                <tr>
                    <td align="center"> <br /><br /><br /><br />
                        <div style="font-size:15pt">
                            Surat ini diberika Kepada:
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <div style="font-size:30pt">
                            {{ $daftar->nama }}
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <table width="38%" align="center">
            <tbody>
                <tr>
                    <td align="left">
                        <div style="font-size:15pt">
                            NIK :
                        </div>
                    </td>
                    <td align="left">
                        <div style="font-size:15pt">
                            Tanggal lahir :
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="left">
                        <div style="font-size:15pt">
                            {{ $daftar->nik }}
                        </div>
                    </td>
                    <td align="left">
                        <div style="font-size:15pt">
                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $daftar->tanggal_lahir)->format('d-m-Y') }}
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <table width="100%">
            <tbody>
                <tr>
                    <td align="center">
                        <div style="font-size:15pt">
                            Dengan nomor pendaftaran:
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="font-weight: bold">
                        <div style="font-size:20pt">
                            {{ $daftar->kode_unik }}
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <table width="100%">
            <tbody>
                <tr>
                    <td align="center">
                        <div style="font-size:20pt;">
                            Telah melakukan vaksinasi COVID-19 pada :
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <table width="80%" align="center">
            <tbody>
                <tr>
                    <td align="center"> <br />
                        <div style="font-size:12pt">
                            Tanggal :_________________
                        </div>
                    </td>
                    <td align="center"> <br />
                        <div style="font-size:12pt">
                            Tanggal :_________________
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <div style="font-size:12pt">
                            Dosis Kesatu
                        </div>
                    </td>
                    <td align="center">
                        <div style="font-size:12pt">
                            Dosis Kedua
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <div style="font-size:12pt">
                            Paraf/Stamp Petugas
                        </div>
                    </td>
                    <td align="center">
                        <div style="font-size:12pt">
                            Paraf/Stamp Petugas
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center"> <br /><br />
                        <div style="font-size:12pt">
                            ______________________
                        </div>
                    </td>
                    <td align="center"> <br /><br />
                        <div style="font-size:12pt">
                            ______________________
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
        <table width="100%">
            <tbody>
                <tr>
                    <td align="center"> <br />
                        <div style="font-size:10pt;">
                            Harap surat ini jangan sampai hilang karena ini akan menjadi bukti telah melakukan
                            vaksinasi!
                        </div>
                    </td>
                </tr>
            <tbody>
        </table>
    </div>
</body>

</html>
