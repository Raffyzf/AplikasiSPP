<?php
session_start();
if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan=gagal");
}
?>

<?php require('../template/header.php'); ?>
<?php require('../template/navbar.php'); ?>
<?php require('../template/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h3>Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <a href="create.php" class="btn btn-success">Tambah Data Kelas</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th>#</th>
                                <th>ID Kelas</th>
                                <th>Nama Kelas</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            include "../koneksi.php";
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM kelas");
                            $nomor = 1;
                            while($data = mysqli_fetch_array($query_mysql)) { ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $data['id_kelas']; ?></td>
                                <td><?php echo $data['nama_kelas']; ?></td>
                                <td><?php echo $data['kompetensi_keahlian']; ?></td>
                                <td style="width:20%;">
                                    <a href="update.php?id_kelas=<?php echo $data['id_kelas']; ?>" class="btn btn-warning my-1">Update</a>
                                    <a href="action-delete.php?id_kelas=<?php echo $data['id_kelas']; ?>" class="btn btn-danger my-1">Delete</a>
                                    <a href="#" class="btn btn-secondary my-1">Detail</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>