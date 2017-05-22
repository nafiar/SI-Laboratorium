<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content=""> 
    <meta name="author" content=""> 
 
    <title>Reservasi Lab Departemen Informatika ITS</title> 
 
    <!-- Bootstrap Core CSS --> 
    <link href="{{asset('SI-ADMIN/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> 
 
    <!-- MetisMenu CSS --> 
    <link href="SI-ADMIN/vendor/metisMenu/metisMenu.min.css" rel="stylesheet"> 
 
    <!-- Custom CSS --> 
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet"> 
 
    <!-- Custom Fonts --> 
   <!--  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> --> 
 
    <!-- Open Sans --> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
    <!--[if lt IE 9]> 
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> 
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
    <![endif]--> 
 
</head> 
 
<body style="background-color: #87CEEB; font-family: Open Sans"> 
 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-4 col-md-offset-4"> 
                <center><img style="padding-bottom:0" src= "{{asset('SI-ADMIN/img/logoadmin3.png')}}" width="50%"></center> 
            </div> 
            <div class="col-md-4 col-md-offset-4"> 
                <div style="margin-top:0" class="login-panel panel panel-default"> 
                    <div  class="panel-heading"> 
                        <center><h3 class="panel-title">Register</h3></center> 
                    </div> 
                    <div class="panel-body"> 
                        <form role="form"> 
                           <fieldset> 
                                <div class="form-group"> 
                                    <input class="form-control" placeholder="Nama" name="nama" type="nama" autofocus> 
                                </div> 
                                <div class="form-group"> 
                                    <input class="form-control" placeholder="NRP" name="NRP" type="NRP" autofocus> 
                                </div> 
                                <div class="form-group"> 
                                    <select class="form-control"> 
                                        <option>Pilih Laboratorium</option> 
                                        <option value="tabel-rpl">RPL</option> 
                                        <option value="tabel-ncc">NCC</option> 
                                        <option value="tabel-kcv">KCV</option> 
                                        <option value="tabel-lp1">LP</option> 
                                        <option value="tabel-ajk">AJK</option> 
                                        <option value="tabel-igs">IGS</option> 
                                        <option value="tabel-lp2">LP-2</option> 
                                        <option value="tabel-alpro">ALPRO</option> 
                                        <option value="tabel-mi">MI</option> 
                                    </select> 
                                </div> 
                                <div class="form-group"> 
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus> 
                                </div> 
                                <div class="form-group"> 
                                    <input class="form-control" placeholder="No. HP" name="nama" type="nama" autofocus> 
                                </div> 
                                <div class="form-group"> 
                                    <input class="form-control" placeholder="Password" name="password" type="password" value=""> 
                                </div> 
                                <!-- Change this to a button or input when using this as a form --> 
                                <a  style="margin-bottom:3%" href="{{url('/login')}}" class="btn btn-lg btn-primary btn-block">Register</a> 
                                <center><h7>Have an account? <a href="{{url('/login ')}}">Login</a></h7></center> 
                            </fieldset> 
                        </form> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
 
    <!-- jQuery --> 
    <script src="../vendor/jquery/jquery.min.js"></script> 
 
    <!-- Bootstrap Core JavaScript --> 
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> 
 
    <!-- Metis Menu Plugin JavaScript --> 
    <script src="../vendor/metisMenu/metisMenu.min.js"></script> 
 
    <!-- Custom Theme JavaScript --> 
    <script src="../dist/js/sb-admin-2.js"></script> 
 
</body> 
 
</html>