<div class="container">

        <div class="row mt-3">
                <div class="col-md-6">
                        <div class="card">
                                <div class="card-header">
                                Form Tambah Barang
                                </div>
                        <div class="card-body">
                      

        <form action="" method="post"> 
            <input type="hidden" name = "id" value="<?= $barang['id'];?>">
                
                <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang"value="<?=$barang['nama_barang'];?>"> 
                        <small class="form-text text-danger"><?= form_error('nama_barang')?></small>
                </div>

                <div class="form-group">
                        <label for="satuan_barang">Satuan</label>
                        <input type="text" name="satuan_barang" class="form-control" id="satuan_barang"value="<?=$barang['satuan_barang'];?>"> 
                        <small class="form-text text-danger"><?= form_error('satuan_barang')?></small>
                </div>

                <div class="form-group">
                        <label for="harga_barang">Harga</label>
                        <input type="text" name="harga_barang" class="form-control" id="harga_barang"value="<?=$barang['harga_barang'];?>"> 
                        <small class="form-text text-danger"><?= form_error('harga_barang')?></small>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary">ubah Data</button>
        </form>

        </div>
</div>
