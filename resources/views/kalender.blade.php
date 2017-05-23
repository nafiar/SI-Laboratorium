@extends('layoutuser.main')

@section('title')
Kalender Laboratorium Pemrograman
@endsection

@section('moreStyle')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('content')
	<div class="kalender">
		<div class="bulan-kalender">
			<div class="" style="display: inline-block;">
				<h2><strong>May 2017</strong></h2>
			</div>
			<dir style="float: right;display: inline-block;  height: 95.5px; padding-top: 15px; margin-bottom: -10px;">
				<div class="pull-right">
					<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i></button>
					<button class="btn btn-default"><i class="	glyphicon glyphicon-chevron-right"></i></button>
				</div>
			</dir>
		</div>
		<div class="kotak-kalender">
			<div class="" style="float: left;">
				<div class="panel hari-kalender">
					<p class="hari-minggu"><strong>Minggu</strong></p>
				</div>
				<div class="panel hari-kalender">
					<p><strong>Senin</strong></p>
				</div>
				<div class="panel hari-kalender">
					<p><strong>Selasa</strong></p>
				</div>
				<div class="panel hari-kalender">
					<p><strong>Rabu</strong></p>
				</div>
				<div class="panel hari-kalender">
					<p><strong>Kamis</strong></p>
				</div>
				<div class="panel hari-kalender">
					<p><strong>Jumat</strong></p>
				</div>
				<div class="panel hari-kalender">
					<p class="hari-minggu"><strong>Sabtu</strong></p>
				</div>		
			</div>
			<div class="" style="float: left;">
				<div class="panel tanggal-kalender">
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>1</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>2</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>19:30 - 21:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>3</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>4</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>19:30 - 21:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>5</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p class="hari-minggu"><strong>6</strong></p>	
					</div>
					<div class="konten-jadwal">
						
					</div>
				</div>
			</div>
			<div class="" style="float: left;">
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p class="hari-minggu"><strong>7</strong></p>	
					</div>
					<div class="konten-jadwal">
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>8</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>9</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>19:30 - 21:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>10</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>11</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>12</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p class="hari-minggu"><strong>13</strong></p>	
					</div>
					<div class="konten-jadwal">
					</div>
				</div>
			</div>
			<div class="" style="float: left;">
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p class="hari-minggu"><strong>14</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>15</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>16:30 - 18:00</p></button>
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>19:30 - 21:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>16</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>17</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>18</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>19</strong></p>	
					</div>
					<div class="konten-jadwal">
						
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p class="hari-minggu"><strong>20</strong></p>	
					</div>
					<div class="konten-jadwal">
						
					</div>
				</div>
			</div>
			<div class="" style="float: left;">
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p class="hari-minggu"><strong>21</strong></p>	
					</div>
					<div class="konten-jadwal">
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>22</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>23</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>16:30 - 18:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>24</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>25</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>16:00 - 18:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>26</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p class="hari-minggu"><strong>27</strong></p>	
					</div>
					<div class="konten-jadwal">
					</div>
				</div>
			</div>
			<div class="" style="float: left;">
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>28</strong></p>	
					</div>
					<div class="konten-jadwal">
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>29</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>30</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>16:00 - 18:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong>31</strong></p>	
					</div>
					<div class="konten-jadwal">
						<button class="btn btn-default btn-xs btn-block jadwal" data-toggle="modal" data-target="#myModal"><p>12:30 - 15:00</p></button>
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong></strong></p>	
					</div>
					<div class="konten-jadwal">
						
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong></strong></p>	
					</div>
					<div class="konten-jadwal">
						
					</div>
				</div>
				<div class="panel tanggal-kalender">
					<div class="konten-tanggal">
						<p><strong></strong></p>	
					</div>
					<div class="konten-jadwal">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Kelas PAA B | 12:30 - 15:00</h3>
					<hr>
				</div>
				<div class="modal-body">
					<p>Kategori : Kuliah</p>
					<p>Deskripsi : Kelas Kuliah</p>
					<p>Dipinjam oleh : Nafiar R</p>
				</div>
				<div class="modal-footer">
					<hr>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('moreScript')

@endsection

