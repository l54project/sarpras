<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/backend_assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url() ?>assets/backend_assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/backend_assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
      
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">
                  <strong>SARPRAS SMK KESUMA</strong>
                </span>
                <a class="navbar-brand" href="#"> Selamat Datang, <?php echo $userdata['name'] ?></a>
            </div>
            <!-- /.navbar-header -->

            <!-- <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-alerts -->
                <!-- </li>
            </ul> -->
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                          <a href="<?php echo base_url() ?>"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <!-- DATA PETUGAS -->
                        <li>
                          <a href="#"><i class="fa fa-user fa-fw"></i> Data Petugas<span class="fa arrow"></span></a></a>
                            <ul class="nav nav-second-level">
                              <li>
                                <a href="<?php echo base_url('admin_system/petugas') ?>"><i class="fa fa-eye fa-fw"></i> Lihat Data Petugas</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url('admin_system/petugas_form')?>"><i class="fa fa-plus fa-fw"></i> Form Data Petugas</a>
                              </li>
                            </ul>
                        </li>
                        <!-- END DATA PETUGAS -->

                        <li>
                          <a href="#"><i class="fa fa-users fa-fw"></i> Data Peminjam<span class="fa arrow"></span></a></a>
                            <ul class="nav nav-second-level">
                              <li>
                                <a href="<?php echo base_url('admin_system/peminjam') ?>"><i class="fa fa-eye fa-fw"></i> Lihat Data Peminjam</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url('admin_system/peminjam_form') ?>"><i class="fa fa-plus fa-fw"></i> Form Data Peminjam</a>
                              </li>
                            </ul>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-archive fa-fw"></i> Data Barang<span class="fa arrow"></span></a></a>
                            <ul class="nav nav-second-level">
                              <li>
                                <a href="<?php echo base_url('admin_system/barang') ?>"><i class="fa fa-eye fa-fw"></i> Lihat Data Barang</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url('admin_system/barang_form') ?>"><i class="fa fa-plus fa-fw"></i> Form Data Barang</a>
                              </li>
                            </ul>
                        </li>
                        <li>
                          <a href="<?php echo base_url('admin_system/pinjam') ?>"><i class="fa fa-check-square fa-fw"></i> Permintaan Peminjaman</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url('admin_system/kembali') ?>"><i class="fa fa-undo fa-fw"></i> Permintaan Pengembalian</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url('admin_system/riwayat') ?>"><i class="fa fa-history fa-fw"></i> Riwayat Peminjaman</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-flag fa-fw"></i> Generate Laporan<span class="fa arrow"></span></a></a>
                            <ul class="nav nav-second-level">
                              <li>
                                <a href="<?php echo base_url('admin_system/laporan_pinjam') ?>"><i class="fa fa-flag-checkered fa-fw"></i> Barang Yang Sedang Dipinjam</a>
                              </li>
                              <!-- <li>
                                <a href="<?php echo base_url('admin_system/form_laporan_bulanan') ?>"><i class="fa fa-flag-checkered fa-fw"></i> Laporan Bulanan</a>
                              </li> -->
                            </ul>
                        </li>
                        <li>
                          <a href="<?php echo base_url('admin/do_logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php echo $content ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend_assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Validation Plugin -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery-validation/jquery.validate.js"></script>

    <!-- WARNING: DATA TABLES SCRIPT -->
    <script>
      $(document).ready(function() {
        $('#dataTables-example').DataTable({
          responsive: true
        });
      });
    </script>

        <!-- WARNING VALIDATE SCRIPT  -->
        <script type="text/javascript">
      var jvalidate = $("#petugas_form").validate({
        ignore: [],
        rules: {
          username: {
            required: true
          },
          password: {
            required: true
          },
          name: {
            required: true
          },
          email: {
            required: true
          },
          telepon: {
            required: true
          },
        },
        submitHandler: function(form) {
          var target = $(form).attr('action');
          $('#petugas_form .alert-warning').removeClass('hidden');
          $('#petugas_form .alert-success').addClass('hidden');
          $('#petugas_form .alert-danger').addClass('hidden');
          $.ajax({
            url : target,
            type : 'POST',
            dataType : 'json',
            data : $(form).serialize(),
            success : function(response){
              $('#petugas_form .alert-warning').addClass('hidden');
              if(response.status == 'ok'){
                $('#petugas_form .alert-success').removeClass('hidden').children('span').text(response.msg);
                window.location.href = response.redirect;
              }
              else
                $('#petugas_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
            },
            error : function(jqXHR, textStatus, errorThrown) {
              alert(textStatus, errorThrown);
            }
          });
        }
      });
    </script>

    <!-- WARNING VALIDATE SCRIPT  -->
    <script type="text/javascript">
      var jvalidate = $("#peminjam_form").validate({
        ignore: [],
        rules: {
          username: {
            required: true
          },
          password: {
            required: true
          },
          name: {
            required: true
          },
          email: {
            required: true
          },
          telepon: {
            required: true
          },
        },
        submitHandler: function(form) {
          var target = $(form).attr('action');
          $('#peminjam_form .alert-warning').removeClass('hidden');
          $('#peminjam_form .alert-success').addClass('hidden');
          $('#peminjam_form .alert-danger').addClass('hidden');
          $.ajax({
            url : target,
            type : 'POST',
            dataType : 'json',
            data : $(form).serialize(),
            success : function(response){
              $('#peminjam_form .alert-warning').addClass('hidden');
              if(response.status == 'ok'){
                $('#peminjam_form .alert-success').removeClass('hidden').children('span').text(response.msg);
                window.location.href = response.redirect;
              }
              else
                $('#peminjam_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
            },
            error : function(jqXHR, textStatus, errorThrown) {
              alert(textStatus, errorThrown);
            }
          });
        }
      });
    </script>

    <!-- WARNING VALIDATE SCRIPT  -->
    <script type="text/javascript">
      var jvalidate = $("#barang_form").validate({
        ignore: [],
        rules: {
          name: {
            required: true
          },
          desc: {
            required: true
          },
          stock: {
            required: true
          },
          status: {
            required: true
          },
        },
        submitHandler: function(form) {
          var target = $(form).attr('action');
          $('#barang_form .alert-warning').removeClass('hidden');
          $('#barang_form .alert-success').addClass('hidden');
          $('#barang_form .alert-danger').addClass('hidden');
          $.ajax({
            url : target,
            type : 'POST',
            dataType : 'json',
            data : $(form).serialize(),
            success : function(response){
              $('#barang_form .alert-warning').addClass('hidden');
              if(response.status == 'ok'){
                $('#barang_form .alert-success').removeClass('hidden').children('span').text(response.msg);
                window.location.href = response.redirect;
              }
              else
                $('#barang_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
            },
            error : function(jqXHR, textStatus, errorThrown) {
              alert(textStatus, errorThrown);
            }
          });
        }
      });
    </script>

</body>

</html>
