@extends('layoutuser.main')

@section('moreStyles')
@endsection

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary form-reservasi">
				<div class="panel-heading">
					<h3>Detail Reservasi</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
						<fieldset>
							<div class="form-group">
								<label class="control-label" for="focusedInput">Nama Kegiatan</label>
 								<input class="form-control" id="focusedInput" type="text" value="contoh. Kelas PAA B 2016">
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
								<label class="control-label" for="focusedInput">Nama Kegiatan</label>
 								<input class="form-control" id="focusedInput" type="text" value="This is focused...">
							</div>
						</fieldset>					
					</form>
				</div>
			</div>		
		</div>		
	</div>   
@endsection

@section('moreScripts')
@endsection

