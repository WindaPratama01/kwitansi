<?php
require("functions.php");

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script> 
            alert('Kwitansi berhasil dikirim');
            document.location.href = 'index.php';
            </script> ";
    } else {
        echo "<script> 
    alert('Kwitansi gagal dikirim');
    document.location.href = 'index.php';
    </script> ";
    }
}



?>

<!DOCTYPE html>

<head>
    <title>Kwitansi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
</head>

<body>


    <div class="container">

        <form method="post" enctype='multipart/form-data'>


            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="2">


                        <table class="tabel1">
                            <tr>
                                <td rowspan="4">
                                    <h1>
                                        BaliTop Webmedia</h1>
                                </td>
                                <div>
                                    <td rowspan="2">
                                        <h2>
                                            Kwitansi</h2>
                                    </td>


                                    <td class="nom">
                                        <label for="nok">No &nbsp; </label>
                                    </td>
                                    <td class="notgl">
                                        :&nbsp;<input type="number" name="nokwitansi" id="nok">

                                    </td>
                            </tr>

                            <tr>
                                <td class="nom2">Number</td>
                            </tr>

                            <tr>
                                <td rowspan="2">
                                    <h2 id="h22">
                                        Receipt</h2>
                                </td>

                                <td class="nom">Tgl</td>
    </div>

    <td>

        :&nbsp;<input type="date" name="tglkwitansi" value="">

    </td>

    </tr>

    <tr>
        <td class="nom2">Date</td>
    </tr>
    </table>

    <table class="tabel2">
        <tr>
            <td id="tr1" class="nom">
                Sudah terima dari
            </td>
            <td class="txtb2">
                :<input class="nm" type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td id="tr1" class="nom2">
                Received from
            </td>
        </tr>


        <tr>
            <td id="tr1" class="nom">
                Banyaknya Uang
            </td>
            <td class="txtb2">
                :<input class="nm" type="text" name="amount">
            </td>
        <tr>
            <td id="tr1" class="nom2">
                Amount
            </td>
        </tr>

    </table>

    <table class="tabel3">
        <tr>
            <td class="nom" id="tr2">
                Untuk pembayaran :
            </td>
            <td rowspan="2">
                <textarea rows="8" cols="110" name="payment"></textarea>
            </td>
        </tr>
        <tr>
            <td class="nom2" id="tr1">
                For payment
            </td>
        </tr>

    </table>

    <table class="tabel4">
        <tr>

            <td colspan="3" class="jum">
                <h3>
                    $/Rp.
                    <input class="rp" type="number" name="jumlah">
                </h3>
            </td>
            <td rowspan="7">
                <h4 class="ttdg">
                    <center>Unggah tanda tangan/Upload your sign</center><br>
                    <center><input type="file" name="ttdf"></center>
                </h4>
            </td>
        </tr>
        <tr>
            <td class="check">
                &nbsp;&nbsp;&nbsp;<input type="radio" name="metode" value="cash"> Cash
            </td>
            <td class="check">

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="metode" value="cheque"> Cheque
            </td>
            <td class="check">
                <input type="radio" name="metode" value="BG"> Bilyet Giro
            </td>
        </tr>
        <tr>
            <td class="nom" id="bank">
                Bank
            </td>
            <td colspan="2" class="txtb2">
                :<input class="bank" type="text" name="bank">
            </td>
        </tr>
        <tr>
            <td class="nom2">
                Bank</td>
        </tr>
        <tr>
            <td class="nom">
                No
            </td>
            <td colspan="2" class="txtb2">
                :<input type="text" class="bank" name="nomer">
            </td>
        </tr>
        <tr>
            <td class="nom2">
                Number
            </td>
        </tr>
        <tr>
            <td class="nom">
                Tgl
            </td>
            <td colspan="2">
                :&nbsp;<input type="date" name="tanggal">
            </td>
        </tr>
        <tr>
            <td class="nom2">Date</td>
            <td colspan="2"></td>
            <td>
                <center><input class="ttdf" type="text" name="ttd" placeholder="(.......................................)"></center>
            </td>
        </tr>


        <tr>
            <td colspan="4" class="tx1">
                Kwitansi ini dianggap sah, setelah pembayaran dengan Bilyet Giro/Cheque/ tsb. dapat diuangkan.
            </td>
        </tr>
        <tr>
            <td colspan="4" class="tx1">
                <i>This receipt will be cleared after Bilyet Giro/Cheque can be cleared. </i>
            </td>
        </tr>



    </table>

    </td>
    </tr>
    </table>
    <input type="submit" name="submit" value="submit" class="sub">
    <button type="reset" class="res">Reset</button>
    </form><br>
    <a href="tampildata.php"><button class="btn-tampil">Tampil Data</button></a>
    </div>
</body>