                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <!-- <?php echo anchor('antara/awal','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?> -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nomor Registrasi</th>
                                                <th>NIP</th>
                                                <th>NIDN</th>
                                                <th>Nama Dosen</th>
                                                <th>Fakultas</th>
												<th>Jurusan</th>
                                                <th>Logbook</th>
												<th>Laporan Keuangan 60%</th>
												<th>Draf Naskah</th>
                                                <th>Progres HKI</th>
                                                <th>Catatan</th>
												<th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              
										<?php
											if (!empty($record)) {
												foreach ($record as $row) {
													?>
													<tr>
													<td><?= $row->no_regis?></td>
													<td><?= $row->nip?></td>
													<td><?= $row->nidn?></td>
													<td><?= $row->nama_dosen?></td>
													<td><?= $row->namafakultas?></td>
													<td><?= $row->namajurusan?></td>
													<td><?= $row->logbook?></td>
													<td><?= $row->lap_uang60?></td>
													<td><?= $row->naskah?></td>
													<td><?= $row->hki?></td>
													<td><?= $row->catatan?></td>
													 <td>
											
													<a href="<?php echo base_url().'antara/delete/'. $row->id_antara?>"> 
														<button type="button" name="delete" class="glyphicon glyphicon-remove"></button> </a>
                                                    
                                                </td>
													</tr>
												<?php }
											} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							<?php echo anchor('antara/action','Cetak Excel',array('class'=>'btn btn-success btn-sm')) ?>
							<li><?php echo anchor('antara/grafik_antara_fak','Grafik Dosen yang sudah daftar Laporan Antara perFakultas') ?></li>
						</div>
                    </div>
                </div>
			</div>
                <!-- /. ROW  -->