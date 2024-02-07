<div class="panel">
  <div class="panel-heading" style="background: #275555ff; color: honeydew;">
    <h2 align="center" style="margin-top: 10px;">FORM ISIAN<br><b>DATA SEKOLAH ASAL</b> </h2>
    <!-- <hr> -->
  </div>
  <div class="panel-body">

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Sekolah <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_sekolah" class="form-control bg-blue" placeholder="Nama Sekolah" maxlength="100" data-parsley-group="block4" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_sekolah"]' required>
        <i class="fa fa-university" style="margin-left:15px;"></i>
        <div id="error-nama_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jenjang sekolah <span class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih jenjang sekolah sebelumnya" name="jenjang_sekolah" data-parsley-group="block4" data-parsley-errors-container='div[id="error-jenjang_sekolah"]'>
          <option value="">Pilih Jenjang Sekolah</option>
          <option value="21">MI</option>
          <option value="22">SD</option>
          <option value="23">SD Terbuka</option>
          <option value="24">SLB-SD</option>
          <option value="1">SMP</option>
          <option value="2">MTS</option>
          <option value="3">SMP Terbuka</option>
          <option value="4">SLB-MTs</option>
          <option value="5">Paket B</option>
          <option value="6">Salafiyah Wustha</option>
          <option value="7">SMP Luar Negeri</option>
          <option value="8">Mu'adalah MTs</option>
          <option value="10">SLB-SMP</option>
          <option value="25">Paket A</option>
          <option value="26">Salafiyah Ula</option>
          <option value="27">Mu'adalah MI</option>
          <option value="28">SD Luar Negeri</option>
          <option value="29">Lainnya</option>
        </select>
        <div id="error-jenjang_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status sekolah <span class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih status sekolah sebelumnya" name="status_sekolah" data-parsley-group="block4" data-parsley-errors-container='div[id="error-status_sekolah"]'>
          <option value="">Pilih Status Sekolah</option>
          <option value="NEGERI">NEGERI</option>
          <option value="SWASTA">SWASTA</option>
        </select>
        <div id="error-status_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NPSN Sekolah <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="npsn_sekolah" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="10" placeholder="NPSN Sekolah sebelumnya" data-parsley-group="block4" data-parsley-errors-container='div[id="error-npsn_sekolah"]'>
        <i class="" style="margin-left:15px;"></i>
        <div id="error-npsn_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Lokasi sekolah <span class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih lokasi sekolah sebelumnya" name="lokasi_sekolah" data-parsley-group="block4" data-parsley-errors-container='div[id="error-lokasi_sekolah"]'>
          <option value="">Pilih Lokasi Sekolah</option>
          <option value="1">Dalam Kabupaten/Kota</option>
          <option value="2">Dalam Provinsi</option>
          <option value="3">Luar Provinsi</option>
          <option value="4">Luar Negeri</option>
        </select>
        <div id="error-lokasi_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div>