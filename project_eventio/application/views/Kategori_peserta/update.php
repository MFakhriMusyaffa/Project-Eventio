<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php/kategori_peserta')?>">Kelola Data Kategori Peserta</a></li>
              <li class="breadcrumb-item active">Form Update Kategori Peserta</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <h2><?=$judul?></h2>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Update Kategori Peserta</h3>
        </div>
        <div class="card-body">
          <?php
              $hidden = ['kategori_peserta_edit'=> $kategori_peserta_edit->id];
          ?>
          <?php echo form_open('Kategori_peserta/save','', $hidden)?>
            <div class="form-group row">
                <label for="id" class="col-4 col-form-label">Id</label> 
                <div class="col-8">
                  <input id="id" value="<?=$kategori_peserta_edit->id?>" name="id" placeholder="id" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Kategori Peserta</label> 
                <div class="col-8">
                  <input id="nama" value="<?=$kategori_peserta_edit->nama?>" name="nama" placeholder="Masukkan Jenis Kegiatan" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>

          <?php echo form_close()?>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->