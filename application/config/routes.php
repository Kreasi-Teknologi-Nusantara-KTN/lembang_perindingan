<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'HalamanAwal';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['admin.html']                        = 'Admin/Admin';
$route['admin/warga.html']                  = 'Admin/Warga';
$route['admin/warga/tambah.html']           = 'Admin/Warga/tambah';
$route['admin/warga/upload.html']           = 'Admin/Warga/upload';
$route['admin/warga/hapus/(:any)']          = 'Admin/Warga/hapus/$1';
$route['admin/warga/cari.html']             = 'Admin/Warga/cari';
$route['admin/warga/edit/(:any)']           = 'Admin/Warga/edit/$1';
$route['admin/saran_perubahan.html']        = 'Admin/Admin/saranPerubahanData';
$route['admin/bantuan/(:any)']              = 'Admin/Bantuan/index/$1';
$route['admin/tambah_bantuan.html']         = 'Admin/Bantuan/tambah';
$route['admin/hapus_bantuan/(:any)']        = 'Admin/Bantuan/hapus/$1';
$route['admin/edit_bantuan/(:any)']         = 'Admin/Bantuan/edit/$1';
$route['admin/visi_misi.html']              = 'Admin/Admin/visiMisi';
$route['admin/visi_misi/edit.html']         = 'Admin/Admin/editVisiMisi';
$route['admin/data_kematian.html']          = 'Admin/Warga/dataKematian';
$route['admin/data_kematian/hapus/(:any)']  = 'Admin/Warga/hapusDataKematian/$1';
$route['admin/data_kematian/edit/(:any)']   = 'Admin/Warga/editDataKematian/$1';
$route['admin/berita_desa.html']            = 'Admin/BeritaDesa';
$route['admin/berita_desa/tambah.html']     = 'Admin/BeritaDesa/tambah';
$route['admin/berita_desa/edit/(:any)']     = 'Admin/BeritaDesa/edit/$1';
$route['admin/berita_desa/hapus/(:any)']    = 'Admin/BeritaDesa/hapus/$1';
$route['admin/my_profile.html']             = 'Admin/Admin/myProfile';
$route['admin/my_profile/edit.html']        = 'Admin/Admin/myProfile/edit';
$route['admin/upload.html']                 = 'Admin/Admin/uploadFoto';

$route['warga.html']                    = 'Warga';
$route['warga/cari.html']               = 'Warga/cari';
$route['warga/data_kematian.html']      = 'Warga/dataKematian';
$route['warga/saran_perubahan.html']    = 'Warga/saranPerubahan';

$route['bantuan/(:any)']    = 'Bantuan/index/$1';
$route['visi_misi.html']    = 'Warga/visiMisi';
$route['berita_desa.html']  = 'Warga/beritaDesa';