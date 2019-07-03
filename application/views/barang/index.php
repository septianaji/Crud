<div class="container">

<?php if($this->session->flashdata('flash') ) : ?>

                  <div class="row-mt-3">
                  <div class="col-md-6">

                                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                         Data Barang <strong></strong>  <?= $this->session->flashdata('flash');?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                   </div>

                  </div>
                  </div>
<?php endif; ?>

<div class="row mt-5">
               <div class="col-md-5">

                  <form action="" method="post">
                      <div class="input-group ">
                          <input type="text" class="form-control" placeholder="Pencarian Data" name="keyword">
                                <div class="input-group-append">
                                     <button class="btn btn-primary" type="submit">Cari</button>
                                 </div>
                      </div>
                  </form>

               </div>
            </div>



  <div class="row mt-3">
      <div class="col-md-6 mt-5">
        <h3>Daftar Barang</h3>


           

            <?php if(empty($barang)) : ?>
                 <div class="alert alert-danger" role="alert">
                       Data Barang Tidak Ditemukan!!
                </div>            
            <?php endif; ?>


        <ul class="list-group list-group-horizontal-xl">
          <?php foreach ($barang as $brg) : ?>
 
                <li class="list-group-item"><?= $brg['nama_barang']; ?>
                <a href="<?= base_url();?>barang/hapus/<?= $brg['id'];?>"
                class="badge badge-danger float-right" onclick=" return confirm('apakah anda yakin menghapus data ini');">hapus</a>

                <a href="<?= base_url();?>barang/ubah/<?= $brg['id'];?>"
                class="badge badge-success float-right">ubah</a>

                <a href="<?= base_url();?>barang/detail/<?= $brg['id'];?>"
                class="badge badge-primary float-right">detail</a>

                </li>

          <?php endforeach; ?>

        </ul>
        <a href ="<?= base_url();?>barang/tambah" class= "btn btn-primary float-right mt-3 ">Tambah Data Barang</a>
      </div>
  </div>
</div>
            <div class="row mt-5">

            </div>