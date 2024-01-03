<?php 

$kon = mysqli_connect("localhost","root","","kwitansi");

function query($query) {
    global $kon;
    $result = mysqli_query($kon, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $kon;
    
    $nokwitansi = htmlspecialchars($data['nokwitansi']);
    $tglkwitansi = htmlspecialchars($data['tglkwitansi']);
    $nama = htmlspecialchars($data['nama']);
    $amount = htmlspecialchars($data['amount']);
    $payment = htmlspecialchars($data['payment']);
    $jumlah = htmlspecialchars($data['jumlah']);
    $metode = htmlspecialchars($data['metode']);
    $bank = htmlspecialchars($data['bank']);
    $nomer = htmlspecialchars($data['nomer']);
    $tanggal = htmlspecialchars($data['tanggal']);
    $ttd = htmlspecialchars($data['ttd']);
    
    $ttdf = upload();


    //upload gambar
    if(!$ttdf){
      return false;
    }


    $query = "INSERT INTO Kwitansi
                    VALUES
              ($nokwitansi, '$tglkwitansi','$nama','$amount','$payment',
               $jumlah,'$metode','$bank',$nomer,'$tanggal','$ttd','$ttdf')";

    mysqli_query($kon, $query);
    return mysqli_affected_rows($kon);
}


function upload(){

    $namafile = $_FILES['ttdf']['name'];
    $ukuranfile = $_FILES['ttdf']['size'];
    $error = $_FILES['ttdf']['error'];
    $tmpName = $_FILES['ttdf']['tmp_name'];

    if($error === 4) {
        echo "<script>
           
          alert('Pilih gambar terlebih dahulu!')
        </script>";
        return false;
    }

    $eksgambar =['jpg','jpeg','png'];
    $eksgam = explode('.', $namafile);
    $eksgam = strtolower(end($eksgam));

    if(!in_array($eksgam, $eksgambar)) {

        echo "<script>
           
        alert('Yang anda upload bukan gambar!(jpg,jpeg,png)')
      </script>";
      return false;

    }

    if($ukuranfile > 5000000){
        echo "<script>
           
        alert('ukuran gambar terlalu besar!')
      </script>";
      return false;
    }

    $nfbaru = uniqid();
    $nfbaru .= '.';
    $nfbaru .= $eksgam;
    


    move_uploaded_file($tmpName,'gambar/'. $nfbaru);

    return $nfbaru;}


function hapus($id){
    global $kon;
    mysqli_query($kon, "DELETE FROM Kwitansi WHERE nokwitansi= $id");
    return mysqli_affected_rows($kon);
}

function cari($keyword){
    $query = "SELECT * FROM Kwitansi 
                WHERE nokwitansi LIKE '%$keyword%' OR
                      tglkwitansi LIKE '%$keyword%' OR
                      nama LIKE '%$keyword%' OR
                      metode LIKE '%$keyword%' OR
                      bank LIKE '%$keyword%' OR
                      tanggal LIKE '%$keyword%' OR
                      ttdf LIKE '%$keyword%'";

    return query($query);
}

?>