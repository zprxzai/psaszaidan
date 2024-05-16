<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>
<?php
include_once('config.php');
$id  = $_GET['id'];
$sql = "SELECT * FROM guru WHERE id='$id'";
$result = mysqli_query($con, $sql);
$r=mysqli_fetch_assoc($result);
?>

            <div class="card-body">
                <form action="?m=guru&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="nip" value="<?= $r['nip']; ?>" class="form-control" placeholder="Nama siswa" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" value="<?= $r['nama']; ?>" class="form-control" placeholder="Kapasitas" required>
                    </div>
                    <div class="mb-3">
                        <label for="">alamat lengkap</label>
                        <textarea name="tempat_lahir" value="<?= $r['tempat_lahir']; ?>" class="form-control" placeholder="Terisi" required> </textarea>
                    </div>
                    <div class="mb-3">
                            <input type="date" name="tanggal_lahir" value="<?= $r['tanggal_lahir']; ?>" class="form-control" placeholder="Tanggal lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="">masukkan foto</label>
                            <input type="file" name="foto" value="<?= $r['foto']; ?>" class="form-control" placeholder="foto" accept="image/*" >
                                
                           
                    </div> 
                      <div class="mb-3">
                            <input type="text" name="no_telp" value="<?= $r['no_telp']; ?>" class="form-control" placeholder="no telp" required>
                        </div>
                        <div class="mb-3">
                            <select name="mata_pelajaran_id"  value="<?= $r['mata_pelajaran_id']; ?>"  class="form-control" placeholder="mapel" required>
                            <option value="">Pilih mapel</option>
                                <?php
                                include_once("config.php");
                                $sql = "SELECT * FROM mata_pelajaran" ;
                                $result = mysqli_query($con, $sql);
                            while ( $r = mysqli_fetch_assoc
                            ($result)) {
                                echo "<option value='" . $r['id'] . "'>". $r['mata_pelajaran'] . "</option>";
                            } 
                            ?>
                            </select>
                        </div>

                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>