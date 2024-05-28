<?php
if(isset($_POST['Submit'])){
    $IdKelas = $_POST['IdKelas'];
    $NamaKelas = $_POST['NamaKelas'];
    $KompetensiKeahlian = $_POST['KompetensiKeahlian'];

    include "../koneksi.php";
    $result = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$NamaKelas', kompetensi_keahlian='$KompetensiKeahlian' WHERE id_kelas='$IdKelas'");

    if($result){
        echo"<script>alert('Data kelas berhasil di update'); window.location.href='read.php'</script>";
    }else{
        echo"<script>alert('Data kelas gagal di update'); window.location.href='read.php'</script>";
    }
}
?>