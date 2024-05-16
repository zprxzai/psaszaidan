<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                    <form action="?m=siswa&s=save" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" name="nip" class="form-control" placeholder="nip" required autofocus>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="nama" required>
                        </div>
                      
                        <div class="mb-3">
                        <label for="">Alamat lengkap</label>
                <textarea  name="tempat_lahir" cols="50" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" required>
                        </div>
                     
                        <div class="mb-3">
                            <label for="">masukkan foto</label>
                            <input type="file" name="foto" class="form-control" placeholder="foto" accept="image/*" >
                                
                           
                    </div> 
                    <div class="mb-3">
                            <input type="text" name="no_telp" class="form-control" placeholder="no telp" required>
                        </div>
                      <div class="mb-3">
                            <select name="mata_pelajaran_id" class="form-control" placeholder="mapel" required>
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
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--