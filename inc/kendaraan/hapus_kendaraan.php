<?php
require 'inc/koneksi.php';

    $id_knd = $_GET['id_knd'];

    if (isset($id_knd)) {
    
    // Query untuk hapus data
    $sql = "DELETE FROM tbl_knd WHERE id_knd = $id_knd";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data kendaraan berhasil di hapus');
                document.location.href = '?page=kendaraan';
            </script>
        ";
    } else {
         echo "<script>
                alert('Data kendaraan gagal di hapus');
                document.location.href = '?page=kendaraan';
            </script>" . $sql . "<br>" . mysqli_error($koneksi);
        "
           
        ";
    }
    
    mysqli_close($koneksi);
}
?>