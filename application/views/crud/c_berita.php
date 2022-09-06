<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body id="page-top">

<div id="wrapper">

  <div id="content-wrapper">

    <div class="container-fluid">

    <br>

    <div class="card mb-3">
          <div class="card-header">
            Halaman Data Berita</div>

          <div class="card-body">
            <div class="table-responsive">
            
            <a class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">Berita <i class="fa fa-plus"></i></a>
            <hr>
                <?= $this->session->flashdata('message'); ?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                <br>
        <thead>
          <tr>
            <th width="1%">No</th>
            <th>Aksi</th>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
            <th>Tanggal Berita</th>
            <th>Gambar Berita</th>

          </tr>
        </thead>
        <tbody>
        <?php
                        $i = 1;
                        foreach ($data as $d) : ?>
                          <tr>
            <td><?= $i ?></td>
            <td><a data-toggle="modal" data-target="#hapus" class="btn btn-danger">Hapus</a> <hr>
            <a data-toggle="modal" data-target="#edit<?=$d['id_berita'];?>" class="btn btn-secondary" >Edit</a></td>
            <td><?= $d['judul'] ?></td>
            <td><?= $d['isi'] ?></td>
            <td><?= $d['tanggal'] ?></td>
            <td><img src="<?php echo base_url() . '/gambar/' . $d['gambar'] ?>" class="img-thumbnail" width="300" height="235" alt=""></td>
            </tr>
            <?php $i++;
                        endforeach ?>
        </tbody> 
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
    <!-- /.container-fluid -->
    <!-- Sticky Footer -->


<!-- tambah modal -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel">Tambah <?= $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('berita/tambah_berita') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
          <label>Judul Berita</label>
            <textarea type="text" class="form-control" id="judul" name="judul" required=""></textarea>
          </div>
          <div class="form-group">
          <label>Isi Berita</label>
            <textarea type="text" class="form-control" id="judul" name="isi" required=""></textarea>
          </div>
          <div class="form-group">
          <label>Tanggal Berita</label>
          <input class="form-control" type="date"  id="tanggal" name="tanggal" required=""></input>
          </div>
          <div class="form-group">
          <label>Gambar Berita</label>
          <input type="file" name="userfile" class="form-control" size="20" required="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Oke</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- hapus modal -->
<form action="/berita/hapus_berita/<?= $d['id_berita'] ?>" method="POST" enctype="multipart/form-data">
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('berita/hapus_berita') ?>" method="post">
        <div class="modal-body">
        <h5 class="modal-title" id="modalSayaLabel">Apakah Anda Yakin Ingin Menghapus Data Berita Ini?</h5>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Tutup</button>
        <a href="<?= base_url() ?>/berita/hapus_berita/<?= $d['id_berita'] ?>" class="btn btn-danger">Hapus</a>
      </div>
    </form>
    </div>
  </div>
</div>
</form>

<!-- edit modal -->
<?php $no = 0;
                        foreach ($data as $d) : $no++; ?>
                          <tr>
<div class="modal fade" id="edit<?=$d['id_berita'];?>" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
      <form action="<?= base_url('berita/edit_berita') ?>" method="post" enctype="multipart/form-data" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="modalSayaLabel">Edit <?= $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
          <label>Judul Berita</label>
            <textarea type="text" class="form-control" id="judul" name="judul" required=""><?=$d['judul']?></textarea>
          </div>
          <div class="form-group">
          <label>Isi Berita</label>
            <textarea type="text" class="form-control" id="judul" name="isi" required=""><?=$d['isi']?></textarea>
          </div>
          <div class="form-group">
          <label>Tanggal Berita</label>
          <input class="form-control" type="date"  id="tanggal" name="tanggal" required="" value="<?=$d['tanggal']?>"></input>
          <input class="form-control" type="hidden" name="idx" value="<?=$d['id_berita']?>"></input>
          <input class="form-control" type="hidden" name="gambar" value="<?=$d['gambar']?>"></input>
          </div>
          <div class="form-group">
          <label>Gambar Berita</label>
          <input type="file" name="userfile2" class="form-control" size="20">
          </div>
          <img src="<?php echo base_url() . '/gambar/' . $d['gambar']; ?>" width="100">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Oke</button>
      </div>
    </div>
  </div>
</div>
    </form>
<?php $i++;
            endforeach ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->




</body>
</html>