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
    <style>
        #atas {
            width: 100%;
            font-family: arial;
            background: rgb(245, 247, 250);
            border-collapse: collapse;
        } 
        #atas td {
            border: 3px solid white;
            padding: 10px;
        }

        .deskripsi {
            text-align: center;
        }

        #bawah {
            border-collapse: collapse;
            width: 100%;
            font-family: arial;
        } 

        #bawah tr td {
            align: center;
            text-align: center;
        }
        
        #bawah tr:nth-child(1) {
            background-color: rgb(245, 247, 250);
        }

        #bawah tr:nth-last-child(1) {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div width="35px" height="50px" style="float:left; color:grey"><img style="max-width:30px; min-width: 30px; min-height: 30px; max-height: 30px;" src="images/apple.png" alt=""></div>
    <div width="300px" style="float:left; padding-left:5px" class=""><h1>App Store</h1></div>
    <div width="300px" height="50px" style="float:right; color:grey"><h1>Steuerrechnung</h1></div>
    <div class="" style="clear:left"></div>
    <div class="" style="clear:right"></div>
    <br>
    
    <table id="atas">
        <tr>
            <td style="padding:10px" width=40%; style="color:grey" colspan="2"><p>Rechnungseingang</p></td>
            <td style="padding:10px" width=30%; rowspan="3"><span style="font-size: 12px; color: grey;">Abgerechet mit :</span><br>KREDITKARTE </td>
            <td style="padding:10px;" width=20%; rowspan="3"><span style="font-size: 12px; color: grey;">Abgerechet mit :</span><br><span style="font-weight: bold">61.98 €</span></td>
        </tr>
        <tr>
            <td style="padding:10px" width=40%; style="color:black" colspan="2"><p><span style="font-size: 12px; color: grey;">DATE</span></p><br><p>Freitag, 7. ferbruaru 2020</p></td>
        </tr>
        <tr>
            <td  style="padding:10px; line-height: 20px; color:#4da6ff" width=20%;><span style="font-size: 12px; color: grey;">Abgerechet mit :</span><br>KREDITKARTE </td>
            <td  style="padding:10px; line-height: 20px; color:black" width=20%;><span style="font-size: 12px; color: grey;">Abgerechet mit :</span><br>KREDITKARTE </td>
        </tr>
    </table>
    <div class="" style="margin-top: 30px"></div>

    <table id="bawah">
        <tr>
            <td style="padding:10px; font-weight: bold; text-align:left" width=40%; colspan="2"><p>App Store</p></td>
            <td style="padding:10px; color:grey" width=23%;><p>TYPE</td>
            <td style="padding:10px; color:grey" width=22%;><p>PURCHASED FROM</p></td>
            <td style="padding:10px; color:grey" width=15%;><p>PRICE</p></td>
        </tr>
        <tr>
            <td width="70px" style="padding: 10px;"><img style="max-width:60px; min-width: 60px; min-height: 60px; max-height: 60px;" src="images/rusa.jpg" alt=""></td>
            <td width="270px" style="padding-left: 15px" align="left"><span style="font-weight: bold"> Nama</span>  <br> nama <br> <span style="color:#4da6ff">Nama</span></td>
            <td style="color:grey">IN- App Purchase</td>
            <td style="color:grey">Iphone 8</td>
            <td style="font-weight: bold"> 49.99 €</td>
        </tr>
        <tr>
            <td width="70px" style="padding: 10px;"><img style="max-width:60px; min-width: 60px; min-height: 60px; max-height: 60px;" src="images/rusa.jpg" alt=""></td>
            <td width="270px" style="padding-left: 15px" align="left"><span style="font-weight: bold"> Nama</span>  <br> nama <br> <a href="http://google.com" target="_blank" rel="noopener noreferrer">aaasa</a> <span style="color:#4da6ff">Nama</span></td>
            <td style="color:grey">IN- App Purchase</td>
            <td style="color:grey">Iphone 8</td>
            <td style="font-weight: bold"> 49.99 €</td>
        </tr>
        <tr>
            <td style="padding:10px 40px 10px 10px; text-align:right; color:grey" width=85%; colspan="4" >TOTAL</td>
            <td style="padding:10px; font-weight: bold" width=15%;><p>69.98 €</p></td>
        </tr>
    </table>

    <div class="deskripsi">
        <br>
        <h3>Probleme mit dieser Transkation?</h3>
        <p>Wenn Sie disese Transkasion nicht autorisiert haben,</p>
        <p>Klicken sie auf den Link unten, un ugre Bestellubfeb zy strorbuereborder eine vollstandinge Ruckestattung xu erghalterm :</p>
        <br>
        <p style="color:#4da6ff">Melden SIe ein Problem, verwalten Sie die Zahlung oder sotrnieren Sie Ihre Bestellung</p>
        <br>
        <img style="max-width:60px; min-width: 60px; min-height: 60px; max-height: 60px;" src="images/apple.png" alt="">
        <p>Ductshland</p>
        <br>
        <p>Copyright@2020 Apple inc Akke Rechte vorbehalten</p>

    </div>

</body>
</html> 
';

$mpdf->WriteHTML($html);
$mpdf->Output("surat ktp", \Mpdf\Output\Destination::INLINE);
