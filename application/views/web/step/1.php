<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
?>
<div class="panel" style="background-image: url(img/bg.png);">
  <div class="panel-heading" style="background: #275555ff; color: honeydew;">
    <h2 align="center" style="margin-top: 10px;">KETENTUAN PSB Online</br><b><?php echo $user['nama_lengkap']; ?></b>
      <br>TAHUN PELAJARAN <?php echo date('Y'); ?>-<?php echo date('Y') + 1; ?>
    </h2>
    <!-- <hr> -->
  </div>
  <!-- <div class="panel-body"> -->
  <img src="img/kontak.png" width="100%">
  <!-- <ol style="color:#275555ff; line-height: 10px;">
      <li style="line-height: 15px;">Setiap calon santri wajib mengisi form pendaftaran dengan lengkap. </li>
      <li style="line-height: 15px;">Data-data yang diisikan pada form PSB Online harus sesuai dengan data asli dan benar adanya.</li>
      <li style="line-height: 15px;">Calon santri yang sudah mendaftarkan secara online akan mendapatkan Nomor Pendaftaran yang harus dicetak dan dilampirkan dalam persyaratan yang diminta oleh Panitia PSB Online <?php echo $user['nama_lengkap']; ?>. </li>
      <li style="line-height: 15px;">Calon santri yang sudah mendaftarkan diri melalui PSB Online <?php echo $user['nama_lengkap']; ?> akan mendapatkan nomor pendaftaran dan password yang nantinya akan digunakan untuk akses informasi yang berkaitan dengan PSB Online <?php echo $user['nama_lengkap']; ?>.</li>
      <li style="line-height: 15px;">Calon santri yang sudah mendaftarakan diri melalui PSB Online <?php echo $user['nama_lengkap']; ?> wajib menyerahkan dokumen persyaratan yang sudah ditentukan oleh Panitia PSB Online.</li>
      <li style="line-height: 15px;">Setiap calon santri yang mendaftar wajib melaksanakan daftar ulang yang diadakan dan di tentukan waktu nya oleh panitia PSB <?php echo $user['nama_lengkap']; ?>.</li>
      <li style="line-height: 15px;">Data yang sudah diberikan oleh Panitia PSB Online <?php echo $user['nama_lengkap']; ?> hanya digunakan untuk keperluan penerimaan santri baru. <strong class="text-success">Data yang dikirimkan akan dijaga kerahasiaannya dan tidak akan dipublikasikan oleh Panitia PSB Online</strong>.</li>
    </ol> -->
  <!-- </div> -->
</div>