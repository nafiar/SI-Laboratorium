@extends('layoutuser.main')

@section('title')
Form Reservasi
@endsection

@section('moreStyle')
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
	<div class="col-md-6 col-md-offset-3 form-reservasi">
		<div class="panel panel-default panel-form">
			<div class="panel-body">
				<h3><strong>Detail Reservasi</strong></h3>
				<hr>
				<form>
					<div class="form-group row">
						<div class="col-md-6 waktu-jadwal">
							<label class="control-label" for="focusedInput">Pilih Tanggal</label>
							<input class="form-control waktu-jadwal" id="date" type="text" placeholder="">	
						</div>
						<div class="col-md-6 waktu-jadwal">
							<label class="control-label" for="focusedInput">Pilih Waktu Mulai</label>
							<input class="form-control waktu-jadwal" id="time" type="text" placeholder="">
						</div>
					</div>
					<div class="form-group row col-md-offset-2">
						<div class="col-md-5 ">
							<label class="control-label label-durasi" for="focusedInput">Durasi Jadwal (Menit)</label>
						</div>
						<div class="col-md-3">
							<input class="form-control waktu-jadwal" type="text" td="focusedInput">
						</div>
					</div>
					<hr>
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
						<label class="control-label" for="focusedInput">Keterangan Kegiatan</label>
							<textarea class="form-control" id="textArea" placeholder="Deskripsi"></textarea>
					</div>
					<br>
					<h4><strong>Informasi Peminjam</strong></h4>
					<div class="form-group">
						<input class="form-control" id="focusedInput" type="text" name="nrp" placeholder="NRP">
					</div>
					<div class="form-group">
						<input class="form-control" id="focusedInput" type="text" name="nama" placeholder="Nama">
					</div>
					<div class="form-group">
						<input class="form-control" id="focusedInput" type="text" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input class="form-control" id="focusedInput" type="text" name="no_hp" placeholder="No HP">
					</div>
					<br>
					<div class="form-group">
						<a class="btn btn-danger pull-left" href="/homelab">CANCEL</a>
						<div class="btn btn-primary pull-right" id="cobadeh">
							SUBMIT
						</div>
					</div>
				</form>
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

			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$.material.init()
		});
	$('#cobadeh').on('click', function(){
		swal("Good job!", "You clicked the button!", "success");
		localtion.reload();
	});
</script>
@endsection

