<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="<?= base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/themify-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/selectFX/css/cs-skin-elastic.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/magnific-popup.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  
  <script src="<?= base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url(); ?>vendors/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?= base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/main.js"></script>
  <script src="<?= base_url(); ?>vendors/chart.js/dist/Chart.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/dashboard.js"></script>
  <script src="<?= base_url(); ?>assets/js/widgets.js"></script>
  <script src="<?= base_url(); ?>vendors/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?= base_url(); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <script src="<?= base_url(); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
  <script src="<?= base_url(); ?>vendors/jszip/dist/jszip.min.js"></script>
  <script src="<?= base_url(); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?= base_url(); ?>vendors/pdfmake/build/vfs_fonts.js"></script>
  <script src="<?= base_url(); ?>assets/jquery.magnific-popup.js"></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    ClassicEditor.create( document.querySelector( '#editor' ) );
    $(document).ready(function() {
      $('.table').DataTable();
      $('.js-example-basic-single').select2();
    });
  </script>

</head>

<body>
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><strong>LEMBANG PERINDINGAN</strong></a>
        <a class="navbar-brand hidden" href="./">
        </a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="<?= base_url(); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>admin/warga.html"> <i class="menu-icon fa fa-laptop"></i>Warga</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>admin/data_kematian.html"> <i class="menu-icon fa fa-laptop"></i>Data Kematian</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>admin/saran_perubahan.html"> <i class="menu-icon fa fa-laptop"></i>Saran Perubahan</a>
          </li>
          <h3 class="menu-title">Data Bantuan</h3>
          <li>
            <a href="<?= base_url(); ?>admin/bantuan/pkh"> <i class="menu-icon fa fa-laptop"></i>Data PKH</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>admin/bantuan/blt"> <i class="menu-icon fa fa-laptop"></i>Data BLT</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>admin/bantuan/bst"> <i class="menu-icon fa fa-laptop"></i>Data BST</a>
          </li>
          <h3 class="menu-title">Informasi Desa</h3>
          <li>
            <a href="<?= base_url(); ?>admin/visi_misi.html"> <i class="menu-icon fa fa-laptop"></i> Visi Misi</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>admin/berita_desa.html"> <i class="menu-icon fa fa-laptop"></i> Berita Desa</a>
          </li>
          <h3 class="menu-title"></h3>
          <li>
            <a href="<?= base_url(); ?>logout"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
          </li>
        </ul>
      </div>
    </nav>
  </aside>

  <!-- Left Panel -->

  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

      <div class="header-menu">

        <div class="col-sm-7">
          <!-- <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
          <div class="header-left">
          </div> -->
        </div>

        <div class="col-sm-5">
          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle" src="<?= base_url('assets/' . $this->session->foto); ?>" alt="User Avatar">
            </a>

            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="<?= base_url(); ?>admin/my_profile.html"><i class="fa fa-user"></i> My Profile</a>

              <a class="nav-link" href="<?= base_url(); ?>admin/setting.html"><i class="fa fa-cog"></i> Settings</a>

              <a class="nav-link" href="<?= base_url(); ?>logout"><i class="fa fa-power-off"></i> Logout</a>
            </div>
          </div>

        </div>
      </div>

    </header>

    <div class="content mt-3">
      <?php $this->load->view($konten); ?>
    </div> <!-- .content -->
  </div><!-- /#right-panel -->

  <!-- Right Panel -->



</body>

</html>
