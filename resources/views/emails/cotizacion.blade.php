<html>
		<head>
				<style type="text/css">
						body { margin: 18px; }     body, table { font: 12px/18px "Lucida Grande", Arial, Verdana, sans-serif; }     table.border { font: 11px/18px "Lucida Grande", Arial, Verdana, sans-serif; }     table.border { border-right: 1px solid #eee; border-bottom: 1px solid #eee; }     table.border td { border-top: 1px solid #eee; border-left: 1px solid #eee; }     table span { color: #888; }
				</style>
		</head>
		<body>
				<table class="invoice" width="100%" cellspacing="0" cellpadding="6">
						<tbody>
							<tr>
								<td colspan="2">
									<!--img src="" alt="" class="pull-left" style="width:200px;"-->
								</td>
							</tr>
							<tr>
								<td>
									<div class="pull-right">

									</div>
								</td>
								<td>
									<div class="pull-right">
										<p style="float: right;">
											<strong>Fecha:</strong> {{date('now')}}<br>
										</p>
									</div>
								</td>
							</tr>
								<tr>
										<td>
											<p><strong>Organización Hafikoman</strong>
											</p>
											<p>
												<strong>Estimado(a):</strong> <br>

												{{$datos->nombre}}
											</p>
										</td>
										<td align="right"> </td>
								</tr>
								<tr>
										<td colspan="2">&nbsp;</td>
								</tr>
								<tr>
										<td colspan="2">&nbsp;</td>
								</tr>
								<tr>
										<td colspan="2">
										<table class="border" width="100%" cellspacing="0" cellpadding="6">
												<tbody>
														<tr>

																<td style="width: 30%;"><span>Habitación</span></td>
																<td style="width: 30%;"><span>Vista</span></td>
																<td style="width: 20%;"><span>Adultos</span></td>
                                <td style="width: 20%;"><span>Niños</span></td>
														</tr>
														<tr class="text">
                              <td style="width: 30%;"><span>{{$datos->habitacion}}</span></td>
                              <td style="width: 30%;"><span>{{$datos->vista}}</span></td>
                              <td style="width: 20%;"><span>{{$datos->adultos}}</span></td>
                              <td style="width: 20%;"><span>{{$datos->niños}}</span></td>


														</tr>
												</tbody>
										</table>
										<table width="100%" class="textb" border="0" cellspacing="0" cellpadding="6">
												<tbody>
														<tr>
																<td colspan="2"><br />
																<hr />
																</td>
														</tr>
														<tr>
																<td align="right" style="width: 50%;"><strong>Cotización:</strong></td>
																<td class="text">{{ $datos->paquete }}</td>
														</tr>


												</tbody>
										</table>
										<table width="100%" class="textb" border="0" cellspacing="0" cellpadding="6">
												<tbody>
														<tr>
																<td>

																</td>
														</tr>
												</tbody>
										</table>
										</td>
								</tr>
						</tbody>
				</table>
		</body>
</html>
