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
        <div class="section-body d-flex justify-content-center">
            <div class="row ">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tambah Data Kelas</h3>
                        </div>
                        <?php
                        include "../koneksi.php";
                        $IdKelas = $_GET['id_kelas'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas=$IdKelas");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                        <form method="POST" action="action-update.php" class="needs-validation" novalidate="">
                            <div class="card-body">
                              <div class="form-group">
                                <label for="IdKelas">ID Kelas</label>
                                <input id="IdKelas" type="text" class="form-control" name="IdKelas" tabindex="1" value="<?php echo $data['id_kelas']; ?>" required autofocus readonly>
                              </div>
            
                              <div class="form-group">
                                    <label for="NamaKelas" class="control-label">Nama Kelas</label>
                                    <input id="NamaKelas" type="text" class="form-control" name="NamaKelas" tabindex="2" value="<?php echo $data['nama_kelas']; ?>" required>
                              </div>

                              <div class="form-group">
                                <label for="KompetensiKeahlian" class="control-label">Kompetensi Keahlian</label>
                                <select name="KompetensiKeahlian" id="KompetensiKeahlian" class="form-control" aria-label="selected">
                                    <option selected value="<?php echo $data['kompetensi_keahlian']; } ?>">
                                        Pilih Kompetensi Keahlian
                                    </option>
                                    <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                    <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor Kompetensi Keahlian</option>
                                    <option value="Teknik Audio Video">Teknik Audio Video</option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    <option value="Desain Pemodelan dan Informasi Bangunan">Desain Pemodelan dan Informasi Bangunan</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <button type="submit" name="Submit" id="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                  Submit
                                </button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div

<?php require('../template/footer.php'); ?>