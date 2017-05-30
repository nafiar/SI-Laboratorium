@extends('layoutuser.main')

@section('title')
Fasilitas Lab
@endsection

@section('moreStyle')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- 	 -->
<!-- <link rel="stylesheet" href="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/css/material.min.css" /> -->
<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-material-datetimepicker.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-material-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>

@endsection

@section('content')
<div class="container">
	<h1>Fasilitas</h1>
	<div class="col-md-12 form-reservasi">
		<div class="panel panel-default panel-form">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<div class="thumbnail">
							<a href="">
								<img class="img-responsive" src="/img/pc.png" style="width:100%" >
							</a>
							<div class="caption">
								<h2 class="text-center">Personal Computer</h2><br>
								<h5>Jumlah : 10 buah</h5>
								<h5>Keterangan : Processor intel i3, VGA CARD 2Gb 64Bit, Hardisk Seagate 500Gb, LCD	Viewsonic 20 Inch, Keyboard LOGITECH, Wireless Mouse</h5>
								<button type="button" id="pinjam" class="btn btn-primary btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal1">Pinjam</button>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modal1" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content -->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Personal Computer</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label  class="col-sm-2 control-label" >Nama</label>
													<div class="col-sm-10">
														<input type="email" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >NRP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >No HP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Email</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Lama Peminjaman</label>
													<div class="col-sm-5">
														<input id="date" class="form-control" placeholder="Mulai"/>
													</div>
													<div class="col-sm-5">
														<input id="date2" class="form-control" placeholder="Selesai"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Keperluan</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" placeholder="Alasan meminjam"/>
													</div>
												</div>
												</form>
											<button type="button" class="btn btn-default" data-dismiss="modal">Pinjam</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
							<a href="">
								<img class="img-responsive" src="/img/lcd.png" style="width:92%" >
							</a>
							<div class="caption">
								<h2 class="text-center">LCD</h2><br>
								<h5>Jumlah : 3 buah</h5>
								<h5>Keterangan : resolusi 1280×1024, viewable size 15 inch, merk samsung</h5>
								<button type="button" class="btn btn-primary btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal2">Pinjam</button>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modal2" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">LCD</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label  class="col-sm-2 control-label" >Nama</label>
													<div class="col-sm-10">
														<input type="email" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >NRP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >No HP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Email</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Lama Peminjaman</label>
													<div class="col-sm-5">
														<input id="date" class="form-control" placeholder="Mulai"/>
													</div>
													<div class="col-sm-5">
														<input id="date2" class="form-control" placeholder="Selesai"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Keperluan</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" placeholder="Alasan meminjam"/>
													</div>
												</div>
												</form>
											<button type="button" class="btn btn-default" data-dismiss="modal">Pinjam</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
							<a href="">
								<img class="img-responsive" src="/img/eeg.jpg" style="width:70%" >
							</a>
							<div class="caption">
								<h2 class="text-center">EEG</h2><br>
								<h5>Jumlah : 3 buah</h5>
								<h5>Keterangan : untuk merekam aktivitas elektrik dari otak, yang direpresentasikan dalam bentuk garis gelombang.</h5>
								<button type="button" class="btn btn-primary btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal3">Pinjam</button>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modal3" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">EEG</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label  class="col-sm-2 control-label" >Nama</label>
													<div class="col-sm-10">
														<input type="email" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >NRP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >No HP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Email</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Lama Peminjaman</label>
													<div class="col-sm-5">
														<input id="date" class="form-control" placeholder="Mulai"/>
													</div>
													<div class="col-sm-5">
														<input id="date2" class="form-control" placeholder="Selesai"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Keperluan</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" placeholder="Alasan meminjam"/>
													</div>
												</div>
												</form>
											<button type="button" class="btn btn-default" data-dismiss="modal">Pinjam</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="thumbnail">
							<a href="">
								<img class="img-responsive" src="/img/vr.png" style="width:45%" >
							</a>
							<div class="caption">
								<h2 class="text-center">Virtual Reality</h2><br>
								<h5>Jumlah : 2 buah</h5>
								<h5>Keterangan : Processor intel i3, VGA CARD 2Gb 64Bit, Hardisk Seagate 500Gb, LCD	Viewsonic 20 Inch, Keyboard LOGITECH, Wireless Mouse</h5>
								<button type="button" class="btn btn-primary btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal4">Pinjam</button>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modal4" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Virtual Reality</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label  class="col-sm-2 control-label" >Nama</label>
													<div class="col-sm-10">
														<input type="email" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >NRP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >No HP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Email</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Lama Peminjaman</label>
													<div class="col-sm-5">
														<input id="date" class="form-control" placeholder="Mulai"/>
													</div>
													<div class="col-sm-5">
														<input id="date2" class="form-control" placeholder="Selesai"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Keperluan</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" placeholder="Alasan meminjam"/>
													</div>
												</div>
												</form>
											<button type="button" class="btn btn-default" data-dismiss="modal">Pinjam</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
							<a href="">
								<img class="img-responsive" src="/img/kinect.png" style="width:195%" >
							</a>
							<div class="caption">
								<h2 class="text-center">Kinect</h2><br>
								<h5>Jumlah : 3 buah</h5>
								<h5>Keterangan : area penggunaan 1.2-35 m (3.9-11 kaki), lebar pandangan angular 57 derajat horizontal dan 43 derajat vertikal,  kedalaman suara 16-bit pada kecepatan cuplik 16 kHz</h5>
								<button type="button" class="btn btn-primary btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal5">Pinjam</button>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modal5" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Kinect</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label  class="col-sm-2 control-label" >Nama</label>
													<div class="col-sm-10">
														<input type="email" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >NRP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >No HP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Email</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Lama Peminjaman</label>
													<div class="col-sm-5">
														<input id="date" class="form-control" placeholder="Mulai"/>
													</div>
													<div class="col-sm-5">
														<input id="date2" class="form-control" placeholder="Selesai"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Keperluan</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" placeholder="Alasan meminjam"/>
													</div>
												</div>
												</form>
											<button type="button" class="btn btn-default" data-dismiss="modal">Pinjam</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
							<a href="">
								<img class="img-responsive" src="/img/proyektor.png" style="width:70%" >
							</a>
							<div class="caption">
								<h2 class="text-center">Proyektor</h2><br>
								<h5>Jumlah : 2 buah</h5>
								<h5>Keterangan : untuk merekam aktivitas elektrik dari otak, yang direpresentasikan dalam bentuk garis gelombang.</h5>
								<button type="button" class="btn btn-primary btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal6">Pinjam</button>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modal6" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Proyektor</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label  class="col-sm-2 control-label" >Nama</label>
													<div class="col-sm-10">
														<input type="email" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >NRP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >No HP</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Email</label>
													<div class="col-sm-10">
														<input type="password" class="form-control"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Lama Peminjaman</label>
													<div class="col-sm-5">
														<input id="date" class="form-control" placeholder="Mulai"/>
													</div>
													<div class="col-sm-5">
														<input id="date2" class="form-control" placeholder="Selesai"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" >Keperluan</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" placeholder="Alasan meminjam"/>
													</div>
												</div>
												</form>
											<button id="pinjam" type="submit" class="btn btn-default" data-dismiss="modal" >Pinjam</button>		
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('moreScript')
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#date').bootstrapMaterialDatePicker
		({
			time: false,
			clearButton: true
		});
		$('#date2').bootstrapMaterialDatePicker
		({
			time: false,
			clearButton: true
		});

		$('#time').bootstrapMaterialDatePicker
		({
			date: false,
			shortTime: false,
			format: 'HH:mm'
		});

		$.material.init()
	});
    $('.btn-default').on('click', function(){
	  swal("Berhasil!", "Peminjaman fasilitas akan diproses", "success");
	  /*swal({
		  title: "Apakah Anda Yakin?",
		  text: "Meminjam fasilitas ini?",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "Ya, yakin",
		  closeOnConfirm: false
		},
		function(){
		  
		});*/
    });
</script>
@endsection

