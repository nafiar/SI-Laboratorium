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

    <!-- MetisMenu CSS -->
    <link href="{{asset('SI-ADMIN/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('SI-ADMIN/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('SI-ADMIN/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

                <a style="color: white" class="navbar-brand" href="index.html">i - Laboratory</a>
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
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                    <button style="float:right; margin-top:4%" type="submit" class="btn btn-info" data-toggle="modal" data-target="#myModal">Tambah Barang</button>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><b>Form Penemuan Barang Hilang</b> </h4>
                                        </div>
                                        
                                            <div style="margin-top:2%" class="col-lg-12">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label>Nama Barang</label>
                                                        <input class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal Ditemukan</label>
                                                        <input class="form-control" placeholder="mm/dd/yyyy">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload Foto Barang</label>
                                                        <input type="file">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Keterangan</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button data-dismiss="modal" type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                    <h1 class="page-header">Barang Hilang</h1>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">

                
                <div class="col-lg-12">
                
                    <div  class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Barang Hilang
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Ditemukan</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><div class="col-lg-8"> <center><img src="{{asset('SI-ADMIN/img/chargerhp.jpg')}}" style="width:100%"></center></div></td>
                                            <td>Charger HP</td>
                                            <td>10-05-2017</td>
                                            <td>Charger HP merk lenovo warna hitam</td>
                                            <td><center><button type="submit" class="btn btn-primary">Claim</button></center></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><div class="col-lg-8"><center><img src="{{asset('SI-ADMIN/img/chargerlaptop.jpg')}}" style="width:100%"></center></div></td>
                                            <td>Charger Laptop</td>
                                            <td>15-05-2017</td>
                                            <td>Charger Laptop merk ASUS warna hitam</td>
                                            <td><center><button type="submit" class="btn btn-primary disabled">Claimed</button></center></td>
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
            </div>
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
    </script>

</body>

</html>
