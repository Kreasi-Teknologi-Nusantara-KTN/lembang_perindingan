<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'HalamanAwal';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['admin.html']  = 'Admin/Admin';

$route['admin/warga.html']          = 'Admin/Warga';
$route['admin/warga/tambah.html']   = 'Admin/Warga/tambah';
$route['admin/warga/upload.html']   = 'Admin/Warga/upload';
$route['admin/warga/hapus/(:any)']  = 'Admin/Warga/hapus/$1';
$route['admin/warga/cari.html']     = 'Admin/Warga/cari';
$route['admin/warga/edit/(:any)']   = 'Admin/Warga/edit/$1';
$route['admin/warga/cetak.html']    = 'Admin/Warga/cetak';
$route['admin/warga/17']            = 'Admin/Warga/warga17';

$route['admin/saran_perubahan.html']          = 'Admin/Admin/saranPerubahanData';
$route['admin/saran_perubahan/hapus/(:any)']  = 'Admin/Admin/hapusSaranPerubahanData/$1';
$route['admin/bantuan/(:any)']                = 'Admin/Bantuan/index/$1';
$route['admin/upload_bantuan']                = 'Admin/Bantuan/upload';
$route['admin/bantuan/(:any)/cetak.html']     = 'Admin/Bantuan/cetak/$1';
$route['admin/tambah_bantuan.html']           = 'Admin/Bantuan/tambah';
$route['admin/hapus_bantuan/(:any)']          = 'Admin/Bantuan/hapus/$1';
$route['admin/edit_bantuan/(:any)']           = 'Admin/Bantuan/edit/$1';
$route['admin/visi_misi.html']                = 'Admin/Admin/visiMisi';
$route['admin/visi_misi/edit.html']           = 'Admin/Admin/editVisiMisi';
$route['admin/data_kematian.html']            = 'Admin/Warga/dataKematian';
$route['admin/data_kematian/hapus/(:any)']    = 'Admin/Warga/hapusDataKematian/$1';
$route['admin/data_kematian/edit/(:any)']     = 'Admin/Warga/editDataKematian/$1';
$route['admin/data_kematian/cetak.html']      = 'Admin/Warga/cetakDataKematian';
$route['admin/berita_desa.html']              = 'Admin/BeritaDesa';
$route['admin/berita_desa/tambah.html']       = 'Admin/BeritaDesa/tambah';
$route['admin/berita_desa/edit/(:any)']       = 'Admin/BeritaDesa/edit/$1';
$route['admin/berita_desa/hapus/(:any)']      = 'Admin/BeritaDesa/hapus/$1';
$route['admin/my_profile.html']               = 'Admin/Admin/myProfile';
$route['admin/my_profile/edit.html']          = 'Admin/Admin/myProfile/edit';
$route['admin/upload.html']                   = 'Admin/Admin/uploadFoto';
$route['admin/setting.html']                  = 'Admin/Admin/setting';;
$route['admin/ganti_password.html']           = 'Admin/Admin/gantiPassword';
$route['admin/tambah_admin.html']             = 'Admin/Admin/tambahAdmin';
$route['admin/vaksin_covid']                  = 'Admin/Vaksin';
$route['admin/vaksin_covid/tambah']           = 'Admin/Vaksin/tambah';
$route['admin/vaksin_covid/edit/(:any)']      = 'Admin/Vaksin/edit/$1';
$route['admin/vaksin_covid/hapus/(:any)']     = 'Admin/Vaksin/hapus/$1';

$route['warga.html']                      = 'Warga';
$route['warga/cari.html']                 = 'Warga/cari';
$route['warga/data_kematian.html']        = 'Warga/dataKematian';
$route['warga/data_kematian/cetak.html']  = 'Warga/cetakDataKematian';
$route['warga/saran_perubahan.html']      = 'Warga/saranPerubahan';
$route['warga/cetak.html']                = 'Warga/cetak';

$route['bantuan/(:any)']            = 'Bantuan/index/$1';
$route['bantuan/(:any)/cetak.html'] = 'Bantuan/cetak/$1';
$route['visi_misi.html']            = 'Warga/visiMisi';
$route['berita_desa.html']          = 'Warga/beritaDesa';