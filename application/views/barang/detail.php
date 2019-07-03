<div class="container">
    <div class="row mt-3">
        <div class="col md-6">

        <div class="card">
                <div class="card-header">
                    Detail Data Barang 
                </div>
        </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $barang['nama_barang'];?></h5>
                    <p class="card-text"><?= $barang['id'];?></p>
                    <p class="card-text"><?= $barang['harga_barang'];?></p>
                    <p class="card-text"><?= $barang['satuan_barang'];?></p>
                    <a href="<?= base_url();?>barang" class="btn btn-primary">Kembali</a>
                </div>
                


            </div>
        </div>
</div>
