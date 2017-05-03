@extends('layoutuser.main')

@section('moreStyles')
@endsection

@section('content')
	<div class="">
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
@endsection

@section('moreScripts')
@endsection

