@extends('layoutuser.main')

@section('title')
Home Lab
@endsection

@section('moreStyle')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- 	 -->
<!-- <link rel="stylesheet" href="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/css/material.min.css" /> -->
<link rel="stylesheet" href="{{asset('css/bootstrap-material-datetimepicker.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script> -->
<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-material-datetimepicker.js')}}"></script>

@endsection

@section('content')
	<div class="col-md-6 col-md-offset-3 waktu-home">
		<div class="panel panel-default panel-form">
			<div class="panel-body">
				<form>
					<div class="form-group row">
						<div class="col-md-6 waktu-jadwal">
							<label class="control-label" for="focusedInput">Pilih Tanggal</label>
							<input class="form-control waktu-jadwal" id="date" type="text" placeholder="">	
						</div>
						<div class="col-md-6 waktu-jadwal">
							<label class="control-label" for="focusedInput">Pilih Jam</label>
							<input class="form-control waktu-jadwal" id="time" type="text" placeholder="">
						</div>
					</div>
				</form>
			</div>
		</div>		
	</div>
	<div class="col-md-6 col-md-offset-3 schedule-hari">
		<div class="panel panel-default schedule">
			<h4><strong>Sabtu, 6 May 2017</strong></h4>
			<br>
			<div class="panel-body">
				<div class="btn btn-block btn-link detail-schedule" data-toggle="modal" data-target="#myModal">
					<h6>Praktikum Jarkom</h6>
					<p>19:00 - 21:00</p>
				</div>
			</div>
		</div>		
	</div>
	<div class="col-md-6 col-md-offset-3" style="text-align: center; margin-bottom: 28px;">
		<a href="{{url('/reservasi')}}" class="btn btn-primary">RESERVASI</a>
	</div>
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">PRAKTIKUM JARKOM | 19:00 - 21:00</h3>
					<hr>
				</div>
				<div class="modal-body">
					<p>Kategori : Kuliah</p>
					<p>Deskripsi : Praktkum</p>
					<p>Dipinjam oleh : Aviananda D J</p>
				</div>
				<div class="modal-footer">
					<hr>
					<button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
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

			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

		});
</script>
@endsection

