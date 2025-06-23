<?php
require 'inc/koneksi.php';

    $id_wp = $_GET['id_wp'];

    if (isset($id_wp)) {
    
    // Query untuk update data
    $sql = "DELETE FROM tbl_wp WHERE id_wp = $id_wp";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('data berhasil di hapus');
                document.location.href = '?page=pemilik';
            </script>
        ";
    } else {
         echo "<script>
                alert('data gagal di hapus');
                document.location.href = '?page=pemilik';
            </script>" . $sql . "<br>" . mysqli_error($koneksi);
        "
           
        ";
    }
    
    mysqli_close($koneksi);
}
?>