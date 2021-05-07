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
$route['admin/saran_perubahan_data/(:any)'] = 'Admin/Admin/saranPerubahanData/$1';
$route['admin/bantuan/(:any)']              = 'Admin/Bantuan/index/$1';
$route['admin/tambah_bantuan.html']         = 'Admin/Bantuan/tambah';
$route['admin/hapus_bantuan/(:any)']        = 'Admin/Bantuan/hapus/$1';
$route['admin/visi_misi.html']              = 'Admin/Admin/visiMisi';
$route['admin/visi_misi/edit.html']         = 'Admin/Admin/editVisiMisi';

$route['warga.html']                    = 'Warga';
$route['warga/saran_perubahan/(:any)']  = 'Warga/saranPerubahan/$1';

$route['bantuan/(:any)']  = 'Bantuan/index/$1';

$route['visi_misi.html']  = 'Warga/visiMisi';