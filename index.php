<?php require_once "produk.php" ?>

<html lang="id">
    <head>
        <litle>UNHI Service Electronic</litle>
    </head>
</body>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Keterangan</th>
                <th>Menu</th>
            </tr>
        </thead>
        </tbody>
            <?php foreach($data_produk as $key => $row) { 
                $no = $key + 1 ?>
            
            <tr>
                <td><?php echo $no ?>.</td>
                <td><img src="imgaes/<?php echo $row['Gambar'] ?>" width="100"></td>
                <td><?php echo $row ['Judul'] ?></td>
                <td>
                    <?php if($row['Harga'] > 100000) {
                        $harga_sebelum_diskon = $row['Harga'];
                        $potongan = $row['Harga'] * $diskon;
                        $harga_sekarang = $row['Harga'] - $potongan;
                        echo '<del>' .number_format($harga_sebelum_diskon). '</del>'.number_format($harga_sekarang);
                    } else {
                        $harga = number_format($row['Harga']);
                        echo $harga;

                    }?>
            
            
            </td>        
                <td><?php echo $row ['Stok'] == 0 ? 'sold out' : $row['Stok'] ?></td>
                <td><?php echo $row ['Keterangan'] ?></td>
                <td><a href="produk_detail.php?key_produk=<?php echo $key ?>">Detail</a></td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>        