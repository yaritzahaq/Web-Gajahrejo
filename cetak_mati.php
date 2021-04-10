<?php
session_start();

require_once __DIR__ . '/vendor/autoload.php';


require 'functions.php';

$id = $_GET["id"];

$mati = query("SELECT * FROM mati WHERE id = $id");

$mpdf = new \Mpdf\Mpdf();
$html = '
    <div class="container">
        <table>
            <tr>
                <td>Pemerintah Desa/Kelurahan</td>
                <td>:</td>
                <td>Gajahrejo</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>Gedangan</td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>:</td>
                <td>Malang</td>
            </tr>
        </table>
    </div><hr>
    <div class="container" style="text-align: center;">
        <h3>FORMULIR  PELAPOR KEMATIAN </h3>
    </div>';

foreach ($mati as $row)
    $html .= '
    <div class="container">
        <table>
            <tr>
                <td style="padding-left: 40px;">Yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>
    <div class="container">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>' . $row["nama_lapor"] . '</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>' . $row["nik_lapor"] . '</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>' . $row["umur_lapor"] . '</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>' . $row["pekerjaan_lapor"] . '</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td></td>
                <td>' . "a. RT :" . $row["rt_lapor"] . '</td>
                <td>' . "b. RW      :" . $row["rw_lapor"] . '</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>' . "c. Desa/kelurahan :" . $row["desa_lapor"] . '</td>
                <td>' . "d. Kecamatan      :" . $row["kec_lapor"] . '</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>' . "e. Kab/kota :" . $row["Kab_lapor"] . '</td>
            </tr>
            <tr><td style="color:white">.</td></tr>
            <tr>
                <td>Hubungan dengan yang mati </td>
                <td>:</td>
                <td>' . $row["hub"] . '</td>
            </tr>
            <tr><td style="color:white">.</td></tr>
        </table>
    </div>
    <div class="container">
        <table>
            <tr>
                <td style="padding-left: 40px;">Melaporkan bahwa :</td>
            </tr>
        </table>
    </div>
    <div class="container">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>' . $row["nama_mati"] . '</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>' . $row["nik_mati"] . '</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>' . $row["jk_mati"] . '</td>
            </tr>
            <tr>
                <td>Tanggal lahir/umur</td>
                <td>:</td>
                <td>' . tgl_indo($row["tgl_mati"]) . '</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>' . $row["agama"] . '</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td></td>
                <td>' . "a. RT :" . $row["rt_mati"] . '</td>
                <td>' . "b. RW      :" . $row["rw_mati"] . '</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>' . "c.  Desa/kelurahan :" . $row["desa_mati"] . '</td>
                <td>' . "d. Kecamatan      :" . $row["kec_mati"] . '</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>' . "e. Kab/kota :" . $row["kab_mati"] . '</td>
            </tr>
            <tr>
                <td style="color:white">Hubungan dengan yang meninggal </td>
            </tr>   
        </table>
    </div><div class="container">
    <table>
        <tr>
            <td style="padding-left: 40px;">Telah meninggal dunia pada :</td>
        </tr>
    </table>
</div>
<div class="container">
    <table>
        <tr>
            <td>Hari</td>
            <td>:</td>
            <td>' . $row["hari"] . '</td>
        </tr>
        <tr>
            <td>Tanggal Kematian</td>
            <td>:</td>
            <td>' . tgl_indo($row["tgl_kematian"]) . '</td>
        </tr>
        <tr>
            <td>Pukul</td>
            <td>:</td>
            <td>' . $row["pukul"] . '</td>
        </tr>
        <tr>
            <td>Bertempat di</td>
            <td>:</td>
            <td>' . $row["bertempat"] . '</td>
        </tr>
        <tr>
            <td>Penyebab kematian</td>
            <td>:</td>
            <td>' . $row["penyebab"] . '</td>
        </tr> 
        <tr>
            <td>Bukti Kematian</td>
            <td>:</td>
            <td>' . $row["bukti"] . '</td>
        </tr> 
        <tr>
            <td style="color:white">Hubungan dengan yang meninggal </td>
        </tr>  
    </table>
</div>



    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;"></td>
            <td align="right" style="padding-right: 100px;">' . "Gajahrejo, " . tgl_indo(date("Y-m-d")) . ' </td>
        </tr>
    </table>
    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;"></td>
            <td align="right" style="padding-right: 100px;">Pelapor </td>
        </tr>
    </table><br><br><br><br>
    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;"></td>
            <td align="right" style="padding-right: 70px;">(' . $row["nama_lapor"] . ' )</td>
        </tr>
    </table>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container" style="text-align: center;">
        <h3>SURAT  PERNYATAAN TANGGUNG  JAWAB  MUTLAK(SPTJM) KEBENARAN DATA KEMATIAN</h3>
    </div>
    <div class="container">
    <p>Yang bertanda tangan dibawah ini saya  :<p>
        <table>

            <tr>
            
                <td>Nama</td>
                <td>:</td>
                <td>'. $row["nama_lapor"] .'</td>
            </tr>
            <tr>
            
                <td>NIK</td>
                <td>:</td>
                <td>' . $row["nik_lapor"] . '</td>
            </tr>
                            <tr>
                    
                    <td>Nomor KK</td>
                    <td>:</td>
                    <td>' . $row["no_kk"] . '</td>
                </tr>
                <tr>
                  
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>' . $row["jk_lapor"] . '</td>
                </tr>
                <tr>
                  
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>' . $row["pekerjaan_lapor"] . '</td>
                </tr>
                <tr>
                 
                    <td>Alamat</td>
                    <td>:</td>
                    <td>' . "Desa/kelurahan :" . $row["desa_lapor"] . '</td>
                    <td>' . "Kab/kota       :" . $row["kab_lapor"] . '</td>
                </tr>
                <tr>
                    <td></td>

                    <td></td>
                    <td>' . "Kecamatan :" . $row["kec_lapor"] . '</td>
                    <td>' . "Provinsi  :" . $row["prov_lapor"] . '</td>
                </tr>
                <tr>
                    <td>Status Hubungan Keluarga</td>
                    <td>:</td>
                    <td>' . $row["hub"] . '</td>
                </tr>
        </table>
    </div>
    <p style="text-align: justify;"><span style="color: white;">hallo</span>Dengan ini menyataka bahwa yang tersebut dibawah ini :</p>
            <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>' . $row["nama_mati"] . '</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>' . $row["nik_mati"] . '</td>
            </tr>
            <tr>
                <td>Nomor KK</td>
                <td>:</td>
                <td>' . $row["kk_mati"] . '</td>
            </tr>
            <tr>
                <td>Tempat / Tanggal lahir/umur</td>
                <td>:</td>
                <td>' . $row["bertempat"] .'/' . tgl_indo($row["tgl_mati"]) . '</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td></td>
                <td>' . "RT :" . $row["rt_mati"] . '</td>
                <td>' . "RW      :" . $row["rw_mati"] . '</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>' . "Desa/kelurahan :" . $row["desa_mati"] . '</td>
                <td>' . "Kecamatan      :" . $row["kec_mati"] . '</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>' . "Kab/kota :" . $row["kab_mati"] . '</td>
            </tr>
            
        </table>
        <p style="text-align: justify;"><span style="color: white;">hallo</span>Telah meninggal dunia pada tanggal ' . tgl_indo($row["tgl_kematian"]) . ' ,Pukul ' . $row["pukul"] . ' dialamat RT ' . $row["rt_mati"] . ' RW ' . $row["rw_mati"] . ' Desa/kelurahan ' . $row["desa_mati"] . ' Kecamatann ' . $row["kec_mati"] . '.</p>
        <p style="text-align: justify;"><span style="color: white;">hallo</span>Surat Pernyataan ini saya buat dengan sebenar-benar nya dan apabila pernyataan saya tidak benar saya bersedia dikenakan sanksi pidana sebagaimana ditentukan dalam pasal 93 Undang-UndangNomor 23 Tahun 2006 tentang Administrasi Kependudukan bahwa<b>“SetiapPenduduk yang dengan sengaja memalsukan surat dan/atau dokumen kepada Instansi Pelaksan adala mmelaporkan Peristiwa Kependudukan dan Peristiwa Penting dipidana dengan pidana penjara.paling lama 6 (enam) tahun dan/ atau denda paling banyak Rp.50.000.000,00 (lima puluh juta rupiah)”</b> dan dokumen yang diterbitkan akibat dari pernyataan ini menjadi tidak sah.</p>
        <p style="text-align: justify;"><span style="color: white;">hallo</span>Demikian surat pernyataan ini saya buat sebagai kelengkapan penerbitan Akta Kematian.</p>
        </div>
    <table width=100%>
        <tr>
            <td width= 50%; style="padding-left: 100px;"></td>
            <td align="right" style="padding-right: 100px;">' . "Gajahrejo, " . tgl_indo(date("Y-m-d")) . ' </td>
        </tr>
    </table>
    <table width=100%>
        <tr>
            <td width= 66%;align="left" style="padding: 20px;">Mengetahui :</td>
        </tr>
    </table>
    <table width=100%>
        <tr>
            <td width= 25%; style="padding: 20px;">Ketua RT </td>
            <td width= 25%; style="padding: 20px;">Kepala Desa / Lurah</td>
            <td width= 25%; style="padding: 20px;">Ketua RW </td>
            <td width= 25%; style="padding: 20px;">Yang Menyatakan </td>
        </tr>
        </table>
        <table width=100%>
        <tr>
            <td width= 25%; style="padding: 20px 0 0 0px;">....................</td>
            <td width= 25%; style="padding: 20px 0 0 0px;"><b><u>SISWOYO</b></u></td>
            <td width= 25%; style="padding: 20px 0 0 0px;">....................</td>
            <td width= 25%; style="padding: 20px 0 0 0px">' . $row["nama_lapor"] . ' </td>
        </tr>
        </table>
';

$mpdf->WriteHTML($html);
$mpdf->Output("surat kelahiran", \Mpdf\Output\Destination::INLINE);
