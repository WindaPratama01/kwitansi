<?php
require("functions.php");

$kwtns = query("SELECT * FROM kwitansi");

if(isset($_POST["cari"])){
    $kwtns = cari($_POST["keyword"]);
}

?>

<!DOCTTYPE html>
<html>
<head>
<title>Tampil Data</title>
</head>

<body>
    <h3><a href="index.php">Buat Kwitansi</a></h3>

    <h1>Data Kwitansi</h1><br>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="keyword" size="30" autofocus>
        <button type="submit" name="cari">Cari</button>
    <br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr><th>No.</th>
        <th>Nomor Kwitansi</th>
        <th>Tgl Kwitansi</th>
        <th>Nama</th>
        <th>Amount</th>
        <th>Payment</th>
        <th>Total</th>
        <th>Method</th>
        <th>Bank</th>
        <th>Number</th>
        <th>Date</th>
        <th>Sign</th>
        <th>Edit</th>
    </tr> 
    <?php $i = 1; ?>
    <?php foreach($kwtns as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nokwitansi"]; ?></td>
        <td><?= $row["tglkwitansi"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["amount"]; ?></td>
        <td><?= $row["payment"]; ?></td>
        <td><?= $row["jumlah"]; ?></td>
        <td><?= $row["metode"]; ?></td>
        <td><?= $row["bank"]; ?></td>
        <td><?= $row["nomer"]; ?></td>
        <td><?= $row["tanggal"]; ?></td>
        <td><img src="gambar/<?echo $row['ttdf'];?>" width="50"></td>
        <td><a href="hapus.php?nokwitansi=<?= $row["nokwitansi"]; ?>" onclick="
            return confirm('Apakah anda yakin untuk menghapus data?');">Hapus</a>
        </td></tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
</form>
</body>
</html>