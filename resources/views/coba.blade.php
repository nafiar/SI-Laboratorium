<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrappaper.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/papercustom.min.css')}}">
	<script type="text/javascript" async="" src="{{asset('js/ga.js')}}"></script>
	<!-- Custom layout -->
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
	@yield('moreStyle')
</head>
<body>
<div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="" class="navbar-brand">i-Laboratory</a>
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="navbar-main">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="" target="_blank"><i class="glyphicon glyphicon-calendar"></i> Kalender Lab</a></li>
					<li><a href="" target="_blank"><i class="glyphicon glyphicon-briefcase"></i> Barang Hilang</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div>
		<div class="container">
			<div class="col-md-6 col-md-offset-3 form-reservasi">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3><strong>Detail Reservasi</strong></h3>
						<form>	
							<div class="form-group">
								<label class="control-label" for="focusedInput">Nama Kegiatan</label>
									<input class="form-control" id="focusedInput" type="text" placeholder="contoh. Kelas PAA B 2016">
							</div>
							<div class="form-group">
								<label class="control-label" for="focusedInput">Kategori</label>
									<select class="form-control" id="select">
									<option>Kuliah</option>
									<option>Workshop</option>
									<option>Keperluan Lab</option>
									<option>Praktikum</option>
									<option>Acara Himpunan</option> 									
									</select>
							</div>
							<div class="form-group">
								<label class="control-label" for="focusedInput">Deskripsi</label>
									<input class="form-control" id="focusedInput" type="text" placeholder="This is focused...">
							</div>
							<br>
							<h4><strong>Contact Person</strong></h4>
							<div class="form-group">
								<input class="form-control" id="focusedInput" type="text" name="nrp" placeholder="NRP">
							</div>
							<div class="form-group">
								<input class="form-control" id="focusedInput" type="text" name="nama" placeholder="NAMA">
							</div>
							<div class="form-group">
								<input class="form-control" id="focusedInput" type="text" name="email" placeholder="EMAIL">
							</div>
							<div class="form-group">
								<input class="form-control" id="focusedInput" type="text" name="no_hp" placeholder="NO HP">
							</div>
							<br>
							<div class="form-group">
								<button class="btn btn-danger pull-left">CANCEL</button>
								<button class="btn btn-primary pull-right">SUBMIT</button>
							</div>
						</form>
					</div>
				</div>		
			</div>		
		</div>
	</div>
	<div class="footer">
	    <p class="text-center">Rekayasa Kebutuhan B 2017</p>
	</div>
</div>
<script type="text/javascript" src="{{asset('js/custompaper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrappaper.min.js')}}"></script>
@yield('moreScript')
</body>
</html>