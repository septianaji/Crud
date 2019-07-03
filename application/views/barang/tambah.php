<div class="container">

        <div class="row mt-3">
                <div class="col-md-6">
                        <div class="card">
                                <div class="card-header">
                                Form Tambah Barang
                                </div>
                        <div class="card-body">
                      

        <form action="" method="post"> 
                <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control" id="id"> 
                        <small class="form-text text-danger"><?= form_error('id')?></small>
                </div>

                <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang"> 
                        <small class="form-text text-danger"><?= form_error('nama_barang')?></small>
                </div>

                <div class="form-group">
                        <label for="satuan_barang">Satuan</label>
                        <input type="text" name="satuan_barang" class="form-control" id="satuan_barang"> 
                        <small class="form-text text-danger"><?= form_error('satuan_barang')?></small>
                </div>

                <div class="form-group">
                        <label for="harga_barang">Harga</label>
                        <input type="text" name="harga_barang" class="form-control" id="harga_barang"> 
                        <small class="form-text text-danger"><?= form_error('harga_barang')?></small>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
        </form>

        </div>
</div>
