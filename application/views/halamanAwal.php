<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

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
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">


  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


  <!-- Left Panel -->

  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./">
          <!-- <img src="images/logo.png" alt="Logo"> -->
        </a>
        <a class="navbar-brand hidden" href="./">
          <!-- <img src="images/logo2.png" alt="Logo"> -->
        </a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="<?= base_url(); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>
          <li>
            <a href="<?= base_url(); ?>warga.html"> <i class="menu-icon fa fa-laptop"></i>Warga</a>
          </li>
          <h3 class="menu-title">Data Bantuan</h3>
          <li>
            <a href="<?= base_url(); ?>bantuan/pkh"> <i class="menu-icon fa fa-laptop"></i>Data PKH</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>bantuan/blt"> <i class="menu-icon fa fa-laptop"></i>Data BLT</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>bantuan/bst"> <i class="menu-icon fa fa-laptop"></i>Data BST</a>
          </li>
          <h3 class="menu-title">Informasi Desa</h3>
          <li>
            <a href="<?= base_url(); ?>visi_misi.html"> <i class="menu-icon fa fa-laptop"></i> Visi Misi</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>berita_desa.html"> <i class="menu-icon fa fa-laptop"></i> Berita Desa</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </aside><!-- /#left-panel -->

  <!-- Left Panel -->

  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
      <?php $this->load->view($konten); ?>
    </div> <!-- .content -->
  </div><!-- /#right-panel -->

  <!-- Right Panel -->

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
  <script src="<?= base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url(); ?>vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/init-scripts/data-table/datatables-init.js"></script>
  <script src="<?= base_url(); ?>vendors/jszip/dist/jszip.min.js"></script>
  <script src="<?= base_url(); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?= base_url(); ?>vendors/pdfmake/build/vfs_fonts.js"></script>
  <script>
      (function($) {
          "use strict";

          jQuery('#vmap').vectorMap({
              map: 'world_en',
              backgroundColor: null,
              color: '#ffffff',
              hoverOpacity: 0.7,
              selectedColor: '#1de9b6',
              enableZoom: true,
              showTooltip: true,
              values: sample_data,
              scaleColors: ['#1de9b6', '#03a9f5'],
              normalizeFunction: 'polynomial'
          });
      })(jQuery);

    function logout() {
      firebase.auth().signOut().then(() => {
        window.location.href = "<?= base_url(); ?>";
      }).catch((error) => {
        // An error happened.
      });
    }
  </script>

</body>

</html>
