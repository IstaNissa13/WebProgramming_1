<!DOCTYPE html>
<html>

<head>
    <title> Pemrograman Web 1</title>
</head>

<body>
    <?php
        //ini jumlah beli
        $jumlah= 12;

        //ini harga beli
        //Cara penggunaan konstanta, dimana fungsinya sama seperti variabel namun nilainya statis/konstan 
        //dan tidak bisa berubah. cara penulisannya adalah define("Nama_konstanta", nilai konstanta);
        define("harga", 3000);

        //ini total beli
        $total=$jumlah * harga;

        //ini hasilnya
        echo"Total Pembelian = $total <br>";
    ?>
</body>

</html>