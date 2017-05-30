<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reservasi Laboratorium Departemen Informatika ITS</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('SI-ADMIN/vendor/bootstrap/css/bootstrap.min.css')}}"  rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">
    <!-- MetisMenu CSS -->
    <link href="{{asset('SI-ADMIN/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('SI-ADMIN/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('SI-ADMIN/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>


    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
</head>

<body style="font-family: Open Sans">

    <div id="wrapper">

        <!-- Navigation -->
        <nav style="background-color: #87CEEB;" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div  class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a style="color: white" class="navbar-brand" href="{{url('/index')}}">i - Laboratory</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('/login')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{url('/index')}}"><i class="fa fa-table fa-fw"></i> Reservasi Lab</a>
                        </li>
                       
                        <li>
                            <a href="{{url('/pinjam-barang')}}"><i class="fa fa-table fa-fw"></i> Peminjaman Barang</a>
                        </li>
                        <li>
                            <a href="{{url('/barang-hilang')}}"><i class="fa fa-edit fa-fw"></i> Barang Hilang</a>
                        </li>
                       
                        
                                                
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reservasi Lab</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cetak Laporan Peminjaman Bulan ini
                        </div>
                        <div class="panel-body">
                            Untuk mendapatkan laporan peminjaman lab pada bulan ini silahkan klik tombol di bawah
                            <div class="center" style="text-align: center; margin-top: 10px;">
                                <a class="btn btn-primary" href="/cetaklaporan">Download Laporan</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- RPL -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Rekayasa Perangkat Lunak (RPL)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Mulai</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5114100085</td>
                                            <td>Aviananda</td>
                                            <td>081212801054</td>
                                            <td>10-05-2017</td>
                                            <td>15.00 - 17.00</td>
                                            <td>Praktikum Jarkom</td>
                                            <td>Praktikum</td>
                                            <td>Praktikum Jarkom Modul 4</td>
                                            <td><button id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" class="btn btn-xs btn-danger">Tolak</button></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5114100130</td>
                                            <td>Nadia</td>
                                            <td>081212801053</td>
                                            <td>10-05-2017</td>
                                            <td>17.00 - 18.00</td>
                                            <td>WP Panitia</td>
                                            <td>Acara Himpunan</td>
                                            <td>WP Panitia Danus</td>
                                            <td><button id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" class="btn btn-xs btn-danger">Tolak</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

                <!-- NCC -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Net-Centric Computing (NCC)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Mulai</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5114100085</td>
                                            <td>Aviananda</td>
                                            <td>081212801054</td>
                                            <td>10-05-2017</td>
                                            <td>15.00 - 17.00</td>
                                            <td>Praktikum Jarkom</td>
                                            <td>Praktikum</td>
                                            <td>Praktikum Jarkom Modul 4</td>
                                            <td><button id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak"  class="btn btn-xs btn-danger">Tolak</button></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5114100130</td>
                                            <td>Nadia</td>
                                            <td>081212801053</td>
                                            <td>10-05-2017</td>
                                            <td>17.00 - 18.00</td>
                                            <td>WP Panitia</td>
                                            <td>Acara Himpunan</td>
                                            <td>WP Panitia Danus</td>
                                            <td><button id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" class="btn btn-xs btn-danger">Tolak</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </dipv>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <!-- KCV -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Komputasi Cerdas dan Visi (KCV)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5114100085</td>
                                            <td>Aviananda</td>
                                            <td>081212801054</td>
                                            <td>10-05-2017</td>
                                            <td>15.00 - 17.00</td>
                                            <td>Praktikum Jarkom</td>
                                            <td>Praktikum</td>
                                            <td>Praktikum Jarkom Modul 4</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5114100130</td>
                                            <td>Nadia</td>
                                            <td>081212801053</td>
                                            <td>10-05-2017</td>
                                            <td>17.00 - 18.00</td>
                                            <td>WP Panitia</td>
                                            <td>Acara Himpunan</td>
                                            <td>WP Panitia Danus</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <!-- LP1 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Laboratorium Pemrograman (LP)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Mulai</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5114100085</td>
                                            <td>Aviananda</td>
                                            <td>081212801054</td>
                                            <td>10-05-2017</td>
                                            <td>15.00 - 17.00</td>
                                            <td>Praktikum Jarkom</td>
                                            <td>Praktikum</td>
                                            <td>Praktikum Jarkom Modul 4</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5114100130</td>
                                            <td>Nadia</td>
                                            <td>081212801053</td>
                                            <td>10-05-2017</td>
                                            <td>17.00 - 18.00</td>
                                            <td>WP Panitia</td>
                                            <td>Acara Himpunan</td>
                                            <td>WP Panitia Danus</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Arsitektur Jaringan dan Komputer (AJK)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Mulai</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5114100085</td>
                                            <td>Aviananda</td>
                                            <td>081212801054</td>
                                            <td>10-05-2017</td>
                                            <td>15.00 - 17.00</td>
                                            <td>Praktikum Jarkom</td>
                                            <td>Praktikum</td>
                                            <td>Praktikum Jarkom Modul 4</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5114100130</td>
                                            <td>Nadia</td>
                                            <td>081212801053</td>
                                            <td>10-05-2017</td>
                                            <td>17.00 - 18.00</td>
                                            <td>WP Panitia</td>
                                            <td>Acara Himpunan</td>
                                            <td>WP Panitia Danus</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <!-- IGS -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Interaksi Grafika dan Seni (IGS)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Mulai</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5114100085</td>
                                            <td>Aviananda</td>
                                            <td>081212801054</td>
                                            <td>10-05-2017</td>
                                            <td>15.00 - 17.00</td>
                                            <td>Praktikum Jarkom</td>
                                            <td>Praktikum</td>
                                            <td>Praktikum Jarkom Modul 4</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5114100130</td>
                                            <td>Nadia</td>
                                            <td>081212801053</td>
                                            <td>10-05-2017</td>
                                            <td>17.00 - 18.00</td>
                                            <td>WP Panitia</td>
                                            <td>Acara Himpunan</td>
                                            <td>WP Panitia Danus</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <!-- LP2 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Laboratorium Pemrograman 2 (LP-2)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Mulai</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5114100085</td>
                                            <td>Aviananda</td>
                                            <td>081212801054</td>
                                            <td>10-05-2017</td>
                                            <td>15.00 - 17.00</td>
                                            <td>Praktikum Jarkom</td>
                                            <td>Praktikum</td>
                                            <td>Praktikum Jarkom Modul 4</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5114100130</td>
                                            <td>Nadia</td>
                                            <td>081212801053</td>
                                            <td>10-05-2017</td>
                                            <td>17.00 - 18.00</td>
                                            <td>WP Panitia</td>
                                            <td>Acara Himpunan</td>
                                            <td>WP Panitia Danus</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <!-- ALPRO -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Algoritma dan Pemrograman (ALPRO)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Mulai</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5114100085</td>
                                            <td>Aviananda</td>
                                            <td>081212801054</td>
                                            <td>10-05-2017</td>
                                            <td>15.00 - 17.00</td>
                                            <td>Praktikum Jarkom</td>
                                            <td>Praktikum</td>
                                            <td>Praktikum Jarkom Modul 4</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5114100130</td>
                                            <td>Nadia</td>
                                            <td>081212801053</td>
                                            <td>10-05-2017</td>
                                            <td>17.00 - 18.00</td>
                                            <td>WP Panitia</td>
                                            <td>Acara Himpunan</td>
                                            <td>WP Panitia Danus</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <!-- MI -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manajemen Informasi (MI)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Mulai</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>5114100085</td>
                                            <td>Aviananda</td>
                                            <td>081212801054</td>
                                            <td>10-05-2017</td>
                                            <td>15.00 - 17.00</td>
                                            <td>Praktikum Jarkom</td>
                                            <td>Praktikum</td>
                                            <td>Praktikum Jarkom Modul 4</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>5114100130</td>
                                            <td>Nadia</td>
                                            <td>081212801053</td>
                                            <td>10-05-2017</td>
                                            <td>17.00 - 18.00</td>
                                            <td>WP Panitia</td>
                                            <td>Acara Himpunan</td>
                                            <td>WP Panitia Danus</td>
                                            <td><button type="submit" id="terima" class="btn btn-xs btn-success">Terima</button><br><button id="tolak" type="submit" class="btn btn-xs btn-danger">Tolak</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('SI-ADMIN/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('SI-ADMIN/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('SI-ADMIN/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('SI-ADMIN/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('SI-ADMIN/vendor/morrisjs/morris.min.js')}}"></script>
    <script src="{{asset('SI-ADMIN/data/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('SI-ADMIN/dist/js/sb-admin-2.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
    $('.btn-danger').on('click', function(){
        swal({
  title: "Apakah Anda Yakin?",
  text: "Anda akan menolak permohonan reservasi",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Ya, tolak",
  closeOnConfirm: false
},
function(){
  swal("Berhasil!", "Anda berhasil menolak permohonan reservasi.", "success");
});
    });
    $('.btn-success').on('click', function(){
        swal({
  title: "Apakah Anda Yakin?",
  text: "Anda akan menerima permohonan reservasi",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Ya, terima",
  closeOnConfirm: false
},
function(){
  swal("Berhasil!", "Anda berhasil menerima permohonan reservasi.", "success");
});
    });



    </script>

</body>

</html>
