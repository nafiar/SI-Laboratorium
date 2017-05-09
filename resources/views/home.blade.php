@extends('layoutuser.main')

@section('title')
@endsection

@section('moreStyle')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css">
@endsection

@section('content')
<div class="col-md-12 form-reservasi">
	<div class="panel panel-default panel-form">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/lights.jpg">
							<img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
							<div class="caption">
								<h4>Manajemen Informasi (MI)</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/nature.jpg">
							<img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
							<div class="caption">
								<h4>Algoritma dan Pemrograman (ALPRO)</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/fjords.jpg">
							<img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
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
						<a href="/w3images/lights.jpg">
							<img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
							<div class="caption">
								<h4>MIS</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/nature.jpg">
							<img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
							<div class="caption">
								<h4>Interaksi Grafika dan Seni (IGS)</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/fjords.jpg">
							<img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
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
						<a href="/w3images/lights.jpg">
							<img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
							<div class="caption">
								<h4>Laboratorium Pemrograman (LP)</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/nature.jpg">
							<img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
							<div class="caption">
								<h4>Komputasi Cerdas dan Visi (KCV)</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/fjords.jpg">
							<img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
							<div class="caption">
								<h4>NCC</h4>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="thumbnail">
						<a href="/w3images/nature.jpg">
							<img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
							<div class="caption">
								<h4>Rekayasa Perangkat Lunak (RPL)@extends('layoutuser.main')

@section('title')
Form Reservasi
@endsection

@section('moreStyle')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css">
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
							<input class="form-control waktu-jadwal" id="focusedInput datepicker" type="text" placeholder="">	
						</div>
						<div class="col-md-6 waktu-jadwal">
							<label class="control-label" for="focusedInput">Pilih Waktu Mulai</label>
							<input class="form-control waktu-jadwal" id="focusedInput timepicker" type="text" placeholder="">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<input class="form-control" type="text" td="focusedInput">
						</div>
						<div class="col-md-3 ">
							<label class="control-label label-durasi" for="focusedInput">Durasi Jadwal</label>
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
						<input class="form-control" id="focusedInput" type="text" name="nama" placeholder="NAMA">
					</div>
					<div class="form-group">
						<input1 class="form-control" id="focusedInput" type="text" name="email" placeholder="EMAIL">
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
@endsection

@section('moreScript')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.js"></script>
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

</h4>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('moreScript')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.js"></script>
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

