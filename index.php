<html>
   <head>
      <title>DASHBOARD ADMIN</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <center><h1>BOUTIQUE AMANAH</h1></center>
      <h3>Tabel Kasir</h3>
      <table>
         <thead>
            <tr>
               <th>ID Kasir</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No TELP</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM kasir';
            $query = mysqli_query($conn, $sql);	
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_kasir'] ?></td>
               <td><?php echo $row['nama'] ?></td>
               <td><?php echo $row['alamat'] ?></td>
               <td><?php echo $row['no_telp'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel Pelanggan</h3>
      <table>
         <thead>
            <tr>
               <th>ID Pelanggan</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No TELP</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM pelanggan';
            $query = mysqli_query($conn, $sql);	
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_pelanggan'] ?></td>
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['alamat_pelanggan'] ?></td>
               <td><?php echo $row['no_telp'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel Barang</h3>
      <table>
         <thead>
            <tr>
               <th>ID Barang</th>
               <th>Nama Barang</th>
               <th>Jenis Barang</th>
               <th>Warna Barang</th>
               <th>Stok Barang</th>
               <th>Harga Barang</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';	
            $sql = 'SELECT  * FROM barang';
            $query = mysqli_query($conn, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
               <td><?php echo $row[4] ?></td>
               <td><?php echo $row[5] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>

      <h3>Tabel Transaksi</h3>
      <table>
         <thead>
            <tr>
               <th>ID Transaki</th>
               <th>Kasir</th>
               <th>Pelanggan</th>
               <th>Barang</th>
               <th>Jumlah Beli</th>
               <th>Total Bayar</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';	
            $sql = "SELECT * FROM transaksi
            INNER JOIN  kasir ON transaksi.id_kasir = kasir.id_kasir
            INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan
            INNER JOIN barang ON transaksi.id_barang = barang.id_barang";
            $query = mysqli_query($conn, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_transaksi'] ?></td>
               <td><?php echo $row['id_kasir'] ?></td>
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['nama_barang'] ?></td>
               <td><?php echo $row['jumlah_beli'] ?></td>
               <td><?php echo $row['total_bayar'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
    
   </body>
</html>