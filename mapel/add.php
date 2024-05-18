<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Mapel</div>
                <div class="col-4">
                    <a href="?m=mapel&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=mapel&s=save" method="post">
                    <div class="mb-3">
                        <input type="text" name="mata_pelajaran" class="form-control" placeholder="Nama Mapel" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="jam" class="form-control" placeholder="Jam Pelajaran" required>
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