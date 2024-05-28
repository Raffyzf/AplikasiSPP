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
            <div class="row">
                <div class="col">
                    <p class="display-1">Selamat Datang <?php echo $_SESSION['nama']; ?></p>
                </div>
            </div>
        </div>
    </section>
</div

<?php require('../template/footer.php'); ?>a