<?php
session_start();

require_once __DIR__ . '/vendor/autoload.php';


require 'functions.php';

$id = $_GET["id"];

$usaha = query("SELECT * FROM usaha WHERE id = $id");

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>';
foreach ($usaha as $row)
    $html .= '
    <table style="text-align: center;" width="100%">
    
        <tr>
        <td><img style="max-width: 20px; min-width: 20px; min-height: 80px; max-height: 80px;" src="images/logo.PNG"></td>
            <td><h3 line-height:35x;>PEMERINTAH KABUPATEN MALANG</h3>
            <h3 line-height:35px;>PEMERINTAH KECAMATAN GEDANGAN</h3>
            <h3 line-height:35px;>DESA GAJAHREJO</h3>
            <h5 line-height:35px;>Jl.RayaGajahrejo No 100 KodePos 65178</h5>
            <h6 line-height:35px;>Website: www.desa gajahrejo.malangkab.go.id</h6></td>
        </tr>
    </table>
    <hr style="height: 4px; color: black">
    <table style="text-align: center;" width="100%">
        <tr>
            <td><h4 style="text-decoration: underline">SURAT KETERANGAN USAHA</h4></td>
        </tr>
        <tr>
            <td> <p>Nomor :  ...... / ......   / ............... / ...............    </p></td>
        </tr>
    </table>
    <div class="container" style="text-align: center;">
       
    <p style="text-align: justify;">Yang bertanda tangan dibawah ini :</p>
    <table style="margin-left: 50px;">
        <ol>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><b>SUJIONO</b></td>
            </tr>
            <tr>
                <td>JABATAN</td>
                <td>:</td>
                <td><b>KASI KESEJAHTERAAN DESA GAJAHREJO</b></td>
            </tr>
    </ol>
    </table>
    <br>
    <p style="text-align: justify;">Setelah melihat dan memeriksa menerangkan dengan sebenarnya bahwa :</p>
    <table style="margin-left: 50px;">
        <ol>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>' . $row["nama"] . '</td>
            </tr>
            <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>' . $row["tempat_lahir"] . ", " . tgl_indo($row["tgl_lahir"]) . '</td>
            </tr>
            <tr>
                <td>No KTP</td>
                <td>:</td>
                <td>' . $row["ktp"] . '</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>' . $row["jenis_kelamin"] . '</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>' . $row["pekerjaan"] . '</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>' . "RT " . $row["rt"] . " RW " . $row["rw"] . " " . $row["desa"] . ", " . $row["kecamatan"] . ", " . $row["kabupaten"] . '</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>' . $row["agama"] . '</td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>:</td>
                <td>' . $row["status"] . '</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td>'  . $row["kewarganegaraan"] . '</td>
            </tr>
        </ol>
    </table>
    <p style="text-align: justify;">Bahwa orang tersebut diatas benar-benar penduduk  : Desa ' . $row["desa"] . ' dan memiliki usaha di Desa ' . $row["desa"] . ', Kec. '. $row["kecamatan"] . '</p>

    <table>
    <ol>
    <tr>
                <td>Memiliki Usaha</td>
                <td>:</td>
                <td>' . $row["jenis_usaha"] . '</td>
            </tr>
            <tr>
                <td>Tempat Usaha</td>
                <td>:</td>
                <td>'  . $row["kewarganegaraan"] . '</td>
            </tr>
            <tr>
                <td>Pemasaran</td>
                <td>:</td>
                <td>' . $row["status"] . '</td>
            </tr>
            <tr>
                <td>Berdiri Sejak</td>
                <td>:</td>
                <td>'  . $row["kewarganegaraan"] . '</td>
            </tr>
    </ol>
    </table>
    

    <p style="text-align: justify;">Demikian surat keterangan usaha ini di buat dengan sebenar-benarnya untuk ' . $row["keperluan"] . ' .</p>

     <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;"></td>
            <td align="right" style="padding-right: 100px;">Gajahrejo, ' . tgl_indo(date("Y-m-d")) . ' </td>
        </tr>
    </table>
    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;">Pemilik Usaha</td>
            <td align="right" style="padding-right: 100px; ">Kepala Desa Gajahrejo</td>
        </tr>
    </table><br><br><br><br>
    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px; font-weight: bold;"><u>' . $row["nama"] . ' </u></td>
            <td align="right" style="padding-right: 100px; font-weight: bold;"><u>Siswoyo</u></td>
        </tr>
    </table>
</body>
</html> 
';

$mpdf->WriteHTML($html);
$mpdf->Output("surat ktp", \Mpdf\Output\Destination::INLINE);
