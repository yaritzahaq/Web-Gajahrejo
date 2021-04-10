<?php
session_start();

require_once __DIR__ . '/vendor/autoload.php';


require 'functions.php';

$id = $_GET["id"];

$skck = query("SELECT * FROM skck WHERE id = $id");

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
foreach ($skck as $row)
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
            <td><h4 style="text-decoration: underline">SURAT PENGANTAR PERMOHONAN KETERANGAN CATATAN KEPOLISIAN</h4></td>
        </tr>
        <tr>
            <td> <p>Nomor :  ...... / ......   / ............... / ...............    </p></td>
        </tr>
    </table>
    <p>Yang bertanda tangan dibawah ini, Kepala Desa Gajahrejo Kecamatan Gedangan kabupaten Malang , dengan ini menyertakan bahwa :</p>
    <table>
        <ol>
            <tr>
                <td style="color: white"><li></li></td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>' . $row["nama"] . '</td>
            </tr>
            <tr>
                <td style="color: white"><li></li></td>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>' . $row["jenis_kelamin"] . '</td>
            </tr>
            <tr>
                <td style="color: white"><li></li></td>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>' . $row["tempat_lahir"] . ", " . tgl_indo($row["tgl_lahir"]) . '</td>
            </tr>
            <tr>
                <td style="color: white"><li></li></td>
                <td>Status Perkawinan</td>
                <td>:</td>
                <td>' . $row["status"] . '</td>
            </tr>
            <tr>
                <td style="color: white"><li></li></td>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td>' . $row["kewarganegaraan"] . '</td>
            </tr>
            <tr>
                <td style="color: white"><li></li></td>
                <td>Agama</td>
                <td>:</td>
                <td>' . $row["agama"] . '</td>
            </tr>
            <tr>
                <td style="color: white"><li></li></td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>' . $row["pekerjaan"] . '</td>
            </tr>
            <tr>
                <td style="color: white"><li></li></td>
                <td>No KTP/NIK</td>
                <td>:</td>
                <td>' . $row["nik"] . '</td>
            </tr>            <tr>
                <td style="color: white"><li></li></td>
                <td>Alamat</td>
                <td>:</td>
                <td>' . "RT " . $row["rt"] . " RW " . $row["rw"] . " Desa " . $row["desa"] . ", Kec." . $row["kecamatan"] . ", Kab. " . $row["kabupaten"] . '</td>
            </tr>
            <tr>
                <td style="color: white"><li></li></td>
                <td>Keperluan</td>
                <td>:</td>
                <td>' . $row["keperluan"] . '</td>
            </tr>
            <tr>
                <td style="color: white"><li></li></td>
                <td>Berlaku mulai tanggal</td>
                <td>:</td>
                <td>' . tgl_indo($row["mulai"]) . " s/d " . tgl_indo($row["selesai"]) . '</td>
            </tr>
        </ol>
    </table>
     <p style="text-align: justify;"><span style="color: white;">hallo</span><b><u>Keterangan :</u></b>Setelah kami telusuri bahwa orang tersebut keberadaannya benar-benar orang  Desa Gajahrejo Kecamatan Gedangan Kabupaten Malang asli. Serta kami menerangkan bahwa orang tersebut benar berkelakuan baik dan belum pernah tersangkut perkara Polisi. Surat keterangan ini atas dasar permintaan yang bersangkutan dan akan di pergunakan untuk ' . $row["keperluan"] . '.</p>
    <p style="text-align: justify;"><span style="color: white;">hallo</span>Demikian surat keterangan pengantar ini kami buat dengan sebenarnya dan dapat dipergunakan sebagaimana mestinya.</p><br>
    <br>
    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;"></td>
            <td align="right" style="padding-right: 100px;">Gajahrejo, ' . tgl_indo(date("Y-m-d")) . ' </td>
        </tr>
    </table>
    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;">Yang Bersangkutan</td>
            <td align="right" style="padding-right: 100px; ">An.Kepala Desa Gajahrejo</td>
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
