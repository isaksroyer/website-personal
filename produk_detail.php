
<?php require_once "produk.php" ?>

<html lang="id">
    <head>
        <title>Detail Produk</title>
        <style>
            body {
                background-color: paleturquoise;
            }
            img {
                width: 150%;
            }
        </style>
    </head>
    <body>
        <?php $key_produk = $_GET['key_produk']; ?>
        <table width="100" border="0" align="center">
            <tbody>
                <tr>
                    <td align="center"> 
                        <img src="imgaes/<?php echo $data_produk[$key_produk]['Gambar']?> " >
                    </td>
                </tr>
                <tr>
                    <td align="center">  
                        <h1><?php echo $data_produk[$key_produk]['Judul'] ?></h1>
                    </td>
                </tr>
                 <tr>
                    <td align="center">  
                        <h2>Rp. <?php echo number_format($data_produk[$key_produk]['Harga']) ?></h2>
                    </td>
                </tr>
                 <tr>
                    <td align="center">  
                        <h3>Stok : <?php echo number_format($data_produk[$key_produk]['Stok']) ?></h3>
                    </td>
                </tr>
                <tr>
                    <td align="center">  
                        <h3><?php echo $data_produk[$key_produk]['Keterangan'] ?></h3>
                    </td>
                </tr>
                <tr>
                    <td align="center">  
                        <a href="index.php">Kembali ke Daftar Produk</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>