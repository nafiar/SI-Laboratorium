@extends('layoutuser.main')

@section('title')
Form Reservasi
@endsection

@section('moreStyle')
@endsection

@section('content')
	<div class="col-md-6 col-md-offset-3 waktu-home">
		<div class="panel panel-default panel-form">
			<div class="panel-body">
				<form>
					<div class="form-group row">
						<div class="col-md-6 waktu-jadwal">
							<label class="control-label" for="focusedInput">Pilih Tanggal</label>
							<input class="form-control waktu-jadwal" id="focusedInput datepicker" type="text" placeholder="">	
						</div>
						<div class="col-md-6 waktu-jadwal">
							<label class="control-label" for="focusedInput">Pilih Jam</label>
							<input class="form-control waktu-jadwal" id="focusedInput timepicker" type="text" placeholder="">
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
				<div class="btn btn-block btn-link detail-schedule">
					<h6>Praktikum Jarkom</h6>
					<p>19:00 - 21:00</p>
				</div>
			</div>
		</div>		
	</div>
	<div class="col-md-6 col-md-offset-3" style="text-align: center; margin-bottom: 28px;">
		<a href="{{url('/reservasi')}}" class="btn btn-primary">RESERVASI</a>
	</div>		
@endsection

@section('moreScript')
<script type="text/javascript">
	$('#datepicker').onClick(function(){
		console.log("bisa kok");
	});
	$('#timepicker').datepicker({
		datepicker:false,
		format:'H:i'
	});
	$('#datepicker').datepicker({

	});
</script>
@endsection

