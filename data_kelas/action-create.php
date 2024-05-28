<?php 
if(isset($_POST['Submit'])){
    $IdKelas = $_POST['IdKelas'];
    $NamaKelas = $_POST['NamaKelas'];
    $KompetensiKeahlian = $_POST['KompetensiKeahlian'];

    include "../koneksi.php";

    $result = mysqli_query($koneksi, "INSERT INTO kelas(id_kelas,nama_kelas,kompetensi_keahlian) VALUES('$IdKelas','$NamaKelas','$KompetensiKeahlian')");
    if($result){
        echo"<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{
        echo"<script>alert('Data Kelas gagal ditambahkan'); window.location.href='read.php'</script>";
    }
}