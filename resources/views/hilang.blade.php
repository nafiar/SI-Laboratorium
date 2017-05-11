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
					<a href="{{url('/home')}}" class="navbar-brand">i-Laboratory</a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-main">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="" target="_blank"><i class="glyphicon glyphicon-calendar"></i> Kalender Lab</a></li>
						<li><a href="{{url('/hilang')}}" target="_blank"><i class="glyphicon glyphicon-briefcase"></i> Barang Hilang</a></li>
					</ul>

				</div>
			</div>
		</div>	
		<div class="container">
			<h1>Barang Temuan</h1>
			<div class="col-md-12 form-reservasi">
				<div class="panel panel-default panel-form">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4">
								<div class="thumbnail">
									<a href="">
										<img class="img-responsive" src="/img/headset.png" style="width:100%" >
									</a>
									<div class="caption">
										<h2 class="text-center">Headset</h2><br>
										<h5>Tanggal Ditemukan : 7 Mei 2017</h5>
									</div>
									<button type="button" class="btn btn-info btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal1">Detail</button>

									<!-- Modal -->
									<div class="modal fade" id="modal1" role="dialog">
										<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Headset</h4>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-6">
															<img class="img-responsive" src="/img/headset.png" style="width:100%">
														</div>
														<div class="col-md-6">
															<p>Tanggal Ditemukan : 7 Mei 2017 <br>
																Keterangan		: Warna hitam-biru, wireless</p>
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<a href="">
											<img class="img-responsive" src="/img/headset2.png" style="width:85%" >
										</a>
										<div class="caption">
											<h2 class="text-center">Headset</h2><br>
											<h5>Tanggal Ditemukan : 6 Mei 2017</h5>
										</div>
										<button type="button" class="btn btn-info btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal2">Detail</button>

										<!-- Modal -->
										<div class="modal fade" id="modal2" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Headset</h4>
													</div>
													<div class="modal-body">
														<div class="row">
															<div class="col-md-6">
																<img src="/img/headset2.png" style="width:100%">
															</div>
															<div class="col-md-6">
																<p>Tanggal Ditemukan : 6 Mei 2017 <br>
																	Keterangan		: Warna hitam-merah</p>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="thumbnail">
											<a href="">
												<img class="img-responsive" src="/img/gelang.png" style="width:85%" >
											</a>
											<div class="caption">
												<h2 class="text-center">Gelang</h2><br>
												<h5>Tanggal Ditemukan : 6 Mei 2017</h5>
											</div>
											<button type="button" class="btn btn-info btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal3">Detail</button>

											<!-- Modal -->
											<div class="modal fade" id="modal3" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Gelang</h4>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-md-6">
																	<img src="/img/gelang.png" style="width:100%">
																</div>
																<div class="col-md-6">
																	<p>Tanggal Ditemukan : 6 Mei 2017 <br>
																		Keterangan		: Bandul bulu, Warna Hitam-Merah</p>
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															</div>
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
												<img class="img-responsive" src="/img/kacamata.png" style="width:150%" >
											</a>
											<div class="caption">
												<h2 class="text-center">Kacamata</h2><br>
												<h5>Tanggal Ditemukan : 5 Mei 2017</h5>
											</div>
											<button type="button" class="btn btn-info btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal4">Detail</button>

											<!-- Modal -->
											<div class="modal fade" id="modal4" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Kacamata</h4>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-md-6">
																	<img src="/img/kacamata.png" style="width:100%">
																</div>
																<div class="col-md-6">
																	<p>Tanggal Ditemukan : 5 Mei 2017 <br>
																		Keterangan		: Frame Bulat-Hiyam</p>
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="thumbnail">
												<a href="">
													<img class="img-responsive" src="/img/tempat_pensil.png" style="width:62%" >
												</a>
												<div class="caption">
													<h2 class="text-center">Tempat Pensil</h2><br>
													<h5>Tanggal Ditemukan : 4 Mei 2017</h5>
												</div>
												<button type="button" class="btn btn-info btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal5">Detail</button>

												<!-- Modal -->
												<div class="modal fade" id="modal5" role="dialog">
													<div class="modal-dialog">

														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Tempat Pensil</h4>
															</div>
															<div class="modal-body">
																<div class="row">
																	<div class="col-md-6">
																		<img src="/img/tempat_pensil.png" style="width:100%">
																	</div>
																	<div class="col-md-6">
																		<p>Tanggal Ditemukan : 4 Mei 2017 <br>
																			Keterangan		: Motif Disnet tsum-tsum. Ada sejumlah uang didalamnya</p>
																		</div>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="thumbnail">
													<a href="">
														<img class="img-responsive" src="/img/kunci.png" style="width:83%" >
													</a>
													<div class="caption">
														<h2 class="text-center">Kunci Motor</h2><br>
														<h5>Tanggal Ditemukan : 4 Mei 2017</h5>
													</div>
													<button type="button" class="btn btn-info btn-lg btn-group btn-group-justified" data-toggle="modal" data-target="#modal6">Detail</button>

													<!-- Modal -->
													<div class="modal fade" id="modal6" role="dialog">
														<div class="modal-dialog">

															<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h4 class="modal-title">Kunci Motor</h4>
																</div>
																<div class="modal-body">
																	<div class="row">
																		<div class="col-md-6">
																			<img src="/img/kunci.png" style="width:100%">
																		</div>
																		<div class="col-md-6">
																			<p>Tanggal Ditemukan : 4 Mei 2017 <br>
																				Keterangan		: Kunci motor matic, Gantungan kulir</p>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
						</div>

						<div class="footer">
							<p class="text-center">Made with <img src="{{asset('img/love.png')}}" style="max-height: 16px; max-width: 16px;"> by Laboratory Administrator</p>
						</div></div>
						<script type="text/javascript" src="{{asset('js/custompaper.js')}}"></script>
						<script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
						@yield('moreScript')
					</body>
					</html>