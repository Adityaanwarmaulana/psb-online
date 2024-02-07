<?php
$cek    = $user;
$id_user = $cek->id_user;
$nama    = $cek->nama_lengkap;
$level   = $cek->level;

$tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="glyphicon glyphicon-send"></i> <b>DASHBOARD</b>
          </h3>
        </div>
        <div class="panel-body">
          <left>Selamat Datang, <?php echo ucwords($nama); ?></left>
        </div>
      </div>
      <!-- /basic datatable -->

      <div class="row">
        <div class="col-lg-12">

          <!-- Quick stats boxes -->
          <div class="row">
            <div class="col-lg-4">
              <!-- Current server load -->
              <div class="panel bg-teal-400">
                <div class="panel-body">
                  <div class="heading-elements">
                    <span class="heading-text"></span>
                  </div>
                  <h3 class="no-margin">
                    <?php
                    $thn_ini = date('Y');
                    $this->db->like('tgl_santri', $thn_ini, 'after');
                    echo number_format($this->db->get('tbl_santri')->num_rows(), 0, ",", "."); ?>
                  </h3>
                  JUMLAH PENDAFTAR
                </div>
              </div>
              <!-- /current server load -->
            </div>

            <div class="col-lg-4">
              <!-- Current server load -->
              <div class="panel bg-orange-400">
                <div class="panel-body">
                  <div class="heading-elements">
                    <span class="heading-text"></span>
                  </div>
                  <h3 class="no-margin">
                    <?php
                    $this->db->like('tgl_santri', $thn_ini, 'after');
                    echo number_format($this->db->get_where('tbl_santri', "status_pendaftaran='lulus'")->num_rows(), 0, ",", ".");  ?>
                  </h3>
                  TOTAL LULUS PSB
                </div>
              </div>
              <!-- /current server load -->
            </div>

            <div class="col-lg-4">
              <!-- Current server load -->
              <div class="panel bg-green">
                <div class="panel-body">
                  <div class="heading-elements">
                    <span class="heading-text"></span>
                  </div>
                  <h3 class="no-margin">
                    <?php
                    $this->db->like('tgl_santri', $thn_ini, 'after');
                    echo number_format($this->db->get_where('tbl_santri', "status_pendaftaran='tidak lulus'")->num_rows(), 0, ",", ".");  ?>
                  </h3>
                  TOTAL TIDAK LULUS PSB <?php echo $thn_ini; ?>
                </div>
              </div>
              <!-- /current server load -->
            </div>

          </div>
          <!-- /quick stats boxes -->


        </div>

      </div>

      <?php if ($web_psb->status_psb == 'buka') { ?>
        <div class="alert alert-info alert-dismissible" role="alert">
          <form action="" method="post">
            <button type="submit" name="btnnonaktif" class="btn btn-primary" onclick="return confirm('Anda Yakin?')"><i class="icon-laptop"></i> Tutup Pendaftaran PSB Online!</button>
            <strong>Status Pendaftaran PSB Online</strong> masih dibuka. Terakhir diubah <?php echo date('d-m-Y H:i:s', strtotime($web_psb->tgl_diubah)); ?>.
          </form>
        </div>
      <?php } else { ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <form action="" method="post">
            <button type="submit" name="btnaktif" class="btn btn-warning" onclick="return confirm('Anda Yakin?')"><i class="icon-laptop"></i> Buka Pendaftaran PSB Online!</button>
            <strong>Status Pendaftaran PSB Online</strong> masih ditutup. Terakhir diubah <?php echo date('d-m-Y H:i:s', strtotime($web_psb->tgl_diubah)); ?>.
          </form>
        </div>
      <?php } ?>

    </div>
    <!-- /dashboard content -->