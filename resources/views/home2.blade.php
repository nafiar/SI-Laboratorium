<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>i-Laboratory</title>
	<link rel="icon" type="image/png" href="{{asset('img/computer_flat.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrappaper.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/papercustom.min.css')}}">
	<script type="text/javascript" src="{{asset('js/bootstrappaper.min.js')}}"></script>
	<script type="text/javascript" async="" src="{{asset('js/ga.js')}}"></script>
	<!-- Custom layout -->
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
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
			</div>
		</div>	<div class="container">
		<div class="col-md-12 form-reservasi">
			<div class="panel panel-default panel-form">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="/img/mi.png" >
									<img src="/img/mi.png" alt="Lights" style="width:100%">
									<div class="caption">
										<h4>Manajemen Informasi (MI)</h4>
									</div>
								</a>

							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="/img/alpro.png">
									<img src="/img/alpro.png" alt="Nature" style="width:95%">
									<div class="caption">
										<h4>Algoritma dan Pemrograman (ALPRO)</h4>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="/img/LP2.png">
									<img src="/img/LP2.png" alt="Fjords" style="width:85%">
									<div class="caption">
										<h4>Laboratorium Pemrograman 2 (LP 2)</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="/img/mis.png">
									<img src="/img/mis.png" alt="Lights" style="width:93%">
									<div class="caption">
										<h4>Mobile Innovation Studio (MIS)</h4>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="/img/igs.png">
									<img src="/img/igs.png" alt="Nature" style="width:93%">
									<div class="caption">
										<h4>Interaksi Grafika dan Seni (IGS)</h4>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="/img/ajk.png">
									<img src="img/ajk.png" alt="Fjords" style="width:120%">
									<div class="caption">
										<h4>Arsitektur dan Jaringan Komputer (AJK)</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="">
									<img src="/img/LP.png" alt="Lights" style="width:80%">
									<div class="caption">
										<h4>Laboratorium Pemrograman (LP)</h4>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="/img/KCV.png">
									<img src="/img/KCV.png" alt="Nature" style="width:100%">
									<div class="caption">
										<h4>Komputasi Cerdas dan Visi (KCV)</h4>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail">
								<a href="/infolab">
									<img src="/img/ncc.png" alt="Fjords" style="width:85%">
									<div class="caption">
										<h4>Komputasi Berbasis Jaringan (NCC)</h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="thumbnail">
								<a href="/img/rpl.png">
									<img src="/img/rpl.png" alt="Nature" style="width:100%">
									<div class="caption">
										<h4>Rekayasa Perangkat Lunak (RPL)
										</h4>
									</div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<p class="text-center">Made with <img src="{{asset('img/love.png')}}" style="max-height: 16px; max-width: 16px;"> by Laboratory Administrator</p>
	</div></div>
	<script type="text/javascript" src="{{asset('js/custompaper.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
	@yield('moreScript')
</body>
</html>