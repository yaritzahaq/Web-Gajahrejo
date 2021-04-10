<?php
session_start();

require_once __DIR__ . '/vendor/autoload.php';


require 'functions.php';

$id = $_GET["id"];

$warga = query("SELECT * FROM warga WHERE id = $id");

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
<body>
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
    <hr>
    <table width=100%>';
foreach ($warga as $row)
    $html .= '<tr>
            
        </tr>
    </table>
    <br>
        <table style="text-align: center;" width="100%">
        <tr>
            <td><h4 style="text-decoration: underline">FORMULIR ISIAN DATA KARTU TANDA PENDUDUK (KTP)</h4></td>
        </tr>
        <tr>
            <td> <p>Nomor :  ...... / ......   / ............... / ...............    </p></td>
        </tr>
    </table>
<br>
    <div class="container" style="text-align: left;">
    <p>Yang  bertanda tangan di bawah ini Kepala Desa Gajahrejo Kecamatan Gedangan Kabupaten Malang menerangkan dengan sebenarnya bahwa: </p>
    <table>
        <ol>
            <tr>
                <td><li></li></td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>' . $row["nama"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>NIK</td>
                <td>:</td>
                <td>' . $row["no_nik"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td>' . $row["tempat_lahir"] . '/' . tgl_indo($row["tanggal_lahir"]) . '</td>
            </tr>
             <tr>
                <td><li></li></td>
                <td>Alamat</td>
                <td>:</td>
                <td>' . $row["alamat"] .' RT. ' . $row["rt"] . ' RW. ' . $row["rw"] . '</td>
            </tr>
            <tr>
                <td></td>
                <td align="left" style="padding-left: 20px;">Kel/Desa</td>
                <td>:</td>
                <td>' . $row["desa"] . '</td>
            </tr>
            <tr>
                <td></td>
                <td align="left" style="padding-left: 20px;">Kecamatan</td>
                <td>:</td>
                <td>' . $row["kecamatan"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>' . $row["jk"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>Status</td>
                <td>:</td>
                <td>' . $row["status_perkawinan"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>Agama</td>
                <td>:</td>
                <td>' . $row["agama"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>' . $row["pekerjaan"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>Kabupaten</td>
                <td>:</td>
                <td>' . $row["kabupaten"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>Propinsi</td>
                <td>:</td>
                <td>' . $row["propinsi"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td>' . $row["kewarganegaraan"] . '</td>
            </tr>
            <tr>
                <td><li></li></td>
                <td>Dikeluarkan Tanggal</td>
                <td>:</td>
                <td>' . tgl_indo(date("Y-m-d")) . '</td>
            </tr>
        </ol>
    </table><br>
    <p style="text-align: justify;"><span style="color: white;">hallo</span><b><u>Keterangan :</u></b>Surat keterangan sementara ini dibuat atas permintaan yang bersangkutan akan di pergunakan untuk ' . $row["keperluan"] . '.  KTP asli masih dalam proses pembuatan.</p>
    <p style="text-align: justify;"><span style="color: white;">hallo</span>Demikian Surat Keterangan ini dibuat dan atas kerja samanya yang baik kami sampaikan terima kasih.</p><br>
    <br><br><br>
    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;"></td>
            <td align="right" style="padding-right: 100px;">Gajahrejo, ' . tgl_indo(date("Y-m-d")) . ' </td>
        </tr>
    </table>
    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;">Yang Bersangkutan</td>
            <td align="right" style="padding-right: 100px;">Kepala Desa Gajahrejo</td>
        </tr>
    </table><br><br><br><br>
    <table width=100%>
        <tr>
        <td width= 50%; style="padding-left: 100px;"><b>' . $row["nama"] . ' </b></td>
        <td align="right" style="padding-right: 100px;"><b><u>SISWOYO</b></u></td>    
        </tr>
    </table>
</body>
</html> 
';

$mpdf->WriteHTML($html);
$mpdf->Output("surat ktp", \Mpdf\Output\Destination::INLINE);
