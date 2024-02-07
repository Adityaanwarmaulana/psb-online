<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_data extends CI_Model
{

    public function view()
    {
        return $this->db->get('tbl_data')->result(); // Tampilkan semua data yang ada di tabel santri
    }

    function statistik($thn = '', $aksi = '')
    {
        switch ($thn) {
            case 'diverifikasi':
                $status = "AND status_verifikasi='1'";
                break;

            case 'diterima':
                $status = "AND status_pendaftaran='lulus'";
                break;

            case 'tidak diterima':
                $status = "AND status_pendaftaran='tidak lulus'";
                break;

            default:
                $status = "";
                break;
        }

        $sql = $this->db->query("
        select
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=1) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Januari`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=2) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Februari`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=3) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Maret`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=4) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `April`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=5) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Mei`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=6) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Juni`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=7) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Juli`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=8) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Agustus`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=9) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `September`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=10) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Oktober`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=11) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Nopember`,
            ifnull((SELECT count(id_santri) FROM (tbl_santri)WHERE((Month(tgl_santri)=12) $status AND (YEAR(tgl_santri)='$thn'))),0) AS `Desember`
            from tbl_santri GROUP BY YEAR(tgl_santri)
        ");
        return $sql;
    }

    // Fungsi upload file dan tanggal format Indonesia pindah ke /app/libraries/Lib_data.php.

}
